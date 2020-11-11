	<!--===================== Header ========================-->

<?php
	include $_SERVER['DOCUMENT_ROOT'] .'/parts/header-links.php';
?>
<body>
<div class="wrapper-main">
	<?php
		include $_SERVER['DOCUMENT_ROOT'] .'/parts/header-index.php';
	?>
	<!--============== End of Header ========================-->

	<!--===================== Base-Slider ========================-->
	<div class="position-slider base-slider owl-carousel owl-theme">
		<div class="item">
			<img src="assets/images/spice4.png" alt="slider">
			<div class="cursive-philosopher text-slider">
				<h2>Природа всегда <br>заботилась о нас!</h2>
				<a href="shop.php?page=1" class="custom-btn text-center yellow">Товары</a>
			</div><!--text-slider-->
		</div><!--item-->
		<div class="item slide-two">
			<img src="assets/images/spice5.png" alt="slider">
			<div class="cursive-philosopher text-slider">
				<h2>Что приготовить?<br>Мы подскажем!</h2>
				<a href="blog.php" class="custom-btn text-center yellow">Рецепты</a>
			</div><!--text-slider-->
		</div><!--item-->
		<div class="item slide-three">
			<img src="assets/images/spice6.png" alt="slider">
			<div class="cursive-philosopher text-slider last">
				<h2>Скидки одного дня!<br>Чёрный перец всего <span class="text-pink">за $15</span></h2>
				<a href="journal-blog.php" class="custom-btn green text-center">Новости</a>
			</div><!--text-slider-->
		</div><!--item-->
	</div>
	<!--================== End of Base-Slider ====================-->
	<!--=================== Category Product =====================-->
	<div class="container">
		<div class="category-product">
			<ul>
				<li>
					<a href="shop.php">
						<img src="assets/images/spice-for-coffee.png" alt="groceries">
						<span>Специи для кофеен</span>
					</a>
				</li>
				<li class="center">
					<a href="shop.php">
						<img src="assets/images/spice-for-cafe.png" alt="pineapple">
						<span>Специи для ресторанов</span>
					</a>
				</li>
				<li>
					<a href="shop.php">
						<img src="assets/images/spice-for-home.png" alt="corn">
						<span>Специи для дома</span>
					</a>
				</li>
			</ul>
		</div><!--category-product-->
	</div>
	<!--=============== End of Category Product ==================-->

	<!--=================== Product Slider =======================-->
	<div class="container-prod">
	<div class="cursive-philosopher label-prod-slider">Наши товары:</div>
  	<div class="slider-product owl-carousel">
	<?php 
		// Создаём запрос и сразу же выполняем его. Получаем из базы все данные из таблицы продуктов
		$sql = $conn->query("SELECT * FROM products");
		$col = mysqli_num_rows($sql);
		for ($i=0; $i < $col; $i++) { 
			$row = mysqli_fetch_assoc($sql);
			?>
			   <div class="prod-item product">
			    	<a href="single-product.php?prod_id=<?php echo $row["id"]; ?>&cat_id=<?php echo $row["category_id"] ?>">
			    		<img class="images" src="<?php echo $row["image"]?>" alt="slider">
			    	</a>
			    	<a href="single-product.php?prod_id=<?php echo $row["id"]; ?>&cat_id=<?php echo $row["category_id"] ?>" class="title-prod"><?php echo $row["title"], " ", $row ["description"]?><br><?php echo $row["mass"]?></a>
			   </div>
			   <!--item-->
	<?php
		}
	?>
  </div>
 </div>
	
	<!--=============== End of Product Slider ===================-->
	<!--=================== Интересная информация =======================-->

	<div class="interest-info">
		<div class="gradient-to-top"></div>
		<div class="info-block cursive-philosopher">
			<div class="col-xs-12 info-title">Как использовать специи?</div>
			<div class="info-text">
				Асафетиду используют очень умеренно и осторожно в вегетарианских региональных блюдах Южной и Западной Индии. Также и с соленьями, чечевицей, в супах и соусах. То же самое относится и к блюдам со свежей или соленой рыбой. Зачастую в магазинах можно встретить её в молотом виде, но также её продают и в виде кусочков.
			</div>
			<div class="info-image-right">
				<img src="assets/css/bg/asafetida1.png">
			</div>
		</div>
		<div class="info-block cursive-philosopher">
			<div class="info-text right">Ваниль можно встретить практически в каждой сладости - в мороженом, молочных пудингах и кремах, в тортах, в сладких фруктах на десерт и в ирисках. В магазинах она встречается в виде стручков, экстрактов или эссенциях. Перед тем как использовать стручки ванили промойте и обсушите их, а затем храните их в плотнозакрывающейся банке с сахаром, чтобы получился ванильный сахар.</div>
			<div class="info-image-left">
				<img src="assets/css/bg/vanile.png">
			</div>
		</div>
		<div class="info-block cursive-philosopher">
			<div class="info-text">Бадьян зачастую добавляют к китайской утке, можно встретить в блюдах с говядиной или свининой, в рыбных супах, гуляшах и маринадах. Используйте целиком или кусочками, так как в оболочке больше аромата, чем в семечках. Употребляйте в сиропах, в которых готовится груша или ревень для придания легкого лакричного вкуса.
			</div>
			<div class="info-image-right">
				<img src="assets/css/bg/badian.png">
			</div>
		</div>
		<div class="info-block-xl cursive-philosopher">
			<div class="col-xs-12 info-title">Как создаётся чай?</div>
			<div class="info-text too-big">
				Изготовление чая из листа чайного куста обычно включает в себя следующие шаги:<br>
				<br>
				1. Вяление листа при температуре 32—40 °C в течение 4—8 ч., при котором чайный лист теряет часть влаги и размягчается;<br>
				<br>
				2. Неоднократное скручивание вручную или на роллерах, при котором выделяется часть сока;<br>
				<br>
				3. Ферментативное окисление, обычно называемое ферментацией, позволяющее содержащемуся в листе крахмалу распасться на сахара, а хлорофиллу — на дубильные вещества; Во время ферментации происходит преобразование катехинов в теафлавин и теарубигины, которые имеют оранжевый и коричневый цвета;<br>
				<br>
				4. Сушку при температуре 90—95 °C для чёрного чая и 105 °C для зелёного чая, прекращающую окисление и снижающую влажность чая до 3—5 %;<br>
				5. Резку (кроме цельнолистовых чаёв);<br>
				<br>
				6. Сортировку по размеру чаинок;<br>
				<br>
				7. Возможную дополнительную обработку и внесение добавок;<br>
				<br>
				8. Упаковку.
			</div>
			<div class="info-image-right too-far">
				<img class="height-no" src="assets/css/bg/tea-prod.png">
			</div>
		</div>
		<div class="info-block-xl cursive-philosopher">
			<div class="col-xs-12 in-tit-right">Способы приготовляения кофе</div>
			<div class="info-text right too-big">
				Турка (джезва) — посуда в виде ковшика для варки кофе, в том числе кофе по-турецки (по-восточному). Для этого способа используют самый мелкий помол кофейных зёрен.<br>
				<br>
				Френч-пресс — приспособление в виде цилиндрического сосуда (колбы) с поршнем-фильтром. Молотый кофе засыпают в колбу, заливают горячей водой и настаивают 3—5 минут, после чего поршень френч-пресса опускают и готовый напиток разливают по чашкам.<br>
				<br>
				Фильтр-кофе готовят с использованием различных видов фильтров. Молотый кофе насыпают на фильтр и заливают горячей водой. Вода под действием силы тяжести просачивается через кофейный порошок и готовый напиток стекает в находящийся под фильтром сосуд. Для автоматизации процесса приготовления фильтр-кофе используют капельную кофеварку.<br>
				<br>
				Гейзерная кофеварка — приспособление, в которое наливают воду, в специальное отделение насыпают кофе и устанавливают на нагревательную поверхность (плиту). Напиток получается путём прохождения поднимающейся под давлением пара воды через отделение с молотым кофе.<br>
				<br>
				Капсульная кофеварка<br>
				<br>
				Кофе эспрессо готовят в эспрессо-машине. Кофе насыпают в портафильтр, уплотняют темпером и устанавливают в группу кофеварки. Вода под давлением 8—10 бар просачивается через кофейный порошок и напиток стекает в чашку. Такой способ приготовления распространён на предприятиях общественного питания (кафе и др.).
			</div>
			<div class="info-image-left">
				<img class="height-no lower" src="assets/css/bg/barista.png">
			</div>
		</div>
		<div class="gradient-to-down-yellow"></div>
	</div>
	<!--=================== КОНЕЦ Интересная информация =======================-->
</div><!--wrapper-->
<!--===================== Footer ========================-->
<?php
	include $_SERVER['DOCUMENT_ROOT'] .'/parts/footer.php';
?>

