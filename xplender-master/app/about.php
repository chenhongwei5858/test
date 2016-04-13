<?php
require_once '../include.php';
@$customer_email=$_SESSION['login_customer_name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>xplander-about us</title>

	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/about.css">

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
				<li><a href="product.php">Product</a></li>
				<li class="current"><a href="about.php">About us</a></li>
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
					   echo "<a href='personal_center.php' style='color:#ffffff;'>Greetings,{$customer_email}</a> ";
					   echo "<a href='../doAction.php?act=customerLogout' style='color:#ffffff;'>log out</a>";
					 }
				   ?>
				 </li>
				<li><a class="register_link" href="register.php">register</a></li>
			</ul>
		</section>
	</header>

	<!-- main -->
	<main id="main">
		
		<!-- banner -->
		<div class="about_banner">
			<img src="images/slogo.png" alt="logo" class="b_logo">
			<p class="b_des">The porcelain is made of porcelain stone, kaolin, quartz, mullite and firing, application objects have appearance of glass glaze or painted. Porcelain forming through in the kiln after high temperature (about 1280 degrees - 1400 DEG C) firing, glaze of porcelain surface will be because of different temperature and various chemical changes.</p>
			<div class="follow_us">
				<a class="twitter" href=""></a>
				<a class="facebook" href=""></a>
				<a class="youtube" href=""></a>
			</div>
		</div>

		<!-- contact us -->
		<div class="contact_module w">
			<div class="con_header">
				<div class="con_title">
					<h3>CONNECT</h3>
				</div>
				<p class="con_des">We will open a number of dedicated lines, dedicated to provide you with convenient travel, any relevant issuescan call the advisor</p>
			</div>

			<div class="con_main">
				<div class="con_pattern">
					<h3 class="pattern_header">Connect Us</h3>
					<ul class="pattern_list">
						<li>
							<span class="icon website"></span>
							<p><a href="http://www.xplender.com">http://www.xplender.com/</a></p>
						</li>
						<li>
							<span class="icon phone"></span>
							<p>0769-88888888</p>
						</li>
						<li>
							<span class="icon email"></span>
							<p>xplender@gmail.com</p>
						</li>
					</ul>
				</div>
				<div class="send_mes">
					<h3 class="send_header">Message</h3>
					<form action="" id="message_form" novalidate="novalidate">
						<ul class="send_list">
							<li><input type="text" class="item_name" name="username" placeholder="Your Name:" required></li>
							<li><input type="text" class="item_mail" name="email" placeholder="Your E-mail" required></li>
							<li><textarea class="item_mes" name="message" placeholder="Your Message:" required></textarea></li>
						</ul>
						<div class="mes_btn">
							<input type="submit" class="mes_sub mes_input" value="Send">
							<input type="reset" class="mes_cancel mes_input" value="Revoke">
						</div>
					</form>
				</div>
			</div>

		</div>
	</main>


	<!-- footer -->
	<footer id="footer">
		<div class="footer w">
			<div class="footer_info">
				<!-- sign up email -->
				<div class="sign_email">
					<form name="signEmail" action="../doAction.php?act=signup&source=about" method="post">
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
		seajs.use('about');
	</script>

</body>
</html>