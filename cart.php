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
				<a href="shop.php?page=1" class="custom-btn">Обратно в магазин</a>
				<span class="total_price_basket">Отого: 0грн</span>
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
<?php
	include $_SERVER['DOCUMENT_ROOT'] .'/parts/footer.php';
?>
	<!--================= End of Footer =====================-->