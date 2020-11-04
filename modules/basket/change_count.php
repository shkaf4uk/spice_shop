<?php
include $_SERVER['DOCUMENT_ROOT'] .'/configs/db.php';



// 		$basket_massiv = json_decode($_COOKIE['basket'], true);

// var_dump($basket_massiv);

// Если есть POST запрос, то
if (isset($_POST) and $_SERVER["REQUEST_METHOD"]=="POST"){

	// Если существует переменная кука корзины
	if (isset($_COOKIE['basket'])){

		// Принимает закодированную в JSON строку и преобразует ее в переменную (массив)
		$basket_massiv = json_decode($_COOKIE['basket'], true);
var_dump($basket_massiv);

		for ($i=0; $i < count($basket_massiv['basket']); $i++){

			if( $basket_massiv['basket'][$i]['product_id'] == $_POST["id"]){
				$basket_massiv['basket'][$i]['count'] = $_POST["value"];
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