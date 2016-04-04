<?php
require_once '../include.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>product detail</title>
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/product_detail.css">
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
			<!-- product show -->
			<section class="product_show">
				<form name="purchase" action="">
					<div class="product_show_module">
						<div class="photo_show">
							<div class="sliderBox">
					            <ul class="slider">
					                <li><a href=""><img src="images/temp/show1.jpg"></a></li>
					                <li><a href=""><img src="images/temp/show2.jpg"></a></li>
					                <li><a href=""><img src="images/temp/show3.jpg"></a></li>
					            </ul>    
					        </div>
					        <ul class="control">
					            <li><img src="images/temp/s_show1.jpg"></li>
					            <li><img src="images/temp/s_show2.jpg"></li>
					            <li><img src="images/temp/s_show3.jpg"></li>
					        </ul>
						</div>

						<ul class="pro_info">
							<li class="info_item">
								<dl class="info_des">
									<dt>Yeelight床头灯</dt>
									<dd>触摸式操作 给卧室1600万种颜色</dd>
									<dd>支持小米2s/3/4，小米 Note，iPhone 4s 及以上机型</dd>
								</dl>
							</li>
							<li class="info_item">
								<div class="info_item_price">$<i>199</i></div>
							</li>
							<li class="info_item">
								<div class="info_item_pur">
									<div class="pur_num">
										<span class="num_count num_sub">-</span>
										<span class="num"><input type="text" name="number" value="1" autocomplete="false"></span>
										<span class="num_count num_add">+</span>
									</div>
									<input class="purchase btn" type="submit" value="Buy">
								</div>
							</li>
						</ul>
					</div>
				</form>
			</section>

			<!-- product description -->
			<section class="product_des">
				<div class="pro_des_head">
					<h3>Description</h3>
				</div>
				<div class="pro_des_con">
					<img src="images/temp/des1.jpg" alt="description">
					<img src="images/temp/des2.jpg" alt="description">
					<img src="images/temp/des3.jpg" alt="description">
					<img src="images/temp/des4.jpg" alt="description">
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
					<form name="signEmail" action="../doAction.php?act=signup&source=product_detail" method="post">
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
		seajs.use('product');
	</script>
	
</body>
</html>