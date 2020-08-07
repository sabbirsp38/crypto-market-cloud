<?php
	function redirect() {
		header('Location: register.php');
		exit();
	}

	if (!isset($_GET['email']) || !isset($_GET['token'])) {
		redirect();
	} else {
		$con = new mysqli('localhost', 'cryptomarket', '123456', 'cryptomarketcloud');

		$email = $con->real_escape_string($_GET['email']);
		$token = $con->real_escape_string($_GET['token']);

		$sql = $con->query("SELECT id FROM users_crypto WHERE email='$email' AND token='$token' AND isEmailConfirmed=0");

		if ($sql->num_rows > 0) {
			$con->query("UPDATE users_crypto SET isEmailConfirmed=1, token='' WHERE email='$email'");
			header("Location:UProfile/index.php");
		} else
			redirect();
	}
?>