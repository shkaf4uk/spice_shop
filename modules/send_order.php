<?php
	include $_SERVER['DOCUMENT_ROOT'] .'/configs/db.php';

if (isset($_POST) and $_SERVER["REQUEST_METHOD"]=="POST"){

	$sql_user = "SELECT * FROM users WHERE phone LIKE '" . $_POST['phone'] . "'";
	$user_id = 0;

	$result_user = $conn->query($sql_user);

	if ($result_user->num_rows > 0){
		$user = mysqli_fetch_assoc($result_user);
		$user_id = $user['id'];
	} else {
		$sql_ins = "INSERT INTO users (name, phone) VALUES ('" . $_POST['full_name'] . "', '" . $_POST['phone'] . "')";

		if ($conn->query($sql_ins)){
			$user_id = $conn->insert_id;
		} else {
			echo "Ошибка user";
		}
	}

	$sql = "SELECT * FROM `delivery` WHERE `id` = '" . $_POST['chose_delivery'] . "'";
	$result = $conn -> query($sql);
	$row = mysqli_fetch_assoc($result);

	if (isset($_POST['phone']) && $_POST['phone'] != "" || isset($_POST['email']) && $_POST['email'] != ""){

		$sql = "INSERT INTO `orders` (`user_id`, `user_name`, `products`, `creat_at`, `phone`, `email`, `area`, `city`, `delivery`, `total_price`, `status`) 
			VALUES ('" . $user_id . "', '" . $_POST['full_name'] . "', '" . $_COOKIE['basket'] . "', current_timestamp(), '" . $_POST['phone'] . "', '" . $_POST['email'] . "', '" . $_POST['area'] . "', '" . $_POST['city'] . "', '" . $row['shipping'] . "', '" . $_POST['total_price'] . "', 'New')";

		if (mysqli_query($conn, $sql)){
			if ( isset($_COOKIE['basket']) ){
				setcookie("basket", "" , 0, "/");
			}
			header("Location: ../shop.php?successful_order=yes");
		} else {
			echo "Ошибка";
		}
	}
}
