<?php	
include $_SERVER['DOCUMENT_ROOT'] .'/configs/db.php';

if (isset($_POST) and $_SERVER["REQUEST_METHOD"]=="POST"){
	$j = 0;
	$sql = "SELECT * FROM `products` WHERE `title` LIKE '%" . $_POST["search_product"] . "%'";
	$product = $conn->query($sql);

	while ($row = mysqli_fetch_assoc($product)){
		//КАРТОЧКА ПРОДУКТА
		include $_SERVER['DOCUMENT_ROOT'] .'/modules/products/product_card.php';
	$j = $j + 1;
	} // конец цикла while
	if ($j == null){
		echo "<h3> Совпадений не найдено </h3>";
	}
}