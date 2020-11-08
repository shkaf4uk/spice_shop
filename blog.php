	<!--===================== Header ========================-->
<?php
	include $_SERVER['DOCUMENT_ROOT'] .'/parts/header.php';
?>
	<!--============== End of Header ========================-->
	<!--================= Breadcrumb  ====================-->
	<div class="breadcrumb-top bg-yellow">
		<div class="container">
			<h2>Post Format</h2>
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li class="active">Journal</li>
			</ol><!--breadcrumb-->
		</div>
	</div>
	<!--================= End of Breadcrumb  ====================-->
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-sm-12 col-xs-12">
				<!--===================== Gallery Post ========================-->
				<article class="post gallery-post border-bottom border-color-gray">
					<div class="wp-picture">
						<div class="gallery owl-carousel owl-theme">
							<div class="item">
								<img src="http://via.placeholder.com/770x440" alt="slider">
							</div><!--item-->
							<div class="item">
								<img src="http://via.placeholder.com/770x440" alt="slider">
							</div><!--item-->
							<div class="item">
								<img src="http://via.placeholder.com/770x440" alt="slider">
							</div><!--item-->
						</div><!--gallery-->
					</div><!--wp-picture-->
					<div class="content-article text-center">
						<h2 class="post-heading">
							<a href="single-blog.html">Tea Time: The health reasons why you should</a>
						</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor<br>incididunt ut labore et dolore magna aliqua...</p>
						<div class="category">
							<span>in</span><a href="single-blog.html">NUTRITION + WELLNESS / </a><a href="#">September 05, 2017</a>
						</div><!--category-->
					</div><!--content-article-->
				</article>
				<!--================= End of Gallery Post ====================-->
				<!--====================== Video Post =========================-->
				<article class="post video-post border-bottom border-color-gray">
					<div class="wp-picture">
						<div class="lazyYT" data-youtube-id="_oEA18Y8gM0" data-ratio="16:9">&nbsp;</div>
					</div><!--wp-picture-->
					<div class="content-article text-center">
						<h2 class="post-heading">
							<a href="single-blog.html">Fresh basil &amp; spinach pesto with shelled hemp</a>
						</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor<br>incididunt ut labore et dolore magna aliqua...</p>
						<div class="category">
							<span>in</span><a href="single-blog.html">NUTRITION + WELLNESS / </a><a href="#">September 05, 2017</a>
						</div><!--category-->
					</div><!--content-article-->
				</article>
				<!--================= End of Video Post ====================-->
				<!--================= End of Youtube Post Video ====================-->
				<article class="post youtube-post border-bottom border-color-gray">
					<div class="wp-picture">
						<div class="lazyYT" data-youtube-id="_oEA18Y8gM0" data-ratio="16:9">&nbsp;</div>
					</div><!--wp-picture-->
					<div class="content-article text-center">
						<h2 class="post-heading">
							<a href="single-blog.html">​Motion nutrition super detox smoothie</a>
						</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor<br>incididunt ut labore et dolore magna aliqua...</p>
						<div class="category">
							<span>in</span><a href="single-blog.html">NUTRITION + WELLNESS / </a><a href="#">September 05, 2017</a>
						</div><!--category-->
					</div><!--content-article-->
				</article>
				<!--================= End of Youtube Post Video ====================-->
				<!--================= Post ====================-->
				<article class="post border-bottom border-color-gray">
					<div class="content-article text-center">
						<h2 class="post-heading">
							<a href="single-blog.html">We’ve Be on a &ldquo;Diet Detour&rdquo; For Over 100 Years...</a>
						</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor<br>incididunt ut labore et dolore magna aliqua...</p>
						<div class="category">
							<span>in</span><a href="single-blog.html">NUTRITION + WELLNESS / </a><a href="#">September 05, 2017</a>
						</div><!--category-->
					</div><!--content-article-->
				</article>
				<!--================= End of Post ====================-->
				<!--================= Audio ====================-->
				<article class="post audio border-bottom border-color-gray">
					<div class="content-article text-center">
						<div class="wp-picture">
							<div class="audio-player">
									<div class="audio-wrapper" id="player-container">
									<audio id="player" ontimeupdate="initProgressBar()">
										<source src="assets/audio/music.mp3" type="audio/mpeg">
									</audio>
								</div>
								<div class="player-controls scrubber">
									<div id="play-btn"></div>
									<span>Darren Malone</span>
									<p>Audio Title Here</p>
									<span id="seek-obj-container">
										<progress id="seek-obj" value="0" max="1"></progress>
									</span>
									<small id="start-time">00:00</small>
									<small id="end-time">00:00</small>
								</div>
							</div>
						</div><!--wp-picture-->
						<h2 class="post-heading">
							<a href="single-blog.html">3 Ways to Figure Out What Foods Work For You</a>
						</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor<br>incididunt ut labore et dolore magna aliqua...</p>
						<div class="category">
							<span>in</span><a href="single-blog.html">NUTRITION + WELLNESS / </a><a href="#">September 05, 2017</a>
						</div><!--category-->
					</div><!--content-article-->
				</article>
				<!--================= End of Audio ====================-->
				<!--================= Quote ====================-->
				<article class="post quote border-bottom border-color-gray">
					<div class="content-article text-center">
						<h2>&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do<br>eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>Ut enim ad minim veniam, quis nostrud...&rdquo;</h2>
						<div class="category">
							<span>in</span><a href="single-blog.html">NUTRITION + WELLNESS / </a><a href="#">September 05, 2017</a>
						</div><!--category-->
					</div><!--content-article-->
				</article>
				<!--================= End of Quote ====================-->
				<!--================= Link ====================-->
				<article class="post link border-bottom border-color-gray">
					<div class="content-article text-center">
						<h2 class="post-heading">
							<a href="single-blog.html">The Vibrant Health Podcast</a>
						</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor<br>incididunt ut labore et dolore magna aliqua...</p>
						<div class="category">
							<span>in</span><a href="single-blog.html">NUTRITION + WELLNESS / </a><a href="#">September 05, 2017</a>
						</div><!--category-->
					</div><!--content-article-->
				</article>
				<!--================= End of Link ====================-->
				<!--================= Blog Pagination ====================-->
				<div class="blog-pagination">
					<ul class="pagination">
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li class="no-pointer"><a href="#">...</a></li>
						<li><a href="#">10</a></li>
					</ul>
				</div>
				<!--================= Blog Pagination ====================-->
			</div>
			<div class="col-md-4 col-sm-12 col-xs-12">
				<!--================= Sidebar ====================-->
				<aside>
					<!--================= Widget Search ====================-->
					<div class="widget-search">
						<h3 class="widget-title">Search</h3>
						<form>
							<input name="s" id="s" placeholder="Search...">
							<button class="btn"><i class="fa fa-search"></i></button>
						</form>
					</div>
					<!--================= End of Widget Search ====================-->
					<!--================= Widget Category ====================-->
					<div class="widget-category">
						<h3 class="widget-title">Category</h3>
						<ul>
							<li><a href="#"><span><i class="fa fa-circle"></i></span>Nutrion</a></li>
							<li><a href="#"><span><i class="fa fa-circle"></i></span>Health &amp; Wellness</a></li>
							<li><a href="#"><span><i class="fa fa-circle"></i></span>Real Food Recipes</a></li>
							<li><a href="#"><span><i class="fa fa-circle"></i></span>Detox</a></li>
						</ul>
					</div>
					<!--================= End of Widget Category ====================-->
					<!--================= Widget Calendar ====================-->
					<div class="widget-calendar">
						<h3 class="widget-title">Calendar</h3>
						<div id="datepicker"></div>
					</div>
					<!--================= End of Widget Calendar ====================-->
					<!--================= Widget Post ====================-->
					<div class="widget-post">
						<h3 class="widget-title">Hot Post</h3>
						<ul>
							<li>
								<a href="#">
									<img src="http://via.placeholder.com/68x68" alt="mini-post">
									<span>Benefits Of Fermented Foods</span>
								</a>
							</li>
							<li>
								<a href="#">
									<img src="http://via.placeholder.com/68x68" alt="mini-post">
									<span>Finding Your Joie De Vivre</span>
								</a>
							</li>
							<li>
								<a href="#">
									<img src="http://via.placeholder.com/68x68" alt="mini-post">
									<span>Nourishing Bowl</span>
								</a>
							</li>
						</ul>
					</div>
					<!--================= End of Widget Post ====================-->
					<!--================= Widget Archive ====================-->
					<div class="widget-archive">
						<h3 class="widget-title">Archive</h3>
						<ul>
							<li><a href="#">September 2017</a></li>
							<li><a href="#">October 2017</a></li>
							<li><a href="#">November 2017</a></li>
						</ul>
					</div>
					<!--=================End of Widget Archive ====================-->
					<!--================= Widget Tags ====================-->
					<div class="widget-tags">
						<h3 class="widget-title">Tags</h3>
						<a href="#">Nutrion</a>
						<a href="#">Food to Go</a>
						<a href="#">Lifestyle</a>
						<a href="#">Juicing</a>
						<a href="#">Recipes</a>
					</div>
					<!--================= End of Widget Tags ====================-->
					<!--================= Widget Instagram ====================-->
					<div class="widget-instagram">
						<h3 class="widget-title">Our Instagram</h3>
						<a href="#"><img src="http://via.placeholder.com/74x74" alt="instagram"></a>
						<a href="#"><img src="http://via.placeholder.com/73x74" alt="instagram"></a>
						<a href="#"><img src="http://via.placeholder.com/73x74" alt="instagram"></a>
						<a href="#"><img src="http://via.placeholder.com/73x74" alt="instagram"></a>
						<a href="#"><img src="http://via.placeholder.com/73x74" alt="instagram"></a>
						<a href="#"><img src="http://via.placeholder.com/73x74" alt="instagram"></a>
						<a href="#"><img src="http://via.placeholder.com/73x74" alt="instagram"></a>
						<a href="#"><img src="http://via.placeholder.com/73x74" alt="instagram"></a>
						<a href="#"><img src="http://via.placeholder.com/73x74" alt="instagram"></a>
					</div>
					<!--================= End of Widget Instagram ====================-->
				</aside>
				<!--================= End of Sidebar ====================-->
			</div>
		</div>
	</div>
	<!--===================== Footer ========================-->
<?php
	include $_SERVER['DOCUMENT_ROOT'] .'/parts/footer.php';
?>