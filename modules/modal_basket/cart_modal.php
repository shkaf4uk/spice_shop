<?php
include $_SERVER['DOCUMENT_ROOT'] .'/configs/db.php';

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