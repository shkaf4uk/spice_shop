<?php
include $_SERVER['DOCUMENT_ROOT'] .'/configs/db.php';

if (isset($_POST) and $_SERVER["REQUEST_METHOD"]=="POST"){

	if (isset($_COOKIE['basket'])){
		$basket_massiv = json_decode($_COOKIE['basket'], true);

		for ($i=0; $i < count($basket_massiv['basket']); $i++){

			if( $basket_massiv['basket'][$i]['product_id'] == $_POST["id"]){
				$basket_massiv['basket'][$i]['count'] = $_POST["value"];
			}
		}

		setcookie("basket", "" , 0, "/");
		$jsonProduct = json_encode($basket_massiv);
		setcookie("basket", $jsonProduct, time() + 60*360, "/");
		echo $jsonProduct;
	}
}
?>