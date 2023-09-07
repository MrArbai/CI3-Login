<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $title ?></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
	<main class="form-signin w-100 m-auto">
		<form action="<?= base_url('auth/changepassword') ?>" method="post">
			<div class="main d-flex justify-content-center mt-5">
				<div class="card p-3" style="width: 25rem;">
					<h3 class="align-self-center">Change Your Password</h3>
					<div class="form-floating mt-3">
						<input type="password" name="password" class="form-control" id="floatingInput" placeholder="Enter new password..">
						<label for="floatingInput">password</label>
					</div>

					<button type="submit" name="submit" class="btn btn-primary mt-3">Reset Password</button>

				</div>

			</div>

		</form>


	</main>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>
