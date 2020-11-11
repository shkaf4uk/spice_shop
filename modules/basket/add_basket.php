<?php
include $_SERVER['DOCUMENT_ROOT'] .'/configs/db.php';

if (isset($_POST) and $_SERVER["REQUEST_METHOD"]=="POST"){

	$sql = "SELECT * FROM products WHERE id=" . $_POST["id"];
	$result = $conn->query($sql);
	$product = mysqli_fetch_assoc($result);

	if (isset($_COOKIE['basket'])){
		$basket_massiv = json_decode($_COOKIE['basket'], true);

			$issetProduct = 0;
			for ($i=0; $i < count($basket_massiv['basket']); $i++){
				if( $basket_massiv['basket'][$i]["product_id"] == $product["id"] ){
					$basket["basket"][$i]["product_price"] == $product['costs'];
					$basket_massiv['basket'][$i]['count']++;
					$issetProduct = 1;
				}
			}

			if ($issetProduct != 1){
				$basket_massiv['basket'][] = [
				"product_id" => $product['id'],
				"product_price" => $product ['costs'],
				"count" => 1 
				];
			}
	} else {
		$basket_massiv = ["basket" => [ 
			["product_id" => $product['id'],
			"product_price" => $product ["costs"],
			"count" => 1]  
		] ];
	}

	setcookie("basket", "" , 0, "/");
	$jsonProduct = json_encode($basket_massiv);
	setcookie("basket", $jsonProduct, time() + 60*360, "/");
	echo $jsonProduct;
}
?>