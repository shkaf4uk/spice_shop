<?php
include $_SERVER['DOCUMENT_ROOT'] .'/HTML/configs/db.php';


// 1. Получить товар по которому кликнул пользователь
// 2. Добавить массив товаров
// 3. Добавить массив в куки

// Если есть пост запрос, то
if (isset($_POST) and $_SERVER["REQUEST_METHOD"]=="POST"){

	// sql запрос 
	$sql = "SELECT * FROM products WHERE id=" . $_POST["id"];

	// запрос из БД
	$result = $conn->query($sql);

	// Преобразование в массив
	$product = mysqli_fetch_assoc($result);

	// Если существует переменная кука корзины
	if (isset($_COOKIE['basket'])){

		// Принимает закодированную в JSON строку и преобразует ее в переменную (массив)
		$basket_massiv = json_decode($_COOKIE['basket'], true);

		/* 
			1. Пройтись по всему масиву корзины
			2. Проверить есть ли совпадение
			3. Если совпадения есть, увеличить количество товаров
		*/
			$issetProduct = 0;
			for ($i=0; $i < count($basket_massiv['basket']); $i++){
				if( $basket_massiv['basket'][$i]["product_id"] == $product["id"] ){
					$basket_massiv['basket'][$i]['count']++;
					$issetProduct = 1;
				}
			}

			if ($issetProduct != 1){
						// добавляем к массиву новый продукт
				$basket_massiv['basket'][] = [
				"product_id" => $product['id'],
				"count" => 1 
				];
			}

	} else {
		// Если куки нету, то создаем переменную $basket_massiv и помещаем ее продукт
		$basket_massiv = ["basket" => [ 
			["product_id" => $product['id'],
			"count" => 1]  
	] ];
	}

	setcookie("basket", "" , 0, "/");
	
	
	// Преобразование массива в JSON формат
	$jsonProduct = json_encode($basket_massiv);

	//Добавляем куки
	setcookie("basket", $jsonProduct, time() + 60*60, "/");

	//вывод количества товаров в корзине
	echo $jsonProduct;
}
?>