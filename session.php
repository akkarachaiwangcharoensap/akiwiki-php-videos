<?php

session_start();

if (isset($_POST['title']) || isset($_POST['message'])) {

	$title = $_POST['title'];
	$message = $_POST['message'];

	$oneHour = time() + 3600 * 24; // 3600 = 1 hour
		
	$_SESSION['title'] = $title;
	$_SESSION['message'] = $message;

	header('Refresh:0');
}

if (isset($_POST['clear_sessions'])) {
	session_unset();
	session_destroy();

	header('Refresh:0');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP | Cookies</title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>
<body>
	<?php
		if (isset($_SESSION['title']) && 
			isset($_SESSION['message'])) 
		{
			echo '<h1>'. $_SESSION['title'] .'</h1>';
			echo '<p>'. $_SESSION['message'] .'</p>';
		}
	?>
	<div class="container" style="margin-top: 2rem;">
		<form class="form-group" method="POST" action="">
			<label>Title</label>
			<input type="text" name="title" class="form-control">

			<label>Message</label>
			<textarea class="form-control" name="message"></textarea>
			<input type="submit" class="btn btn-success float-right" style="margin-top: 1rem;">
		</form><!-- .form-group -->

		<form class="form-group" method="POST" action="">
			<input type="submit" name="clear_sessions" class="btn btn-danger float-right" value="Delete Sessions">
		</form><!-- .form-group -->
	</div><!-- .container -->
</body>
</html>