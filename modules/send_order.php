<?php
	include $_SERVER['DOCUMENT_ROOT'] .'/configs/db.php';

if (isset($_POST) and $_SERVER["REQUEST_METHOD"]=="POST"){




	$sql = "INSERT INTO `orders` (`user_id`, `user_name`, `products`, `creat_at`, `phone`, `email`, `area`, `city`, `delivery`, `total_price`, `status`) VALUES ('5', '" . $_POST['full_name'] . "', '" . $_COOKIE['basket'] . "', current_timestamp(), '" . $_POST['phone'] . "', '" . $_POST['email'] . "', '" . $_POST['area'] . "', '" . $_POST['city'] . "', '" . $_POST['chose_delivery'] . "', '" . $_POST['total_price'] . "', 'New')";


	if (mysqli_query($conn, $sql)){
		if ( isset($_COOKIE['basket']) ){
			setcookie("basket", "" , 0, "/");
		}
		
		?>
		<div class="text-center">
			<h1>Заказ успешно оформлен</h1>
			<a href="/"><h2>На главную</h2></a>
		</div>
		<?php
	} else {
		echo "Ошибка";
	}
}
