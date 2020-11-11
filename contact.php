<?php

		include $_SERVER['DOCUMENT_ROOT'] .'/parts/header-links.php';

		include $_SERVER['DOCUMENT_ROOT'] .'/parts/header-index.php';

	if (isset($_COOKIE["login"])) {

		$sql = "SELECT * FROM users WHERE id=" . $_COOKIE["login"];
	    $result = mysqli_query($conn, $sql);
	    $user = mysqli_fetch_assoc($result);

		if (isset($_POST) and $_SERVER["REQUEST_METHOD"]=="POST") {
			$sql_s = "INSERT INTO suggestion (name, email, message) VALUES ('" . $_POST["name"] . "','" . $_POST["email"] . "','" . $_POST["message"] . "')";
			if ($conn->query($sql_s)) {

				header('Location: /');
			}
		}

?>

		<div style="width: 100%; height: 200px; text-align: center;">
			<?php

				if (isset($_POST) and $_SERVER["REQUEST_METHOD"]=="POST") {
					header('Refresh: 0');
					?>
						<h4>Спасибо за ваш отзыв, мы обязательно учтём его</h4>
					<?php
				} else {
					?>
						<h4>Оставьте ваш отзыв и мы обязательно учтём его</h4>
					<?php
				}

			?>
	

		</div>
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-6 col-xs-12 ">
						<div class="contact-us-descr">
							<p class="contact-us-descr-p"><b>Адрес:</b></p>
							<p>Улица Хрещатик, 1</p>
						</div>
						<div class="contact-us-descr">
							<p class="contact-us-descr-p"><b>Тел:</b></p>
							<p>(+38)012-345-67-89</p>
						</div>
						<div class="contact-us-descr">
							<p class="contact-us-descr-p"><b>Email:</b></p>
							<p>specialSpicy@gmail.com</p>
						</div>
					</div>
					<div class="col-md-8 col-sm-6 col-xs-12">
						<form action="send_contact.php" method="POST">
							<div>
								<label></label>
								<input type="text" name="name" value="<?php echo $user["name"]?>" class="contact-us-input-one" placeholder="Ваше ФИО">
								<input type="text" name="email" value="<?php echo $user["email"]?>" class="contact-us-input-two" placeholder="Ваш E-mail">
							</div>
							<div>
								<textarea name="message" class="contact-us-massage"  placeholder="Ваше сообщение..."></textarea>
							</div>
							<div>
								<button type="submit" class="custom-btn green">Send &#187;</button>
							</div>
						</form>
					</div>
				</div>
			</div>
				<div id="back-to-top"><i class="fa fa-angle-up"></i></div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2540.44524257122!2d30.525305915943864!3d50.45143309517478!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ce51c3bdb9a1%3A0xff877737cf946b28!2z0YPQuy4g0JrRgNC10YnQsNGC0LjQuiwgMSwg0JrQuNC10LIsIDAyMDAw!5e0!3m2!1sru!2sua!4v1604749983603!5m2!1sru!2sua" width="600" height="450" frameborder="0" style="border:0; width: 80%; margin-left: 10%;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
<?php
} else {
	echo "<h4 style = 'margin-left: 150px;'>Вы ещё не авторизированы!</h4>";
}
?>
<?php
	include $_SERVER['DOCUMENT_ROOT'] .'/parts/footer.php';
?>