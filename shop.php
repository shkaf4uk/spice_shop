	<!--===================== Header ========================-->
<?php
	include $_SERVER['DOCUMENT_ROOT'] .'/parts/header.php';
?>
	<!--============== End of Header ========================-->
	<!--================= Breadcrumb ====================-->
	<div class="breadcrumb-top bg-yellow">
		<div class="container">
			<h2>Наш магазин</h2>
			<ol class="breadcrumb">
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
							<h3 class="widget-title">Search</h3>
							<form>
								<div class="form-group">
									<input type="text" placeholder="Search...">
									<button><i class="fa fa-search"></i></button>
								</div>
							</form>
						</div>
						<!--================= End of Widget Search ====================-->
						<!--================= Widget Category  ====================-->
						<div class="widget-category">
							<h3 class="widget-title">Category</h3>
							<ul>
								<li class="active widget-category-hover"><a href="#" class="text-black">All</a></li>
								<li class="widget-category-hover"><a class="text-black" href="#">Fresh Fruit</a></li>
								<li class="widget-category-hover"><a class="text-black" href="#">Herbs</a></li>
								<li class="widget-category-hover"><a class="text-black" href="#">Fresh Meat</a></li>
								<li class="widget-category-hover"><a class="text-black" href="#">Sea food</a></li>
								<li class="widget-category-hover"><a class="text-black" href="#">Seed</a></li>
								<li class="widget-category-hover"><a class="text-black" href="#">Spices</a></li>
								<li class="widget-category-hover"><a class="text-black" href="#">Vegetable</a></li>
								<li class="widget-category-hover"><a class="text-black" href="#">Milk</a></li>
							</ul>
						</div>
						<!--================= End of Widget Category  ====================-->
						<!--================= Widget Price  ====================-->
						<div class="widget-price">
							<h3 class="widget-title">Filter by Price</h3>
							<div id="slider-range"></div>
							<p>
								<label for="amount">Price:</label>
								<input type="text" id="amount" readonly>
							</p>
							<a href="#" class="custom-btn green">Filter</a>
						</div>
						<!--================= End of Widget Price  ====================-->
						<!--================= Widget Recent Product  ====================-->
						<div class="widget-recent-product">
							<h3 class="widget-title">Recent Product</h3>
							<ul>
								<li>
									<a href="single-product.html">
										<img src="http://via.placeholder.com/68x68" alt="recent-product">
										<span>Beech Nut - Just Pumpkin <span class="price">$ 6.49</span></span>
									</a>
								</li>
								<li>
									<a href="single-product.html">
										<img src="http://via.placeholder.com/68x68" alt="recent-product">
										<span>Detox Zero<span class="price">$ 6.49</span></span>
									</a>
								</li>
								<li>
									<a href="single-product.html">
										<img src="http://via.placeholder.com/68x68" alt="recent-product">
										<span>Low Cow - Lite Ice Cream<span class="price">$ 6.49</span></span>
									</a>
								</li>
							</ul>
						</div>
						<!--================= End of Widget Recent Product  ====================-->
					</aside>
					<!--================= End of Sidebar ====================-->
				</div>
				<div class="col-md-9 col-sm-9 col-xs-12 col-9">
					<!--================= Filter Wrap ====================-->
					<div class="filter-wrap">
						<p>Showing 1–8 of 22 results</p>
						<div class="sorting">
							<form>
								<select>
									<option value="Default">Default Sorting</option>
									<option value="Default">ASC</option>
									<option value="Default">DESC</option>
								</select>
							</form>
							<i class="fa fa-angle-down"></i>
						</div><!--sorting-->
						<div class="switch">
							<span class="list"><i class="fa fa-list"></i></span>
							<span class="grid-icon active"><i class="fa fa-th"></i></span>
						</div><!--switch-->
					</div>
					<!--================= End of Filter Wrap ====================-->
					<!--================= Content Product ====================-->
<?php 

	$product = $conn->query( "SELECT * FROM products" );
?>
					<div class="content-product">
<?php 
while ($row = mysqli_fetch_assoc($product)){
?>
						<div class="product">
							<div class="images text-center">
								<a href="single-product.html"><img src="<?php echo $row["image"] ?>" alt="product5"></a>
								<div class="button-group">
									<!-- Кнопка добавления товара в корзину -->
									<button href="#" class="custom-btn pink" onclick="addToBasket(this)" data-id="<?php echo $row['id'] ?>" ><i class="fa fa-shopping-bag"></i></button>
									<a href="#" class="custom-btn pink"><i class="fa fa-search"></i></a>
								</div><!--button-group-->
							</div><!--images-->
							<div class="info-product">
								<a href="single-product.html" class="title"><?php echo $row["title"] . " " .  $row["description"] ?></a>
								<span class="price"><?php echo $row["costs"] ?>грн</span>
							</div><!--info-product--> 
						</div><!--product-->
<?php
}
?>
					</div>
					<!--================= End of Content Product ====================-->
					<!--================= Pagination ====================-->
					<ul class="pagination border-top border-color-gray">
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li class="no-pointer"><a href="#">...</a></li>
						<li><a href="#">10</a></li>
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
?>
	<!--================= End of Footer =====================-->