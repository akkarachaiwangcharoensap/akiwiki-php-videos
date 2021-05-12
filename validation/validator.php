<?php

class Validator 
{
	/**
	 * @param string $email
	 * @return array
	 */
	public static function ValidateEmail ($email)
	{
		$response = [
			'content' => $email,
		];

		// Validate empty.
		if (empty($email)) {
			$response['error'] = [
				'message' => 'Email: empty.'
			];
		}

		// Validate whitespace rule.
		else if (!(filter_var($email, FILTER_VALIDATE_EMAIL))) {
			$response['error'] = [
				'message' => 'Email: invalid.'
			];
		}

		return $response;
	}

	/**
	 * @param string $name
	 * @return array
	 */
	public static function ValidateName ($name)
	{
		$response = [
			'content' => filter_var($name, FILTER_SANITIZE_STRING),
		];

		// Validate empty.
		if (empty($name)) {
			$response['error'] = [
				'message' => 'Name: empty.'
			];
		}

		return $response;
	}

	/**
	 * @param string $password
	 * @return array
	 */
	public static function ValidatePassword ($password) 
	{
		$response = [
			'content' => $password,
		];

		// Validate empty.
		if (empty($password)) {
			$response['error'] = [
				'message' => 'Password: empty.'
			];
		}

		// Validate whitespace rule.
		else if (preg_match('/\s/', $password)) {
			$response['error'] = [
				'message' => 'Password: No whitespace is allowed.'
			];
		}

		return $response;
	}

	/**
	 * @param string $confirmPassword
	 * @param string $password
	 *
	 * @return array
	 */
	public static function ValidateConfirmPassword ($confirmPassword, $password) 
	{
		$response = [
			'content' => $confirmPassword,
		];

		// Validate empty.
		if (empty($confirmPassword)) {
			$response['error'] = [
				'message' => 'Confirm Password: empty.'
			];
		}

		// Validate whitespace rule.
		else if (preg_match('/\s/', $confirmPassword)) {
			$response['error'] = [
				'message' => 'Confirm Password: No whitespace is allowed.'
			];
		}

		// Validate same value rule.
		else if ($confirmPassword != $password) {
			$response['error'] = [
				'message' => 'Confirm Password: Password does not match.'
			];
		}

		return $response;
	}

	/**
	 * @param string $bio
	 * @return array
	 */
	public static function ValidateBio ($bio) 
	{
		$response = [
			'content' => filter_var($bio, FILTER_SANITIZE_STRING),
		];

		// Validate empty.
		if (empty($bio)) {
			$response['error'] = [
				'message' => 'Bio: empty.'
			];
		}

		return $response;
	}

	/**
	 * Print pretty anything
	 *
	 * @param obj|array|string
	 * @return void
	 */
	public static function PrintPretty ($content)
	{
		echo '<pre>' . print_r($content, 1) . '</pre>';
	}
}