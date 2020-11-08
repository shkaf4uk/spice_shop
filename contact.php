	<!--===================== Header ========================-->
<?php
	include $_SERVER['DOCUMENT_ROOT'] .'/parts/header.php';
?>
	<!--============== End of Header ========================-->
	<!--================= Breadcrumb ====================-->
	<div class="breadcrumb-top bg-yellow">
		<div class="container">
			<h2>Contact Us</h2>
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li class="active">Contact Us</li>
			</ol><!--breadcrumb-->
		</div>
	</div>
	<!--================= End of Breadcrumb ====================-->
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-6 col-xs-12 ">
				<div class="contact-us-descr">
					<p class="contact-us-descr-p"><b>Location:</b></p>
					<p>123 6th St. Melbourne, FL 32904</p>
				</div>
				<div class="contact-us-descr">
					<p class="contact-us-descr-p"><b>Phone:</b></p>
					<p>(125) 546-4478</p>
				</div>
				<div class="contact-us-descr">
					<p class="contact-us-descr-p"><b>Phone:</b></p>
					<p>(125) 546-4478</p>
				</div>
				<div class="contact-us-descr">
					<p class="contact-us-descr-p"><b>Email:</b></p>
					<p>cinagro@com</p>
				</div>
			</div>
			<div class="col-md-8 col-sm-6 col-xs-12">
				<form id="contact-us-form">
					<div>
						<input type="text" name="contact-us-name" class="contact-us-input-one" placeholder="Your Name">
						<input type="text" name="contact-us-email"  class="contact-us-input-two" placeholder="Your E-mail">
					</div>
					<div>
						<textarea name="contact-us-massage" class="contact-us-massage"  placeholder="Your Message..."></textarea>
					</div>
					<div>
						<button type="submit" class="custom-btn green">submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!--===================== Map ========================-->
	<div id="map"></div>
	<!--===================== End of Map ========================-->
	<!--===================== Footer ========================-->
<?php
	include $_SERVER['DOCUMENT_ROOT'] .'/parts/footer.php';
?>