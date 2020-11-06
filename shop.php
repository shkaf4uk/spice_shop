	<!--===================== Header ========================-->
<?php
	include $_SERVER['DOCUMENT_ROOT'] .'/parts/header.php';

?>
	<!--============== End of Header ========================-->
	<!--================= Breadcrumb ====================-->
	<div class="breadcrumb-top bg-yellow">
		<div class="cursive-philosopher container-stat">
			<h2>Наш магазин</h2>
			<ol class="cursive-philosopher breadcrumb">
				<li><a href="#">Главная</a></li>
				<li class="active">Магазин</li>
			</ol><!--breadcrumb-->
		</div>
	</div><!--breadcrumb-top-->
	<!--================= End of Breadcrumb ====================-->
	<!--================= Content Shop ====================-->
	<div class="content-shop">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-3 col-xs-12 col-3">
					<!--================= Sidebar ====================-->
					<aside class="sidebar-shop">
						<!--================= Widget Search  ====================-->
						<div class="widget-search">
							<h3 class="widget-title">Искать</h3>
							<form>
								<div class="form-group">
									<input type="text" placeholder="Что ищем?">
									<button><i class="fa fa-search"></i></button>
								</div>
							</form>
						</div>
						<!--================= End of Widget Search ====================-->
						<!--================= Widget Category  ====================-->
						<div class="widget-category">
							<h3 class="widget-title">Категории</h3>
							<ul>
								<li class="active widget-category-hover"><a href="#" class="text-black">Все товары</a></li>
								<li class="widget-category-hover"><a class="text-black" href="#">Сухофрукты и орехи</a></li>
								<li class="widget-category-hover"><a class="text-black" href="#">Специи</a></li>
								<li class="widget-category-hover"><a class="text-black" href="#">Чай</a></li>
								<li class="widget-category-hover"><a class="text-black" href="#">Кофе</a></li>
								<li class="widget-category-hover"><a class="text-black" href="#">Семена</a></li>
								<li class="widget-category-hover"><a class="text-black" href="#">Подарочные наборы</a></li>
								<li class="widget-category-hover"><a class="text-black" href="#">Специи в банках</a></li>
								<li class="widget-category-hover"><a class="text-black" href="#">Смеси специй</a></li>
							</ul>
						</div>
						<!--================= End of Widget Category  ====================-->
						<!--================= Widget Price  ====================-->
						<div class="widget-price">
							<h3 class="widget-title">Фильтр цен</h3>
							<div id="slider-range"></div>
							<p>
								<label class="cursive-philosopher" for="amount">Цена:</label>
								<input type="text" id="amount" readonly>
							</p>
							<a href="#" class="cursive-philosopher custom-btn green">Фильтровать</a>
						</div>
						<!--================= End of Widget Price  ====================-->
						<!--================= Widget Recent Product  ====================-->
						
						<?php
						$sql_rand = "SELECT * FROM products ORDER BY RAND() LIMIT 3";
						$res_rand = $conn->query($sql_rand);
						$col_rand = mysqli_num_rows($res_rand);
						?>

						<div class="widget-recent-product">
							<h3 class="widget-title">Популярные товары:</h3>
							<ul>
								<?php
								for ($i=0; $i < $col_rand; $i++) {
								$mass_rand = mysqli_fetch_assoc($res_rand); 
								?>
								<li>
									<a href="single-product.html">
										<img src="<?php echo $mass_rand["image"];?>" alt="recent-product">
										<span><?php echo $mass_rand["title"];?><span class="price"><?php echo $mass_rand["costs"];?> грн</span></span>
									</a>
								</li>
								<?php
								}
								?>
								
							</ul>
						</div>
						<!--================= End of Widget Recent Product  ====================-->
					</aside>
					<!--================= End of Sidebar ====================-->
				</div>
				<div class="col-md-9 col-sm-9 col-xs-12 col-9">
					<!--================= Filter Wrap ====================-->
					<?php 
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
						$sql_result = $conn->query( "SELECT * FROM products");
						// Считаем количество строк и делим его на нужное количество карточек на одной странице
						$col_result = ceil(mysqli_num_rows($sql_result) / $result_per_page);
						// Высчитываем количество страниц для того, чтобы разместить всю информацию из таблицы БД
						$this_page_first_result = ($page-1)*$result_per_page;
						// Создаём запрос и сразу же выполняем его. Выбираем всю информацию из таблицы БД с лимитом 0-8
						$product = $conn->query( "SELECT * FROM products LIMIT " . $this_page_first_result . "," . $result_per_page);
						// Получаем количество товаров в БД
						$col = mysqli_num_rows($sql_result);

						// Переменная количества карточек на одной странице 
						$header_result_page = 4;
						// Если переменная страницы больше единицы, значит
						if ($page > 1) {
							// Если $header_result_page умноженое на страницу больше или равно количеству товаров в БД, то
							if (ceil($header_result_page * $page) >= $col) {
								// Присваиваем $header_result_page значение количества товаров в БД
								$header_result_page = $col;
								// Иначе умножаем на количество страниц и выводим на экран
							} else {
								$header_result_page = $header_result_page * $page;
							}
						}
					?>

					<div class="filter-wrap">
						<p class="cursive-philosopher">Показано <?php echo $this_page_first_result+1?> - <?php echo $header_result_page?> из <?php echo $col?> товаров</p>
						<div class="switch">
							<span class="list"><i class="fa fa-list"></i></span>
							<span class="grid-icon active"><i class="fa fa-th"></i></span>
						</div><!--switch-->
					</div>
					<!--================= End of Filter Wrap ====================-->
					<!--================= Content Product ====================-->

					<div class="content-product">
<?php 
while ($row = mysqli_fetch_assoc($product)){
?>
						<div class="product">
							<div class="images text-center images-card">
								<a href="single-product.html">
									<img class="image-prod-card" src="<?php echo $row["image"] ?>" alt="product5">
								</a>
								<div class="button-group">
									<!-- Кнопка добавления товара в корзину -->
									<button href="#" class="custom-btn pink" onclick="addToBasket(this)" data-id="<?php echo $row['id'] ?>" ><i class="fa fa-shopping-bag"></i></button>
									<a href="#" class="custom-btn pink"><i class="fa fa-search"></i></a>
								</div><!--button-group-->
							</div><!--images-->
							<div class="info-product">
								<a href="single-product.html" class="title"><?php echo $row["title"]?></a>
								<span class="price"><?php echo $row["costs"] ?> грн</span>
							</div><!--info-product--> 
						</div><!--product-->
<?php
}
?>
					</div>
					<!--================= End of Content Product ====================-->
					<!--================= Pagination ====================-->
					<ul class="pagination border-top border-color-gray">
						<?php 
						// Создаём кнопки пагинации в зависимости от количества нужных страниц
						for ($page=1; $page <= $col_result; $page++) { 
							?>
							<li class="<?php if($page == $_GET["page"]) {echo "active";}?>"><a href="shop.php?page=<?php echo $page; ?>"><?php echo $page; ?></a></li>
							<?php
						}
						?>
					</ul><!--pagination-->
					<!--================= End of Pagination ====================-->
				</div>
			</div>
		</div>
	</div>
	<!--================= End of Content Shop ====================-->

	<!--===================== Footer ========================-->
<?php
	include $_SERVER['DOCUMENT_ROOT'] .'/parts/footer.php';
		if ($_GET["successful_order"] == "yes"){
		echo '<script type="text/javascript">alert("ВАША ЗАЯВКА УСПЕШНО ОФОРМЛЕНА")</script>';
	}
?>
	<!--================= End of Footer =====================-->