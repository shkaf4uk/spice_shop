<?php

	include $_SERVER['DOCUMENT_ROOT'] .'/HTML/configs/db.php';

	// $sql = "SELECT * FROM products WHERE id=25";
	// $result = $conn -> query($sql);
	// $product = mysqli_fetch_assoc($result);
	// var_dump($product);


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Spice shop</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.5">
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
	<!--===================== Header ========================-->
	<header>
		<div class="top-bar bg-black">
			<div class="container-large">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12 text-left">
						<ul>
							<li><a href="contact.html">Contact Us</a></li>
							<li><a href="contact.html">Support</a></li>
						</ul><!--right-top-bar-->
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 text-right">
						<ul>
							<li><a href="#">Login</a></li>
							<li>
								<select class="custom-select">
									<option value="dollar">us dollar</option>
									<option value="Eur">Eur</option>
									<option value="Eur2">This is just for demo</option>
								</select>
							</li>
						</ul><!--right-top-bar-->
					</div>
				</div>
			</div>
		</div><!--top-bar-->
		<div class="container-large header">
			<div class="row">
				<div class="col-md-5 col-sm-4 col-xs-4">
					<ul class="menu">
						<li><a href="index.html">home</a></li>
						<li class="mega-menu-top">
							<a href="#">Features</a>
							<div class="mega-menu columns-4">
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
							<a href="about.html">About</a>
							<ul class="sub-menu">
								<li><a href="#">Why Choose Cinagro?</a></li>
								<li><a href="#">Organic Leadership Awards</a></li>
								<li><a href="#">Verification &amp; Certification</a></li>
								<li><a href="#">Organic Standards</a></li>
							</ul><!--sub-menu-->
						</li>
						<li><a href="blog.html">Recipes</a></li>
						<li><a href="journal-blog.html">Journal</a></li>
						<li class="mega-menu-top">
							<a href="#">Store</a>
							<div class="mega-menu columns-3">
								<ul>
									<li class="first">Shop Page</li>
									<li><a href="shop.html">Shop</a></li>
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
				<div class="col-md-2 col-sm-3 col-xs-3 text-center">
					<div class="logo"><a href="index.html"><img src="assets/images/logo.png" alt="logo"></a></div>
				</div>
				<div class="col-md-5 col-sm-5 col-xs-5 text-right">
					<ul class="info-header">
						<li><a href="#"><i class="fa fa-volume-control-phone"></i>+91-141-4007601</a></li>
						<li class="search-icon"><a href="#"><i class="fa fa-search"></i>search</a></li>
						<li class="cart">
							<a href="cart.html"><i class="fa fa-shopping-bag"></i>Bag (0)</a>
							<div class="cart-modal">
								<ul>
									<li>
										<a href="single-product.html">
											<img src="http://via.placeholder.com/70x70" alt="cart-produc">
											<span class="title">Beech Nut -<br>Just Pumpkin</span>
											<span class="price">$ 6.49</span>
										</a>
									</li>
								</ul>
								<div class="total">
									Cart Subotal: <span class="price">$ 6.49</span>
								</div>
								<div class="button">
									<a href="cart.html" class="custom-btn">view cart</a>
									<a href="cart.html" class="custom-btn pink">checkout</a>
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
	<!--============== End of Header ========================-->
	<!--================= Breadcrumb ====================-->
	<div class="breadcrumb-top bg-yellow">
		<div class="container">
			<h2>Корзина</h2>
			<ol class="breadcrumb">
				<li><a href="/">Главная</a></li>
				<li class="active">Корзина</li>
			</ol><!--breadcrumb-->
		</div>
	</div>
	<!--================= End of Breadcrumb ====================-->
	<div class="container">
		<!--================= Cart Inside ====================-->
		<div class="cart-inside">
			<h4>Товары в вашей корзине</h4>
			<table>
				<thead>
					<tr>
						<td class="table-product">Продукт</td>
						<td>&nbsp;</td>
						<td class="text-center">Цена</td>
						<td class="text-center">Количество</td>
						<td class="text-center">Сумма</td>
						<td>&nbsp;</td>
					</tr>
				</thead>
				<tbody>


<?php
			//Вывод товаров в корзине
		  		if (isset($_COOKIE['basket'])){
		  			$basket_massiv = json_decode($_COOKIE['basket'], true);

		  			for ($i=0; $i< count($basket_massiv['basket']); $i++){
		  				$sql = "SELECT * FROM products WHERE id=". $basket_massiv['basket'][$i]['product_id'];
		  				$result = $conn -> query($sql);
		  				$product = mysqli_fetch_assoc($result);
?>
					<tr>
						<td class="product-thumbnail"><a href="single-product.html"><img src="<?php echo $product["image"] ?>" alt="cart-product"></a></td>
						<td class="product-name" data-title="Product"><?php echo $product["title"] . " " .  $product["description"] ?></td>
						<td class="product-price text-center" data-title="Price"><span class="price"><?php echo $product["costs"] ?>грн</span></td>
						<td class="product-quantity text-center" data-title="Quantity">
							<div class="quantity">
								<span class="minus"><img src="assets/images/minus.png" alt="minus"></span>
								<input value="<?php echo $basket_massiv['basket'][$i]['count'] ?>" size="5">
								<span class="plus"><img src="assets/images/plus.png" alt="plus"></span>
							</div><!--quantity-->
						</td>
						<td class="product-price text-center" data-title="Total"><span class="price"><?php echo $product["costs"]*$basket_massiv['basket'][$i]['count'] ?>грн</span></td>
						<td class="product-remove text-right"><button onclick="deleteProductBasket(this, <?php echo $product['id'] ?>)" class="btn_delete_product"><img src="assets/images/remove.png" alt="remove"></button></td>
					</tr>
<?php
	}
}
?>

				</tbody>
			</table>
			<div class="bottom-table">
				<a href="shop.php" class="custom-btn">Обратно в магазин</a>
				<span><a href="#"><img src="assets/images/refresh.png" alt="refresh">update cart</a></span>
			</div><!--bottom-table-->
		</div>
		<!--================= End of Cart Inside ====================-->
	</div>
	<!--================= Checkout ====================-->
	<div class="checkout bg-grey">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<form>
						<div class="form-group">
							<label class="text-black">Coupon</label>
							<input placeholder="Coupone Code" class="border-all border-color-extra-gray">
							<button class="custom-btn white">Apply Coupon</button>
						</div>
					</form>
				</div>
				<div class="col-md-4 center">
					<form>
						<div class="form-group">
							<label class="text-black">Calculate shipping</label>
							<div class="sorting border-all border-color-extra-gray">
								<select>
									<option value="Ukraine">Ukraine</option>
									<option value="Ukraine">Ukraine2</option>
								</select>
								<i class="fa fa-angle-down"></i>
							</div>
						</div>
						<div class="form-group">
							<input placeholder="Country / State" class="border-all border-color-extra-gray">
						</div>
						<div class="form-group">
							<input placeholder="Postcode / Zip" class="border-all border-color-extra-gray">
							<button class="custom-btn white">update totals</button>
						</div>
					</form>
				</div>
				<div class="col-md-4">
					<!--===================== Checkout Form ========================-->
					<div class="checkout-form">
						<div class="subtotal">
							<span>Subtotal</span><span class="price">$9,99</span>
						</div><!--subtotal-->
						<div class="shipping">
							<span>Shipping</span>
							<ul>
								<li><label class="checkbox"><input type="checkbox" name="billing" value="company"><span class="label"><span>Flat Rate:</span><span class="price">$14</span></span></label></li>
								<li><label class="checkbox"><input type="checkbox" name="billing" value="company"><span class="label"><span>Free shipping</span></span></label></li>
								<li><label class="checkbox"><input type="checkbox" name="billing" value="company"><span class="label"><span>Local pickup</span></span></label></li>
							</ul>
						</div><!--shipping-->
						<div class="total">
							<span>Total</span><span class="price">$19,99</span>
						</div><!--total-->
						<div class="text-right"><button class="custom-btn" data-toggle="modal" data-target="#checkout-modal">proceed to checkout</button></div>
					</div>
					<!--===================== End of Checkout Form ========================-->
					<!--===================== Checkout Modal ========================-->
					<div class="modal checkout-modal fade" id="checkout-modal" tabindex="-1" role="dialog">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<h3>Thank you</h3>
								<p>for your purchase!</p>
								<button type="button" class="btn" data-dismiss="modal"><img src="assets/images/close.png" alt="close"></button>
							</div>
						</div>
					</div>
					<!--===================== End of Checkout Modal ========================-->
				</div>
			</div>
		</div>
	</div>
	<!--================= End of Checkout ====================-->
	<!--===================== Footer ========================-->
	<footer class="bg-yellow">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="subscribe text-center">
						<h2>Join our secret society</h2>
						<form>
							<div class="form-group">
								<input type="text" placeholder="Enter your email...">
								<div class="custom-btn bg-black text-yellow">enter</div>
							</div>
						</form>
					</div><!--subscribe-->
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="widget-page">
						<h4 class="widget-title">Customer Care</h4>
						<a href="404.html">Register</a>
						<a href="404.html">My Account</a>
						<a href="404.html">Track Order</a>
					</div><!--widget-page-->
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="widget-page">
						<h4 class="widget-title">FAQ</h4>
						<a href="404.html">Ordering Info</a>
						<a href="404.html">Shipping &amp; Delivery</a>
						<a href="404.html">Our Guarantee</a>
					</div><!--widget-page-->
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="widget-page">
						<h4 class="widget-title">Our company</h4>
						<a href="404.html">About</a>
						<a href="blog.html">Press</a>
						<a href="single-product.html">Products</a>
					</div><!--widget-page-->
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="widget-contact">
						<h4 class="widget-title">contact usy</h4>
						<address>123 6th St. Melbourne, FL 32904<br>Phone: (125) 546-4478<br>Email: yesorganic.com</address>
					</div><!--widget-contact-->
				</div>
			</div>
			<div class="copyright">
				<p>Copyright &copy; 2018 cinagro. Theme by <a href="https://fruitfulcode.com/">fruitfulcode</a></p>
			</div>
		</div>
		<div id="back-to-top"><i class="fa fa-angle-up"></i></div>
	</footer>
<!--================= End of Footer =====================-->
</div><!--wrapper-->
<script src="assets/js/lib/jquery.js"></script>
<script src="assets/js/lib/bootstrap.min.js"></script>
<script src="assets/js/lib/owl.carousel.min.js"></script>
<script src="assets/js/lib/jquery-ui.min.js"></script>
<script src="assets/js/lib/TweenMax.min.js"></script>
<script src="assets/js/lib/lazyYT.js"></script>
<script src="assets/js/lib/masonry.pkgd.min.js"></script>
<script src="assets/js/lib/jquery.filterizr.min.js"></script>
<script src="assets/js/lib/slick.min.js"></script>
<script src="assets/js/lib/jquery.counterup.min.js"></script>
<script src="assets/js/lib/waypoints.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>