<?php

if (isset($_POST['title']) || isset($_POST['message'])) {

	$title = $_POST['title'];
	$message = $_POST['message'];

	$oneHour = time() + 3600 * 24; // 3600 = 1 hour
		
	// name, data, how long
	setcookie ('contact_title', $title, $oneHour);
	setcookie ('contact_message', $message, $oneHour);

	header('Refresh:0');
}

if (isset($_POST['clear_cookies'])) {
	setcookie('contact_title', '', time());
	setcookie('contact_message', '', time());

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
		if (isset($_COOKIE['contact_title']) && 
			isset($_COOKIE['contact_message'])) 
		{
			echo '<h1>'. $_COOKIE['contact_title'] .'</h1>';
			echo '<p>'. $_COOKIE['contact_message'] .'</p>';
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
			<input type="submit" name="clear_cookies" class="btn btn-danger float-right" value="Delete Cookies">
		</form><!-- .form-group -->
	</div><!-- .container -->
</body>
</html>