<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

try {
	$connection = new PDO('mysql:host=127.0.0.1;dbname=your_db', 'root', 'root');
	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$newEmail = 'anotherAki@example.com';
	$newPassword = 'Test1234567890';

	// // Insert new user
	$statement = $connection->prepare(
		'INSERT INTO users (email, password) VALUES (:email, :password)'
	);
	$statement->bindParam(':email', $newEmail);
	$statement->bindParam(':password', $newPassword);
	$statement->execute();

	// Get a user
	$akiEmail = 'aki@example.com';
	$aki = $connection->prepare('SELECT * FROM users WHERE email=:email');
	$aki->bindParam(':email', $akiEmail);
	$aki->execute();

	$aki = $aki->fetchObject();

	echo '<pre>' . print_r($aki, 1) . '</pre>';

} catch (PDOException $e) {
	die($e->getMessage());
}