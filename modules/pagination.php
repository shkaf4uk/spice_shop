<?php
include $_SERVER['DOCUMENT_ROOT'] .'/configs/db.php';
// Если GET запроса не существует, то автоматически присваиваем переменной значение 1
if(!isset($_GET["page"])) {
	$page = 1;
	// В ином случае - выводим номер страницы
} else {
	$page = $_GET["page"];
}
// Количество карточек с товарами на одной странице
$result_per_page = 4;
// Создаём запрос и сразу же выполняем его. Получаем из базы все данные из таблицы продуктов
if (isset($_GET["cat_id"])){
	$sql_result = $conn->query( "SELECT * FROM products WHERE category_id=" . $_GET["cat_id"] );

} else {
	$sql_result = $conn->query( "SELECT * FROM products");
}
// Считаем количество строк и делим его на нужное количество карточек на одной странице
$col_result = ceil(mysqli_num_rows($sql_result) / $result_per_page);

// Высчитываем количество страниц для того, чтобы разместить всю информацию из таблицы БД
$this_page_first_result = ($page-1)*$result_per_page;

// Создаём запрос и сразу же выполняем его. Выбираем всю информацию из таблицы БД с лимитом 0-8
if (isset($_GET["cat_id"])){
	$product = $conn->query( "SELECT * FROM products WHERE category_id=" . $_GET["cat_id"] . " LIMIT " . $this_page_first_result . "," . $result_per_page);
	
} else {
	$product = $conn->query( "SELECT * FROM products LIMIT " . $this_page_first_result . "," . $result_per_page);
}
// Получаем количество товаров в БД
$col = mysqli_num_rows($sql_result);

// Переменная количества карточек на одной странице 
$header_result_page = 4;
// Если переменная страницы больше единицы, значит
if ($page) {
	// Если $header_result_page умноженое на страницу больше или равно количеству товаров в БД, то
	if (ceil($header_result_page * $page) >= $col) {
		// Присваиваем $header_result_page значение количества товаров в БД
		$header_result_page = $col;
		// Иначе умножаем на количество страниц и выводим на экран
	} else {
		$header_result_page = $header_result_page * $page;
	}
}