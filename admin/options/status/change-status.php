<?php

	include $_SERVER['DOCUMENT_ROOT'] .'/configs/db.php';

	if (isset($_POST) and $_SERVER["REQUEST_METHOD"]=="POST") {

		$sql = "UPDATE orders SET status = 'Sent' WHERE `orders`.`id` = " . $_POST["id"];

		$result = $conn->query($sql);

		echo $result;
	}
?>