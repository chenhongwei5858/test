<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>xplender register</title>
		<link rel="stylesheet" href="css/common.css">
		<link rel="stylesheet" href="css/register.css">
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

				<ul class="login_info">
					<li>
					   <?php
					     if(@$_SESSION['login_customer_id']==""){
						   echo "<form action='doCustomerLogin.php' method='post'>";
					       // echo "<label class='' name='customer_name'>log in</label>";
						   echo "<input class='login_text' type='text' id='customer_name' name='customer_email' placeholder='username' />";
						   echo "<input class='login_text' type='password' id='password' name='customer_password' placeholder='password' />";
						   echo "<button type='submit' class='login_btn'>Login</button>";
					       echo "</form>";
						 }else{
						   echo "<a href='../doAction.php?act=customerLogout'>log out</a>";
						 }
					   ?>
					 </li>
					<li><a class="register_link" href="register.php">register</a></li>
				</ul>
			</section>
		</header>

		<div id="main">
			<div class="w">
				<div class="register">
					<form action="../doAction.php?act=register" method="post" >
						<h3 class="register_title">Register Your Count</h3>
						<div class="register_input">
							<div class="register_item">
								<label name="email">email</label>
								<input class="register_text" type="text" id="email" placeholder="name" name="customer_email" />
							</div>
							<div class="register_item">
								<label name="password">password</label>
								<input class="register_text" type="password" id="password" placeholder="password" name="customer_password" />
							</div>
							<div class="register_item">
								<label name="passwordAgain">password again</label>
								<input class="register_text" type="password" id="passwordAgain" placeholder="password again" name="password_again"/>
							</div>
						</div>
						<div class="register_check_item">
							<label>
								<input type="checkbox" name="send" checked="">
								<span>Yes, Send me emails about special offers, exclusives and promotions.</span>
							</label>
						</div>
						<div class="register_check_item">
							<label class="input-ckb wd320">
								<input type="checkbox" name="agree" class="mr5 J-checkbox" checked=""><span>I have read and agreed to</span> 
								<a target="_blank" href="privacphp.php">User Agreement.</a>
							</label>
						</div>
						<div class="reg_sub">
							<button class="register_btn" type='submit'>submit</button>
							<a class="login_link" href="index.php">log in</a>
						</div>
					</form>
				</div>
			</div>
		</div>
		

		<!-- footer -->
		<footer id="footer">
			<div class="footer w">
				<div class="footer_info">
					<!-- sign up email -->
					<div class="sign_email">
						<form name="signEmail" action="../doAction.php?act=signup&source=index" method="post">
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
			seajs.use('index');
		</script>

	</body>
</html>
