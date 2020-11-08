<?php

	include $_SERVER['DOCUMENT_ROOT'] .'/configs/db.php';

	if (isset($_POST) and $_SERVER["REQUEST_METHOD"]=="POST") {
		$sql_s = "INSERT INTO suggestion (name, email, message) VALUES ('" . $_POST["name"] . "','" . $_POST["email"] . "','" . $_POST["message"] . "')";
		if ($conn->query($sql_s)) {

			header('Location: /contact.php');

		}
	}

?>