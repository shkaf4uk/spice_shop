<?php
	include $_SERVER['DOCUMENT_ROOT'] .'/parts/header.php';

	// ПАГИНАЦИЯ
	include $_SERVER['DOCUMENT_ROOT'] .'/modules/pagination.php';

	$product = $conn->query( "SELECT * FROM products WHERE id=" . $_GET["prod_id"] );
	$row = mysqli_fetch_assoc($product);
?>
	<!--============== End of Header ========================-->

	<?php
		//ПРОДУКТ
		$sql = "SELECT * FROM products WHERE id =" . $_GET["prod_id"];
		$result_one_prod = $conn->query($sql);
		$mass_one_prod = mysqli_fetch_assoc($result_one_prod);

		//КАТЕГОРИИ
		$sql_cat = "SELECT * FROM `categories` WHERE `id` = ". $_GET["cat_id"];
		$result_cat = $conn->query($sql_cat);
		$row_cat = mysqli_fetch_assoc($result_cat);
	?>

	<!--================= Breadcrumb  ====================-->
	<div class="breadcrumb-top bg-yellow">
		<div class="cursive-philosopher container-stat">
			<!-- Здесь можно указать название товаров -->
			<h2>Карточка товара</h2>
			<ol class="cursive-philosopher breadcrumb">
				<li><a href="/">Главная</a></li>
				<li><a href="shop.php?page=1">Наш магазин</a></li>
				<li class="active"><?php echo $mass_one_prod["title"]; ?></li>
			</ol><!--breadcrumb-->
		</div>
	</div>
	<!--================= End of Breadcrumb  ====================-->

	<!--================= Single Product  ====================-->
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<!--================= Single Product Slider  ====================-->
				<div class="single-product-slider">
					<div class="product-slider-shop owl-carousel owl-theme">
						<!--Изображения будут выглядеть, конечно, оч плохо, но здесь уже не наша вина. Я просто не смог найти нормальное разрешение. (Максим К.)-->
						<div class="item"><img src="<?php echo $mass_one_prod["image"]?>" alt="single-product"></div>
					</div>
					<div class="zoom" data-toggle="modal" data-target="#zoom-modal">
						<img src="assets/images/zoom.png" alt="zoom">
					</div>
				</div>
				<!--================= End of Single Product Slider  ====================-->
				<div class="modal fade" id="zoom-modal" tabindex="-1" role="dialog">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							</div>
							<div class="modal-body">
								<div id="carousel" class="carousel slide" data-ride="carousel">
									<div class="carousel-inner">
										<div class="item active">
											<img src="<?php echo $mass_one_prod["image"]?>" alt="single">
										</div><!--item-->
									<!-- <div class="item">
											<img src="http://via.placeholder.com/570x570" alt="single">
										</div> -->
										<!--item--> 
									</div><!--carousel-inner-->
								</div><!--carousel-->
								<div id="thumbcarousel" class="carousel slide" data-interval="false">
									<div class="carousel-inner">
										<div class="item active">
											<div data-target="#carousel" data-slide-to="0" class="thumb">
												<img src="http://via.placeholder.com/133x133" alt="product">
											</div>
											<div data-target="#carousel" data-slide-to="1" class="thumb">
												<img src="http://via.placeholder.com/133x133" alt="product">
											</div>
											<div data-target="#carousel" data-slide-to="2" class="thumb">
												<img src="http://via.placeholder.com/133x133" alt="product">
											</div>
											<div data-target="#carousel" data-slide-to="3" class="thumb">
												<img src="http://via.placeholder.com/133x133" alt="product">
											</div>
										</div><!--item-->
										<div class="item">
											<div data-target="#carousel" data-slide-to="4" class="thumb">
												<img src="http://via.placeholder.com/133x133" alt="product">
											</div>
											<div data-target="#carousel" data-slide-to="5" class="thumb">
												<img src="http://via.placeholder.com/133x133" alt="product">
											</div>
											<div data-target="#carousel" data-slide-to="6" class="thumb">
												<img src="http://via.placeholder.com/133x133" alt="product">
											</div>
											<div data-target="#carousel" data-slide-to="7" class="thumb">
												<img src="http://via.placeholder.com/133x133" alt="product">
											</div>
										</div>
									</div><!--carousel-inne-->
									<a class="left carousel-control" href="#thumbcarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
									<a class="right carousel-control" href="#thumbcarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
								</div><!--thumbcarousel-->
							</div><!--modal-body-->
						</div><!--modal-content-->
					</div><!--modal-dialog-->
				</div><!--modal-->
			</div>
			<div class="col-md-6">
				<!--================= Inside Single  ====================-->
				<div class="inside-single">
					<div class="description">
						<p class="cursive-philosopher price"><?php echo $mass_one_prod["title"]?></p>
					</div><!--description-->
					<ul class="cursive-philosopher cat-tag-sha">
						<li>Категория:
							<a href="shop.php?page=1&cat_id=<?php echo $_GET["cat_id"]?>"><?php echo $row_cat["title"] ?></a>
						</li>
					</ul>
					<div class="description">
						<p class="cursive-philosopher"><?php echo $mass_one_prod["description"]?></p>
					</div><!--description-->
					<div class="cursive-philosopher price"><?php echo $mass_one_prod["costs"]?> грн</div>
					<div class="add-to-cart">
						<button href="#" class="custom-btn pink" onclick="addToBasket(this)" data-id="<?php echo $row['id'] ?>" >Добавить в корзину</button>
					</div><!--add-to-cart-->
				</div>
				<!--================= End of Inside Single  ====================-->
			</div>
			<div class="col-md-12">
				<!--================= Tab  ====================-->
				<ul class="cursive-philosopher nav nav-tabs text-center">
					<li class="active"><a href="#description" data-toggle="tab" aria-expanded="true">Описание</a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane fade in active" id="description">
						<p class="des-title cursive-philosopher"><?php echo $mass_one_prod["content"]?></p>
					</div>
					<!--================= End of Tab  ====================-->
					<h2 class="title-head text-center sim-prod-title cursive-philosopher title__head__single">Похожие товары:</h2>
					<!--================= Similar Products  ====================-->
					<div class="similar-products owl-carousel owl-theme">
					
					<?php
						// Создаём запрос и сразу же выполняем его. Получаем из базы все данные из таблицы продуктов
						$sql_result = $conn->query("SELECT * FROM products");
						while ($row = mysqli_fetch_assoc($sql_result)){
					?>
						<div class="item">
							<div class="product same-prod">
								<div class="images prod-card-same">
									<a href="single-product.html"><img src="<?php echo $row["image"]?>" alt="product2"></a>
									<div class="button-group btn-grp-cart-serch">
										<a href="cart.php" class="custom-btn pink"><i class="fa fa-shopping-bag"></i></a>
										<a href="single-product.php?prod_id=<?php echo $row["id"]; ?>" class="custom-btn pink"><i class="fa fa-search"></i></a>
									</div><!--button-group-->
								</div><!--images-->
								<div class="info-product">
									<a href="single-product.html" class="title"><?php echo $row["title"]?></a>
									<span class="price"><?php echo $row["costs"]?> грн</span>
								</div><!--info-product-->
							</div><!--product-->
						</div>
					<?php 
					}
					?>
					</div>
				</div>
				<!--================= End of Similar Products  ====================-->
			</div>
		</div>
	</div>
	<!--================= End of Single Product  ====================-->
<?php
	include $_SERVER['DOCUMENT_ROOT'] .'/parts/custom-footer.php';
?>