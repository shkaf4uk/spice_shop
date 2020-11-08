
<?php

	include $_SERVER['DOCUMENT_ROOT'] .'/configs/db.php';

?>

<?php

	if (isset($_POST) and $_SERVER["REQUEST_METHOD"]=="POST") {

		$sql_login = "SELECT * FROM users WHERE email = '" . $_POST["email"] . "' AND password =  '" . $_POST["password"] . "'";

		$result_login = $conn->query($sql_login);

		$user = mysqli_fetch_assoc($result_login);

		if ($result_login->num_rows > 0) {

			header('Location: /');

			setcookie("login", $user["id"], time() + 60*60*24);

		} else {
			echo "Error";
		}

		if ($result_login->num_rows > 0) {

			header('Location: /');

			setcookie("login", $user["id"], time() + 60*60*24);

		}		
	
}

	if (isset($_POST) and $_SERVER["REQUEST_METHOD"]=="POST") {

			if ($_POST["email"] == 'admin' && $_POST["password"] == 'admin') {
				
				header('Location: /admin');
				
			}

	}

?>


