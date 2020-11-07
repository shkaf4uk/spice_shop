<?php
include $_SERVER['DOCUMENT_ROOT'] .'/configs/db.php';

if (isset($_POST) and $_SERVER["REQUEST_METHOD"]=="POST"){
	$sql = "SELECT * FROM products WHERE costs > " . $_POST["inputFirst"] . " AND costs < " . $_POST["inputSecond"] . "";
	$result = $conn->query($sql);

	while ($row = mysqli_fetch_assoc($result)){
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
}
?>