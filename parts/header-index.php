<header>
	<div class="top-bar bg-black">
		<div class="container-large">
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12 text-left">
					<ul>
						<li><a class="cursive-philosopher con-us-header" href="contact.php">Написать нам</a></li>
						<li><a class="cursive-philosopher" href="contact.php">Поддержка</a></li>
					</ul><!--right-top-bar-->
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 text-right">
					<ul>
						<?php

							if (isset($_COOKIE["login"])) {
								?>
								<li><a class ="exit_acc" href="profile.php"><img class="user_profile" src="assets/images/user_profile.png"></a></li>
								<li><a id="exit_window" class="cursive-philosopher" href="exit.php">Выйти</a></li>
								<?php
							} else {
								?>
								<li><a id="register_window" class="cursive-philosopher reg-header" href="#">Регистрация</a></li> 
						<li><a id="login_window" class="cursive-philosopher" href="#">Авторизация</a></li>
						<div id="opacity"></div>
						<!--Окно с регистрации с формой-->
  						<div id="full-register">
  							<img src="/assets/images/close.png">
  							<form method="POST" action="register.php">
  							  <div class="form-group">
							    <label>Введите ваше имя</label>
							    <input name="name" type="text" class="form-control">
							  </div>
							  <div class="form-group">
							    <label>Введите ваш email</label>
							    <input name="email" type="text" class="form-control">
							  </div>
							  
							  <div class="form-group">
							    <label>Введите ваш номер телефона</label>
							    <input name="phone" type="text" class="form-control">
							  </div>
							  <div class="form-group">
							    <label>Придумайте пароль</label>
							    <input name="password" type="password" class="form-control">
							  </div>
							  <button type="submit" class="btn btn-warning">Зарегистроваться</button>
							</form>
  						</div>
  						<!--Окно с авторизации с формой-->
  						<div id="full-login">
  							<img src="/assets/images/close.png">
  							<form method="POST" action="login.php">
							  <div class="form-group">
							    <label>Введите ваш email</label>
							    <input name="email" type="text" class="form-control">
							  </div>
							  <div class="form-group">
							    <label>Введите Ваш пароль</label>
							    <input name="password" type="password" class="form-control">
							  </div>
							  <button type="submit" class="btn btn-warning">Войти</button>
							</form>
  						</div>
  						<?php
							}
						?>
					</ul>
				</div>
			</div>
		</div>
	</div><!--top-bar-->
	<div class="container-large header">
		<div class="row">
			<div class="col-md-5 col-sm-4 col-xs-4">
				<ul class="menu">
					<li><a class="cursive-philosopher" href="/">Главная</a></li>

					<li><a href="shop.php?page=1" class="cursive-philosopher">Товары</a></li>
					<li><a class="cursive-philosopher" href="about.php">О нас</a></li>
					<li><a class="cursive-philosopher" href="blog.php">Рецепты</a></li>
					<li><a class="cursive-philosopher" href="journal-blog.php">Новости</a></li>
					<li><a class="cursive-philosopher" href="#">Партнеры</a></li>
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
					<li><a href="about.php"><i class="fa fa-volume-control-phone"></i>+38(068)-123-45-67</a></li>
					<li class="cursive-philosopher" class="search-icon"><a href="#"><i class="fa fa-search"></i>Искать</a></li>
					<li class="cart">
<?php
$count = 0;
if (isset($_COOKIE['basket'])){
	$basket_massiv = json_decode($_COOKIE['basket'], true);
	
	for ($i=0; $i< count($basket_massiv['basket']); $i++){
		$count = $count + $basket_massiv['basket'][$i]["count"];
	}
}
?>						
						<a class="cursive-philosopher" href="cart.php" onmouseover="checkCart(this)">
							<i class="fa fa-shopping-bag"></i>
							Корзина (<span class="count_basket_header"><?php echo $count ?></span>)
						</a>

						<div class="cart-modal">
<?php //СОДЕРЖИМОЕ МОДАЛЬНОГО ОКНА КОРЗИНЫ
 include $_SERVER['DOCUMENT_ROOT'] .'/modules/modal_basket/cart_modal.php';
?>
							</div><!--cart-modal-->
						</li>
					</ul><!--info-header-->
					<ul class="social-icon">
						<li class="facebook"><a href="https://www.facebook.com/profile.php?id=100057148131915"><i class="fa fa-facebook"></i></a></li>
						<li class="youtube"><a href="https://www.youtube.com/channel/UCpNCu2c2adQ_4aOlxPki3ow/videos"><i class="fa fa-youtube-play"></i></a></li>
						<li class="twitter"><a href="https://twitter.com/SpecialSpicy"><i class="fa fa-twitter"></i></a></li>
						<li class="instagram"><a href="https://www.instagram.com/special_sp1cy/"><i class="fa fa-instagram"></i></a></li>
					</ul><!--social-icon-->
				</div>
			</div>
			<form class="search">
				<input type="text" placeholder="Search...">
				<span class="close"><img src="assets/images/close2.png" alt="close"></span>
			</form>
		</div>
	</header>