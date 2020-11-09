<?php
$sql_rand = "SELECT * FROM products ORDER BY RAND() LIMIT 3";
$res_rand = $conn->query($sql_rand);
$col_rand = mysqli_num_rows($res_rand);
?>

<div class="widget-recent-product">
	<h3 class="widget-title">Популярные товары:</h3>
	<ul>
		<?php
		for ($i=0; $i < $col_rand; $i++) {
			$mass_rand = mysqli_fetch_assoc($res_rand); 
			?>
			<li>
				<a href="single-product.php?prod_id=<?php echo $mass_rand["id"]; ?>&cat_id=<?php echo $mass_rand["category_id"]; ?>">
					<img src="<?php echo $mass_rand["image"];?>" alt="recent-product">
					<span><?php echo $mass_rand["title"];?><span class="price"><?php echo $mass_rand["costs"];?> грн</span></span>
				</a>
			</li>
			<?php
		}
