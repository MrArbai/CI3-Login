<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $title ?></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
	integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= base_url() ?>/assets/css/styles.css">
</head>

<body>
	<main class="form-signin w-100 m-auto">
		<?= form_open_multipart('auth/registration'); ?>
		<div class="main d-flex justify-content-center mt-5">
			<div class="card p-3" style="width: 25rem;">
				<h1 class="h3 mb-3 fw-normal align-self-center">Registration</h1>
				<div class="upload">
					<img id="image-preview" src="<?= base_url('assets/img/') ?>noprofil.jpg" width="100" height="100" alt="">
					<div class="round">
						<input name="image"type="file" onchange="handleImageUpload(event)">
						<i class="fa fa-camera" style="color: #fff;"></i>
					</div>
				</div>

				<div class="form-floating mt-3">
					<input type="text" name="name" class="form-control" id="floatingInput"
					 value="<?= set_value('name'); ?>" placeholder="Name">
					<label for="floatingInput">Name</label>
					<?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>
				<div class="form-floating mt-3">
					<input type="text" name="email" class="form-control" id="floatingInput" 
					value="<?= set_value('email'); ?>" placeholder="name@example.com">
					<label for="floatingInput">Email address</label>
					<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>
				<div class="form-floating mt-3">
					<input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
					<label for="floatingPassword">Password</label>
					<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
				</div>
				<button type="submit" name="submit" class="btn btn-primary mt-3">Submit</button>
				<div class="signup-link align-self-center">Already have an account? <a href="<?= base_url('/') ?>">Sign In</a></div>
			</div>
		</div>
		</form>


	</main>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
	integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
	<script>
		function handleImageUpload(event) {
			const reader = new FileReader();
			const image = document.getElementById('image-preview');

			reader.onload = function(e) {
				image.src = e.target.result;
			};

			reader.readAsDataURL(event.target.files[0]);
		}
	</script>
</body>

</html>
