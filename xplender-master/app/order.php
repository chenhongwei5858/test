<?php
require_once '../include.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>product detail</title>
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/order.css">
</head>
<body>
	<!-- header -->
	<header id="header">
		<section class="header w">
			<!-- logo -->
			<a href="index.php" class="logo"><img src="images/logo.png" alt="logo"></a>
		</section>
	</header>

	<!-- main -->
	<main id="main">
		<div class="w">
			<section class="order_info">
				<div class="order_head">
					<h3 class="order_title">Enter you shipping address</h3>
					<p>Please enter a shipping address for this order. Please also indicate whether your billing address is the same as the shipping address entered. When finished, click the "Continue" button.  Or, if you're sending items to more than one address, click the "Add another address" button to enter additional addresses.</p>
				</div>
				<div class="order_main">
					<form id="adress" name="adress" action="" method="post" novalidate="novalidate">
						<!-- fuck，加了个ad前缀，居然被abp拦截了 -->
						<div class="order_address">
							<h3 class="title">Enter a new shipping address</h3>
							<ul class="adr_list">
								<li class="adr_item">
									<span class="item_title">Full name:</span>
									<input type="text" class="adr_input" name="fullName" required>
								</li>
								<li class="adr_item">
									<span class="item_title">Phone:</span>
									<input type="text" class="adr_input" name="phone" required>
								</li>
								<li class="adr_item">
									<span class="item_title">Address line 1:</span>
									<input type="text" class="adr_input" name="cAddress" placeholder="Street address, P.O. box, company name, c/o " required>
								</li>
								<li class="adr_item">
									<span class="item_title">Address line 2:</span>
									<input type="text" class="adr_input" name="pAddress" placeholder="Apartment, suite, unit, building, floor, etc. " required>
								</li>
								<li class="adr_item">
									<span class="item_title">City:</span>
									<input type="text" class="adr_input" name="city" required>
								</li>
								<li class="adr_item">
									<span class="item_title">State/Province/Region: </span>
									<input type="text" class="adr_input" name="state" required>
								</li>
								<li class="adr_item">
									<span class="item_title">ZIP: </span>
									<input type="text" class="adr_input" name="zip" required>
								</li>
								<li class="adr_item">
									<span class="item_title">Country: </span>
									<select class="adr_select" name="country" required>
										<option value="american">American</option>
										<option value="china">China</option>
									</select>
								</li>
							</ul>
							<!-- <input class="pay btn" value="Pay" type="submit"> -->
						</div>
						<div class="order_summary">
							<div class="order_sum">
								<input class="pay btn" type="submit" value="Pay">
								<ul class="sum_list">
									<li>
										<span class="title">Product:</span>
										<span class="cost">$199.00</span>
									</li>
									<li>
										<span class="title">Delivery:</span>
										<span class="cost">$20.00</span>
									</li>
									<li>
										<span class="title">Sum:</span>
										<span class="cost">$219.00</span>
									</li>
									<li class="order_total">
										<span class="title">Total:</span>
										<span class="cost">$219.00</span>
										<input type="hidden" name="total" value="219.00">
									</li>
									<li>
										<label class="paypal"><input type="radio" name="paypal" checked="checked"><img src="images/paypal.jpg"></label>
									</li>
								</ul>
							</div>
						</div>
					</form>
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
					<form name="signEmail" action="../doAction.php?act=signup&source=order" method="post">
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
		seajs.use('order');
	</script>
	
</body>
</html>