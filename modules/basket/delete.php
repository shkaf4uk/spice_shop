<?php

if (isset($_POST) and $_SERVER["REQUEST_METHOD"]=="POST"){

	if (isset($_COOKIE["basket"])){
		$basket_massiv = $_COOKIE["basket"];
		$basket_massiv = json_decode($_COOKIE['basket'], true);

		for ($i=0; $i < count($basket_massiv['basket']); $i++){
			
			if($basket_massiv['basket'][$i]['product_id'] == $_POST['id']){
				unset($basket_massiv['basket'][$i]);
				sort($basket_massiv['basket']);
			}

		}

	setcookie("basket", "" , 0, "/");
	
	// Преобразование массива в JSON формат
	$jsonProduct = json_encode($basket_massiv);

	//Добавляем куки
	setcookie("basket", $jsonProduct, time() + 60*360, "/");

	//вывод количества товаров в корзине
	echo $jsonProduct;

	}
}
?>