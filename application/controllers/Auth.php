<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_m', 'auth', true);
	}

	public function index()
	{
		$logged_in = $this->session->userdata('logged_in');
		if ($logged_in) {
			redirect('auth/home');
		}
		$data['title'] = "Please login";
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		if ($this->form_validation->run() == false) {
			$this->load->view('auth/login', $data);
		} else {
			$this->login();
		}
	}
	public function login()
	{
		$email = htmlspecialchars($this->input->post('email', true));
		$password = htmlspecialchars($this->input->post('password', true));

		$user = $this->auth->getByEmail($email);
		$this->session->set_userdata('user', $user);

		// jika usernya ada
		if ($user) {
			if ($user['inactive'] == 1) {
				// cek passwordnya
				if (password_verify($password, $user['password'])) {
					$this->session->set_userdata('logged_in', true);
					redirect('auth/home', $data);
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">wrong email or password</div>');
					redirect('auth');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">wrong email or password</div>');
				redirect('auth');
			}
		} else {
			// jika usernya tidak ada
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">wrong email or password</div>');
			redirect('auth');
		}
	}

	public function registration()
	{
		$logged_in = $this->session->userdata('logged_in');
		if ($logged_in) {
			redirect('auth/home');
		}
		$data['title'] = "Registration";
		$rules = $this->auth->rules();
		$validation = $this->form_validation->set_rules($rules);

		if ($validation->run() == false) {
			$this->load->view('auth/registration', $data);
		} else {
			$this->auth->saveUserToken('verify');
			$this->auth->registration();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! Your account has been created.</div>');
			redirect('auth');
		}
	}

	public function verify()
	{
		$email = $this->input->get('email');
		$token = $this->input->get('token');

		$user = $this->auth->getUserTokenByEmail($email);

		if ($user['token'] == $token) {
			$this->db->set('inactive', 1);
			$this->db->where('email', $email);
			$this->db->update('users');

			$this->db->delete('users_token', ['email' => $email]);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! Your account has been actived. Please login</div>');
			redirect('auth');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">wrong email or token</div>');
			redirect('auth');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('logged_in', false);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
		redirect('auth');
	}

	public function home()
	{
		$logged_in = $this->session->userdata('logged_in');
		if (!$logged_in) {
			redirect('auth');
		}
		$this->load->view('dashbord/home');
	}

	public function forgotpassword()
	{
		$validation = $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		if ($validation->run() == false) {
			$data['title'] = "Forgot Password";
			$this->load->view('auth/forgotpassword', $data);
		} else {
			$email = htmlspecialchars($this->input->post('email', true));
			$user = $this->auth->getByEmail($email);

			if ($user['inactive'] == 0) {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Your Email is Not Actived</div>');
				redirect('auth/forgotpassword');
			} else {
				$this->auth->saveUserToken('forgot');
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Email reset password has been sand to your email!</div>');
				redirect('auth/forgotpassword');
			}
		}
	}

	public function resetpassword()
	{
		$email = $this->input->get('email');
		$token = $this->input->get('token');

		$user = $this->auth->getUserTokenByEmail($email);

		if ($user['token'] == $token) {
			$this->session->set_userdata('reset_password', $email);
			$this->changepassword();
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">wrong email or token</div>');
			redirect('auth');
		}
	}

	public function changepassword()
	{
		$email = $this->session->userdata('reset_password');

		if (!$email) {
			redirect('auth');
		}
		$validation = $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]');

		if ($validation->run() == false) {
			$data['title'] = "Change Password";
			$this->load->view('auth/changepassword',$data);
		} else {
			$this->auth->changepassword();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You password has been change</div>');
			redirect('auth');
		}
	}
}
