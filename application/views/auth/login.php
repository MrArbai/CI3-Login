<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $title ?></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
	integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
	<main class="form-signin w-100 m-auto">
		<form action="<?= base_url('/') ?>" method="post">
			<div class="main d-flex justify-content-center mt-5">
				<div class="card p-3" style="width: 25rem;">
					<h1 class="h3 mb-3 fw-normal align-self-center">Login</h1>
					<?php echo $this->session->flashdata('message'); ?>
					<div class="form-floating mt-3">
						<input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
						<label for="floatingInput">Email address</label>
						<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>
					<div class="form-floating mt-3">
						<input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
						<label for="floatingPassword">Password</label>
						<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>
					<div class="pass-link"><a href="<?= base_url('auth/forgotpassword') ?>">Forgot password?</a></div>
					<button type="submit" name="submit" class="btn btn-primary mt-3">Submit</button>
					<div class="signup-link align-self-center">Not a member? 
					<a href="<?= base_url('auth/registration') ?>">Signup now</a></div>
				</div>

			</div>

		</form>


	</main>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
	integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

</html>