	<!--===================== Header ========================-->
<?php
	include $_SERVER['DOCUMENT_ROOT'] .'/parts/header.php';
	// ПАГИНАЦИЯ
	include $_SERVER['DOCUMENT_ROOT'] .'/modules/pagination.php';
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
							<form action="#" method="POST" id='form__search__product'>
								<div class="form-group">
									<input type="text" placeholder="Что ищем?" name="search_product">
									<button type="submit"><i class="fa fa-search"></i></button>
								</div>
							</form>
						</div>
						<!--================= End of Widget Search ====================-->
						<!--================= Widget Category  ====================-->
						<div class="widget-category">
							<h3 class="widget-title">Категории</h3>
							<ul>
								<li class="widget-category-hover <?php if(!isset($_GET["cat_id"])){ ?> active <?php } ?> "><a href="shop.php?page=1" class="text-black">Все товары</a></li>
								<?php
								$sql_category = "SELECT * FROM `categories`";
								$res_category = $conn->query($sql_category);
								while ($row_cat = mysqli_fetch_assoc($res_category)){
									if(isset($_GET["cat_id"]) && $_GET["cat_id"] == $row_cat["id"] ) {
										echo "<li class='widget-category-hover active'><a class='text-black' href='/shop.php?page=1&cat_id=" . $row_cat["id"] . "'>" . $row_cat["title"] . "</a></li>";
									} else {
										echo "<li class='widget-category-hover'><a class='text-black' href='/shop.php?page=1&cat_id=" . $row_cat["id"] . "'>" . $row_cat["title"] . "</a></li>";
									}
								}
								?>
							</ul>
						</div>
						<!--================= End of Widget Category  ====================-->
						<!--================= Widget Price  ====================-->
						<div class="widget-price">
							<form id="form__filter" method="POST" action="#">
								<h3 class="widget-title">Фильтр цен</h3>
								<div id="slider-range"></div>
								<p>
									<label class="cursive-philosopher" for="amount">Цена:</label>
									<input type="text" id="amount" readonly>
								</p>
								<button type="submit" class="cursive-philosopher custom-btn green">Фильтровать</button>
							</form>
						</div>
						<!--================= End of Widget Price  ====================-->
						<!--================= Widget Recent Product  ====================-->
						
<?php // ПОПУЛЯРНЫЕ ТОВАРЫ
	include $_SERVER['DOCUMENT_ROOT'] .'/modules/products/popular_goods.php';
?>
							</ul>
						</div>
						<!--================= End of Widget Recent Product  ====================-->
					</aside>
					<!--================= End of Sidebar ====================-->
				</div>
				<div class="col-md-9 col-sm-9 col-xs-12 col-9">
					<!--================= Filter Wrap ====================-->


					<!--ПАГИНАЦИЯ-->
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
<?php //КАРТОЧКА ПРОДУКТА
	while ($row = mysqli_fetch_assoc($product)){
		include $_SERVER['DOCUMENT_ROOT'] .'/modules/products/product_card.php';
	}
?>
					</div>
					<!--================= End of Content Product ====================-->
					<!--================= Pagination ====================-->
					<ul class="pagination border-top border-color-gray">
						<?php 
						// Создаём кнопки пагинации в зависимости от количества нужных страниц
						for ($page=1; $page <= $col_result; $page++) { 
							if (isset($_GET["cat_id"])){
								?>
								<li class="<?php if($page == $_GET["page"]) {echo "active";}?>"><a href="shop.php?page=<?php echo $page; ?>&cat_id=<?php echo $_GET["cat_id"] ?>"><?php echo $page; ?></a></li>
								<?php
								} else {
								?>
								<li class="<?php if($page == $_GET["page"]) {echo "active";}?>"><a href="shop.php?page=<?php echo $page; ?>"><?php echo $page; ?></a></li>
								<?php
								}
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
		if (isset($_GET["successful_order"]) && $_GET["successful_order"] == "yes"){
		echo '<script type="text/javascript">alert("ВАША ЗАЯВКА УСПЕШНО ОФОРМЛЕНА")</script>';
	}
?>
	<!--================= End of Footer =====================-->