<?php
	include $_SERVER['DOCUMENT_ROOT'] .'/configs/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>SpecialSpicy</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.5">
	<!-- Подключение шрифтов Lobster -->
	<link href="https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@1,700&display=swap" rel="stylesheet">
	<!-- Framework Css -->
	<link rel="stylesheet" type="text/css" href="assets/css/lib/bootstrap.min.css">
	<!-- Font Awesome / Icon Fonts -->
	<link rel="stylesheet" type="text/css" href="assets/css/lib/font-awesome.min.css">
	<!-- Owl Carousel / Carousel- Slider -->
	<link rel="stylesheet" type="text/css" href="assets/css/lib/owl.carousel.min.css">
	<!-- Video YouTube -->
	<link rel="stylesheet" type="text/css" href="assets/css/lib/lazyYT.min.css">
	<!-- Carousel- Slider / Vertical -->
	<link rel="stylesheet" type="text/css" href="assets/css/lib/slick.css">
	<!-- Style Theme -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<!-- Responsive Theme -->
	<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

	<link rel="stylesheet" type="text/css" href="assets/css/main.css">

</head>
<body>
<div class="wrapper">

<header>
	<div class="top-bar bg-black">
		<div class="container-large">
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12 text-left">
					<ul>
						<li><a class="cursive-philosopher con-us-header" href="contact.html">Написать нам</a></li>
						<li><a class="cursive-philosopher" href="contact.html">Поддержка</a></li>
					</ul><!--right-top-bar-->
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 text-right">
					<ul>
						<li><a class="cursive-philosopher reg-header" href="#">Регистрация</a></li>
						<li><a class="cursive-philosopher" href="#">Авторизация</a></li>
					</ul><!--right-top-bar-->
				</div>
			</div>
		</div>
	</div><!--top-bar-->
	<div class="container-large header">
		<div class="row">
			<div class="col-md-5 col-sm-4 col-xs-4">
				<ul class="menu">
					<li><a class="cursive-philosopher" href="/">Главная</a></li>
					<li class="mega-menu-top">
						<a href="#" class="cursive-philosopher">Товары</a>
						<div class="menu-w-stuff mega-menu columns-4">
							<ul>
								<li class="first">Fruit &amp; Veg</li>
								<li><a href="#">Set Boxes</a></li>
								<li><a href="#">Fruit</a></li>
								<li><a href="#">Veg</a></li>
								<li><a href="#">Salad</a></li>
								<li><a href="#">Herbs</a></li>
								<li><a href="#">Organic</a></li>
								<li><a href="#">Juice &amp; Smoothies</a></li>
								<li><a href="#">Nuts &amp; Dried Fruit</a></li>
								<li><a href="#">Gourmet Pantry</a></li>
							</ul>
							<ul>
								<li class="first">Dairy</li>
								<li><a href="#">Milk</a></li>
								<li><a href="#">Cheese</a></li>
								<li><a href="#">Specialty Cheese</a></li>
								<li><a href="#">Yoghurt</a></li>
								<li><a href="#">Butter</a></li>
								<li><a href="#">Cream</a></li>
								<li><a href="#">Dips &amp; Antipasto</a></li>
							</ul>
							<ul>
								<li class="first">Frozen</li>
								<li><a href="#">Frozen Vegetables</a></li>
								<li><a href="#">Frozen Desserts &amp; Bakery</a></li>
								<li><a href="#">Frozen Seafood</a></li>
								<li><a href="#">Frozen Breakfast Food</a></li>
								<li><a href="#">Frozen Fruit</a></li>
								<li><a href="#">Ice</a></li>
								<li><a href="#">Frozen Appetizers</a></li>
							</ul>
							<ul>
								<li class="first">Superfoods</li>
								<li><a href="#">Ayurverdic</a></li>
								<li><a href="#">South American</a></li>
								<li><a href="#">Green &amp; Fungi</a></li>
								<li><a href="#">Cacao &amp; Coconut</a></li>
								<li><a href="#">Fruit &amp; Hemp</a></li>
								<li><a href="#">Superfood Teas</a></li>
								<li><a href="#">Superfood Snacks</a></li>
								<li><a href="#">Superfood Juices</a></li>
							</ul>
						</div><!--mega-menu-->
					</li><!--children-->
					<li class="children">
						<a class="cursive-philosopher" href="about.html">О нас</a>
						<ul class="sub-menu">
							<li><a href="#">Почему именно SpecialSpicy?</a></li>
							<li><a href="#">Organic Leadership Awards</a></li>
							<li><a href="#">Verification &amp; Certification</a></li>
							<li><a href="#">Organic Standards</a></li>
						</ul><!--sub-menu-->
					</li>
					<li><a class="cursive-philosopher" href="blog.html">Рецепты</a></li>
					<li><a class="cursive-philosopher" href="journal-blog.html">Новости</a></li>
					<li class="mega-menu-top">
						<a class="cursive-philosopher" href="#">Партнеры</a>
						<div class="menu-w-stuff mega-menu columns-3">
							<ul>
								<li class="first">Shop Page</li>
								<li><a href="shop.php">Shop</a></li>
								<li><a href="shop-two.html">Shop v2</a></li>
								<li><a href="shop-column-three.html">Shop Column 3</a></li>
								<li><a href="shop-column-three-v2.html">Shop Column 3 v2</a></li>
								<li><a href="shop-column-three-v3.html">Shop Column 3 v3</a></li>
							</ul>
							<ul>
								<li class="first">Shop Page</li>
								<li><a href="shop-with-sidebar.html">Shop With Sidebar</a></li>
								<li><a href="shop-with-sidebar-v2.html">Shop With Sidebar v2</a></li>
								<li><a href="shop-column-six.html">Shop Column Six</a></li>
								<li><a href="shop-full-width.html">Shop Full Width</a></li>
								<li><a href="shop-categories.html">Shop Categories</a></li>
							</ul>
							<ul>
								<li class="first">Single Product</li>
								<li><a href="single-product-limited.html">Single Product Limited</a></li>
								<li><a href="single-product-sale.html">Single Product Sale</a></li>
								<li><a href="single-product-stock.html">Single Product Stock</a></li>
								<li><a href="single-product-v2.html">Single Product v2</a></li>
								<li><a href="single-product-video.html">Single Product Video</a></li>
							</ul>
						</div><!--mega-menu-->
					</li>
				</ul><!--menu-->
				<button type="button" class="menu-button">
					<span></span>
				</button>
			</div>
			<div class="logotype col-md-2 col-sm-3 col-xs-3 text-center">
				<div class="logo">
					<a href="/">
						<img src="assets/images/logo1.png" alt="logo">
					</a>
				</div>
			</div>
			<div class="col-md-5 col-sm-5 col-xs-5 text-right">
				<ul class="info-header">
					<li><a href="#"><i class="fa fa-volume-control-phone"></i>+38(068)-123-45-67</a></li>
					<li class="cursive-philosopher" class="search-icon"><a href="#"><i class="fa fa-search"></i>Искать</a></li>
					<li class="cart">
						<a class="cursive-philosopher" href="cart.php"><i class="fa fa-shopping-bag"></i>Корзина (0)</a>
						<div class="cart-modal">

<?php 
		  			//Вывод добавленных товаров в модальном окне (при наведении на корзину)

				$sum = 0;
		  		if (isset($_COOKIE['basket'])){
		  			$basket_massiv = json_decode($_COOKIE['basket'], true);
		  			
		  			for ($i=0; $i< count($basket_massiv['basket']); $i++){
		  				$sql = "SELECT * FROM products WHERE id=". $basket_massiv['basket'][$i]['product_id'];
		  				$result = $conn -> query($sql);
		  				$product = mysqli_fetch_assoc($result);
		  				$countBasket = $basket_massiv['basket'][$i]['count'];

?>
								<ul>
									<li>
										<a href="single-product.html">
											<img src="<?php echo $product["image"] ?>" alt="cart-produc">
											<span class="title"><?php echo $product["title"] . " " .  $product["description"] ?></span>
											<span class="price"><?php echo $product["costs"]*$countBasket ?>грн - <?php echo $countBasket ?>шт.</span>
										</a>
									</li>
								</ul>
<?php
		//общая сумма в корзине
 		$sum = $sum  + $product["costs"]*$countBasket;
	}
}
?>
								<div class="total">
									Итого в корзине: <span class="price"><?php if($sum != 0){echo $sum; echo "грн"; } else { echo "пусто"; } ?></span>
								</div>
								<div class="button">
									<a href="cart.php" class="custom-btn pink">Просмотреть корзину</a>
								</div>
							</div><!--cart-modal-->
						</li>
					</ul><!--info-header-->
					<ul class="social-icon">
						<li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li class="google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li class="tumblr"><a href="#"><i class="fa fa-tumblr"></i></a></li>
						<li class="instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
					</ul><!--social-icon-->
				</div>
			</div>
			<form class="search">
				<input type="text" placeholder="Search...">
				<span class="close"><img src="assets/images/close2.png" alt="close"></span>
			</form>
		</div>
	</header>