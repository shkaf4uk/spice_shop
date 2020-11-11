
<?php

	include $_SERVER['DOCUMENT_ROOT'] .'/configs/db.php';
	
?>

<?php

	if (isset($_POST) and $_SERVER["REQUEST_METHOD"]=="POST") {

		$sql_register = "INSERT INTO users (name, phone , email, password) VALUES ('" . $_POST["name"] . "','" . $_POST["phone"] . "','" . $_POST["email"] . "', '" . $_POST["password"] . "')";

		if ($conn->query($sql_register)) {

			header('Location: /');

		}

	}

?>

 
