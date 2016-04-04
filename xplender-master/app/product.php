<?php
require_once '../include.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>index</title>
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/index.css">
</head>
<body>
	<!-- header -->
	<header id="header">
		<section class="header w">
			<!-- logo -->
			<a href="index.php" class="logo"><img src="images/logo.png" alt="logo"></a>

			<!-- navigation -->
			<ul class="menu">
				<li><a href="index.php">Home</a></li>
				<li class="current"><a href="product.php">Product</a></li>
				<li><a href="about.php">About us</a></li>
			</ul>
		</section>
	</header>

	<!-- main -->
	<main id="main">

		<div class="w">

			<!-- location -->
			<div class="location">
				<p><a href="index.php">Home</a>><a href="product.php">Product List</a></p>
			</div>

			<!-- product 3 -->
			<section class="product_section white">
				<div class="middle_show">
					<a class="middle_show_photo" href="product_detail.php">
						<img src="images/temp/product7.jpg">
					</a>
					<div class="middle_show_des">
						<div class="show_info">
							<h3><a href="product_detail.php">Yeelight床头灯</a></h3>
							<p class="info"><a href="product_detail.php">触摸式操作 给卧室1600万种颜色</a></p>
						</div>
						<span class="price">$<i class="number">99.00</i></span>
					</div>
				</div>
				<div class="middle_show">
					<a class="middle_show_photo" href="product_detail.php">
						<img src="images/temp/product3.jpg">
					</a>
					<div class="middle_show_des">
						<div class="show_info">
							<h3><a href="product_detail.php">Yeelight床头灯</a></h3>
							<p class="info"><a href="product_detail.php">触摸式操作 给卧室1600万种颜色</a></p>
						</div>
						<span class="price">$<i class="number">99.00</i></span>
					</div>
				</div>
				<div class="middle_show">
					<a class="middle_show_photo" href="product_detail.php">
						<img src="images/temp/product8.jpg">
					</a>
					<div class="middle_show_des">
						<div class="show_info">
							<h3><a href="product_detail.php">Yeelight床头灯</a></h3>
							<p class="info"><a href="product_detail.php">触摸式操作 给卧室1600万种颜色</a></p>
						</div>
						<span class="price">$<i class="number">99.00</i></span>
					</div>
				</div>
			</section>

			<!-- product 3 -->
			<section class="product_section white">
				<div class="middle_show">
					<a class="middle_show_photo" href="">
						<img src="images/temp/product3.jpg">
					</a>
					<div class="middle_show_des">
						<div class="show_info">
							<h3><a href="">Yeelight床头灯</a></h3>
							<p class="info"><a href="">触摸式操作 给卧室1600万种颜色</a></p>
						</div>
						<span class="price">$<i class="number">99.00</i></span>
					</div>
				</div>
				<div class="middle_show">
					<a class="middle_show_photo" href="">
						<img src="images/temp/product8.jpg">
					</a>
					<div class="middle_show_des">
						<div class="show_info">
							<h3><a href="">Yeelight床头灯</a></h3>
							<p class="info"><a href="">触摸式操作 给卧室1600万种颜色</a></p>
						</div>
						<span class="price">$<i class="number">99.00</i></span>
					</div>
				</div>
				<div class="middle_show">
					<a class="middle_show_photo" href="">
						<img src="images/temp/product7.jpg">
					</a>
					<div class="middle_show_des">
						<div class="show_info">
							<h3><a href="">Yeelight床头灯</a></h3>
							<p class="info"><a href="">触摸式操作 给卧室1600万种颜色</a></p>
						</div>
						<span class="price">$<i class="number">99.00</i></span>
					</div>
				</div>
			</section>

		</div>
	</main>

	<!-- footer -->
	<footer id="footer">
		<div class="footer w">
			<div class="footer_info">
				<!-- sign up email -->
				<div class="sign_email">
					<form name="signEmail" action="../doAction.php?act=signup&source=product" method="post">
						<h3>Sign up for special offers and style news:</h3>
						<div class="sign_box">
							<input class="e_input" type="text" placeholder="email" name="subscribe_email" required>
							<input class="e_btn" type="submit" value="SIGN UP">
						</div>
					</form>
				</div>

				<!-- services -->
				<ul class="service_list">
					<li>
						<h3>Xplender Services</h3>
						<a href="about.php">Contact us</a>
						<a href="">Order Status</a>
					</li>
					<li>
						<h3>Policy</h3>
						<a href="/term_use.php">Term of use</a>
						<a href="">Sign up for emails</a>
						<a href="/privacy.php">Privacy Policy</a>
					</li>
				</ul>
				
				<!-- footer logo -->
				<div class="ft_logo"><img src="images/slogo.png" alt="logo"></div>
			</div>
			<!-- payment -->
			<div class="payment">
				<img class="payment_icon" src="images/paypal.png" alt="paypal">
				<img src="images/ft-express.png" alt="pay and logistic">
			</div>
			<!-- copyright -->
			<p class="copyright">©2015-2016 xplander.com Copyright, All Rights Reserved.</p>
		</div>
	</footer>
	
</body>
</html>