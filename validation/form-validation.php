<?php

include_once ('./validator.php');

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

if (!empty($_POST)) 
{
	$email = Validator::ValidateEmail($_POST['email']);
	$password = Validator::ValidatePassword($_POST['password']);
	$confirmPassword = Validator::ValidateConfirmPassword($_POST['confirm_password'], $password['content']);
	$name = Validator::ValidateName($_POST['confirm_password']);
	$bio = Validator::ValidateBio($_POST['bio']);

	// Validator::PrintPretty($email);
	// Validator::PrintPretty($password);
	// Validator::PrintPretty($confirmPassword);
	// Validator::PrintPretty($name);
	// Validator::PrintPretty($bio);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP | Form Validation</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container" style="margin-top: 2rem;">

		<form class="form-group" method="POST" action="">
			<label>Email</label>
			<input type="text" name="email" class="form-control">

			<label>Password</label>
			<input type="password" name="password" class="form-control">

			<label>Confirm Password</label>
			<input type="password" name="confirm_password" class="form-control">

			<label>Name</label>
			<input type="text" name="name" class="form-control">

			<label>Bio</label>
			<textarea class="form-control" name="bio"></textarea>

			<input type="submit" class="btn btn-success float-right" style="margin-top: 1rem;">
		</form><!-- .form-group -->
	</div><!-- .container -->
</body>
</html>