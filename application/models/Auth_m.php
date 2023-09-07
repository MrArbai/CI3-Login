<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_m extends CI_Model
{

	private $_table   = 'users';
	private $_tableToken   = 'users_token';
	private $_primary = 'id';

	/*
	 * Start backend 
	 */
	public function rules()
	{
		$this->form_validation->set_rules('name', 'Full name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email address', 'trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]');
	}

	public function registration()
	{
		$nama = htmlspecialchars($this->input->post('name', true));
		$email = htmlspecialchars($this->input->post('email', true));
		$password = password_hash($this->input->post('password', true), PASSWORD_DEFAULT);
		$file_upload = $_FILES['image']['name'];

		$image = 'noprofil.jpg';
		if ($file_upload) {
			$config['upload_path'] = './assets/img/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']     = '2048';

			$this->load->library('upload', $config);

			if ($this->upload->do_upload('image')) {
				$image = $this->upload->data('file_name');
			} else {
				echo $this->upload->display_errors();
			}
		}

		$user = array(
			'name'			=> $nama,
			'email'			=> $email,
			'password'		=> $password,
			'inactive'		=> 0,
			'image'			=> $image

		);
		$this->db->insert($this->_table, $user);
	}

	public function getByEmail($email)
	{
		$query = $this->db->get_where($this->_table, ['email' => $email]);
		return $query->row_array();
	}
	public function getAll()
	{
		$query = $this->db->get($this->_table);
		return $query->result_array();
	}
	public function saveUserToken($type)
	{

		$email = htmlspecialchars($this->input->post('email', true));
		$token = base64_encode(random_bytes(32));

		$user = array(
			'email'			=> $email,
			'token'		=> $token,
		);
		$this->db->insert($this->_tableToken, $user);
		$this->_sendEmail($token, $type, $email);
	}
	private function _sendEmail($token, $type, $email)
	{
		$config =
			[
				'protocol' => 'smtp',
				'smtp_host' => 'ssl://smtp.googlemail.com',
				'smtp_user' => '223220066@student.unaki.ac.id',
				'smtp_pass' => 'mahasiswaunaki',
				'smtp_port' => 465,
				'mailtype'	=> 'html',
				'charset'	=> 'utf-8',
				'newline'	=> "\r\n",
			];

		$this->email->initialize($config);

		$this->email->from('223220066@student.unaki.ac.id', 'Coralis Studio');
		$this->email->to($email);
		if ($type == 'verify') {
			$this->email->subject('account verification');
			$this->email->message('Clik this link to verify your account :<a href = "' . base_url() . 'auth/verify?email=' . $email . '&token=' . urlencode($token) . '">Activate</a>');
		}
		if ($type == 'forgot') {
			$this->email->subject('Reset Password');
			$this->email->message('Clik this link to reset your password :<a href = "' . base_url() . 'auth/resetpassword?email=' . $email . '&token=' . urlencode($token) . '">Activate</a>');
		}

		$this->email->send();
	}
	public function getUserTokenByEmail($email)
	{
		$query = $this->db->get_where($this->_tableToken, ['email' => $email]);
		return $query->row_array();
	}

	public function changepassword()
	{
		$password = password_hash($this->input->post('password', true), PASSWORD_DEFAULT);
		$email = $this->session->userdata('reset_password');
		$this->db->set('password', $password);
		$this->db->where('email', $email);
		$this->db->update('users');

		$this->db->delete('users_token', ['email' => $email]);
		$this->session->unset_userdata('reset_password');

	}
}
