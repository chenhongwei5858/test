<?php
require_once '../include.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>product detail</title>
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/cart.css">
</head>
<body>
	<!-- header -->
	<header id="header">
		<section class="header w">
			<!-- logo -->
			<a href="index.php" class="logo"><img src="images/logo.png" alt="logo"></a>

			<!-- navigation -->
			<ul class="menu">
				<li class="current"><a href="index.php">Home</a></li>
				<li><a href="product.php">Product</a></li>
				<li><a href="about.php">About us</a></li>
			</ul>
		</section>
	</header>

	<!-- main -->
	<main id="main">
		<div class="w">
			<section class="cart_module">
				<div class="cart_head">
					<ul class="cart_title">
						<li class="name">Product Name</li>
						<li class="price">Price</li>
						<li class="number">Number</li>
						<li class="total">Total</li>
					</ul>
				</div>
				<div class="cart_main">
					<ul class="cart_list">
						<li class="cart_item">
							<div class="cart_pro_item product_name">
								<div class="pro_thumb">
									<a href=""><img src="images/temp/s_show2.jpg"></a>
								</div>
								<div class="pro_name">
									<a href="">Yeelight床头灯 </a>
								</div>
							</div>
							<div class="cart_pro_item product_price">$199.00</div>
							<div class="cart_pro_item product_number">
								<span class="num_count num_sub">-</span>
								<span class="num"><input type="text" value="1"></span>
								<span class="num_count num_add">+</span>
							</div>
							<div class="cart_pro_item product_total">$199.00</div>
						</li>
					</ul>
				</div>
				<div class="cart_shop">
					<div class="next">
						<span class="total">Total<i>$199.00</i></span>
						<input class="shopping" type="submit" value="NEXT">
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
					<form name="signEmail" action="../doAction.php?act=signup&source=cart" method="post">
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

	<!-- script -->
	<script type="text/javascript" src="js/sea.js"></script>
	<script type="text/javascript" src="js/config.js"></script>
	<script type="text/javascript">
		seajs.use('cart');
	</script>
	
</body>
</html>