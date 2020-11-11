<?php

	include $_SERVER['DOCUMENT_ROOT'] .'/configs/db.php';
        $sql = "SELECT * FROM users WHERE id=" . $_COOKIE["login"];
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_assoc($result);

	if (isset($_POST) and $_SERVER["REQUEST_METHOD"]=="POST") {

		$sql_e = "UPDATE users SET name = '" . $_POST["name"] . "', phone = '" . $_POST["phone"] . "', email = '" . $_POST["email"] . "' , address = '" . $_POST["address"] . "'  WHERE users. `id` = '" . $_COOKIE["login"] . "'";	
		
			if ($conn -> query($sql_e)) {
				echo "<h2>Product edited</h2>";
			  	header('Location: /profile.php');
			} else {
				echo "<h2>Error</h2>";
			}

	}

?>