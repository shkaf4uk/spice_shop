	<!--===================== Header ========================-->
<?php
	include $_SERVER['DOCUMENT_ROOT'] .'/parts/header.php';
?>
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
								<span class="minus" data-id="<?php echo $product['id'] ?>"><img src="assets/images/minus.png" alt="minus"></span>
								<input class="input_basket" value="<?php echo $basket_massiv['basket'][$i]['count'] ?>" size="5">
								<span class="plus" data-id="<?php echo $product['id'] ?>"><img src="assets/images/plus.png" alt="plus"></span>
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
				<span class="total_price_basket">Итого: <?php if($sum != 0){echo $sum; echo "грн"; } else { echo "пусто"; } ?></span>
			</div><!--bottom-table-->
		</div>
		<!--================= End of Cart Inside ====================-->
	</div>
	<!--================= Checkout ====================-->
	<div class="checkout bg-grey">

		<div class="container">
			<h2 class="order_basket text-center">Оформление заказа</h2>
			<div class="row">
				<div class="col-md-4">
					<form>
						<div class="form-group">
							<label class="text-black">Промо-код</label>
							<input placeholder="промо-код" class="border-all border-color-extra-gray">
							<button class="custom-btn white">Применить код</button>
						</div>
					</form>
				</div>

			<!-- Форма отправки заказа -->
				<form id="form__send__order" action="modules/send_order.php" method="POST">
					<div class="col-md-4 center">
						<div class="form-group">
							<label class="text-black">ФИО</label>
							<input placeholder="ФИО" name="full_name" class="border-all border-color-extra-gray">
						</div>
						<div class="form-group">
							<input placeholder="номер телефона" name="phone" class="border-all border-color-extra-gray">
						</div>
						<div class="form-group">
							<input placeholder="example@gmail.com" name="email" class="border-all border-color-extra-gray">
							<!-- <button class="custom-btn white">update totals</button> -->
						</div>
					</div>

					<div class="col-md-4 center">
						<div class="form-group">
							<label class="text-black">Доставка</label>
							<input placeholder="область" name="area" class="border-all border-color-extra-gray">
						</div>
						<div class="form-group">
							<input placeholder="город" name="city" class="border-all border-color-extra-gray">
						</div>
						<div class="form-group">
							<div class="sorting border-all border-color-extra-gray">
								<select name="chose_delivery" onchange="SelectValue(this)">
									<?php 
                                        $sql = "SELECT * FROM delivery";
                                        $result = $conn ->query($sql);
                                        while($row = mysqli_fetch_assoc($result)){
                                            echo "<option value='" . $row["id"] . "' >". $row["shipping"] ."</option>";
                                        }
                                    ?>
								</select>
								<i class="fa fa-angle-down"></i>
							</div>	
						</div>
					</div>

					<div class="checkout-form">
						<div class="col-md-4">
							<span class="col-md-8 text-left" style="padding-left: 0px;">Промежуточный итог:</span>
							<span class="col-md-4 text-right"><?php if($sum != 0){echo $sum; echo "грн"; } else { echo "0грн"; } ?></span>
						</div><!--subtotal-->
						<div class="col-md-4">
							<span class="col-md-8 text-left" style="padding-left: 0px;">Доставка: 
								<?php 
								$sql = "SELECT * FROM delivery";
                                $result = $conn ->query($sql);
                                $row = mysqli_fetch_assoc($result);
								echo $row["shipping"]; 

								?></span>
							<span class="col-md-4 text-right"><?php echo $row["price"]  ?>грн</span>
						</div><!--shipping-->
						<div class="col-md-4">
							<span class="col-md-8 text-left" style="padding-left: 0px;">Всего:</span>
							<span class="col-md-4 text-right"><?php if($sum != 0){echo $sum+$row["price"]; echo "грн"; } else { echo "0грн"; } ?></span>
							<input type="hidden" name="total_price" value="<?php if($sum != 0){echo $sum; echo "грн"; } else { echo "0грн"; } ?>">
						</div><!--total-->
					</div>
					<div class="col-md-12 text-center"><button type="submit" class="custom-btn btn_send_orders">Оформить заказ</button></div>
				</form>
					<!--===================== End of Checkout Form ========================-->


			</div>
		</div>
	</div>
	<!--================= End of Checkout ====================-->
	
	<!--===================== Footer ========================-->
<?php
	include $_SERVER['DOCUMENT_ROOT'] .'/parts/footer.php';
?>
	<!--================= End of Footer =====================-->