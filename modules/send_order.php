<?php
	include $_SERVER['DOCUMENT_ROOT'] .'/configs/db.php';

if (isset($_POST) and $_SERVER["REQUEST_METHOD"]=="POST"){

	// $sql = "SELECT * FROM users WHERE phone LIKE '" . $_POST['phone_user'] . "'";
	// $user_id = 0;

	// $result = $conn->query($sql);

	// if ($result->num_rows > 0){
	// 	$user = mysqli_fetch_assoc($result);
	// 	$user_id = $user['id'];
	// } else {
	// 	$sql = "INSERT INTO users (name, phone) VALUES ('" . $_POST['full_name'] . "', '" . $_POST['phone_user'] . "')";

	// 	if ($conn->query($sql)){
	// 		// echo "User added";
	// 		$user_id = $conn->insert_id;
	// 	} else {
	// 		echo "Error user";
	// 	}
	// }

	// $sql = "INSERT INTO `orders` 
	// 	(`user_id`, `user_name`, `products`, `creat_at`, `phone`, `email`, `area`, `city`, `delivery`, `total_price`, `status`) 
	// 	VALUES ('3', '" . $_POST['full_name'] . "', '" . $_COOKIE['basket'] . "', current_timestamp(), '" . $_POST['phone'] . "', '" . $_POST['email'] . "', '" . $_POST['area'] . "', '" . $_POST['city'] . "', '" . $_POST['chose_delivery'] . "', '" . $_POST['total_price'] . "' 'New')";


	$sql = "INSERT INTO `orders` (`user_id`, `user_name`, `products`, `creat_at`, `phone`, `email`, `area`, `city`, `delivery`, `total_price`, `status`) VALUES ('5', '" . $_POST['full_name'] . "', '" . $_COOKIE['basket'] . "', current_timestamp(), '" . $_POST['phone'] . "', '" . $_POST['email'] . "', '" . $_POST['area'] . "', '" . $_POST['city'] . "', '" . $_POST['chose_delivery'] . "', '" . $_POST['total_price'] . "', 'New')";


	if (mysqli_query($conn, $sql)){
		if ( isset($_COOKIE['basket']) ){
			setcookie("basket", "" , 0, "/");
		}
		
		?>
		<div class="text-center">
			<h1>Order sent successfully</h1>
			<a href="/"><h2>To home</h2></a>
		</div>
		<?php
	} else {
		echo "Error order";
	}
}
