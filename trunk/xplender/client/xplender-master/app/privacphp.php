<?php
require_once '../include.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>product detail</title>
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/services.css">
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
				<li><a href="about.php">About us</a></li>
			</ul>
		</section>
	</header>

	<!-- main -->
	<main id="main">
		<div class="w">
			<section class="service_main">
				<!-- location -->
				<p class="location"><a href="">Home</a>><a href="">Privacy Policy</a></p>

				<!-- services list -->
				<div class="service_module">
					<!-- services menu -->
					<dl class="service_menu">
						<dt><a href="">Term of use</a></dt>
						<dd>
							<a href="/term_use.php#term">Term of use</a>
							<a href="/term_use.php#legal">Legal Information</a>
							<a href="/term_use.php#limit">Limitation of Liability</a>
							<a href="/term_use.php#inac">Inaccuracies</a>
							<a href="/term_use.php#avail">Availability</a>
							<a href="/term_use.php#price">Pricing</a>
							<a href="/term_use.php#colors">Colors</a>
							<a href="/term_use.php#indem">Indemnification</a>
							<a href="/term_use.php#corr">Correspondence</a>
						</dd>
						<dt><a href="">Privacy Policy</a></dt>
						<dd>
							<a href="#privacy" class="current">Your Privacy</a>
							<a href="#collect">Collected Information</a>
							<a href="#email">Our Email List</a>
							<a href="#business">Business Partners</a>
							<a href="#secure">Secure Shopping</a>
						</dd>
					</dl>

					<!-- service content -->
					<div class="service_content">
						<dl class="service_list">
							<dt id="privacy">Your Privacy</dt>
							<dd><p>Thank you for shopping at Xplender.com. This privacy and security policy (“Policy”) outlines the information we collect about you, how we use the information and the choices you have to review, revise and/or restrict our usage of this information.</p></dd>

							<dt id="collect">Collected Information</dt>
							<dd><p>Xplender.com collects customer information for a variety of reasons, including as part of our ongoing efforts to provide superior customer service, improve our customer's shopping experience and to communicate with our customers about our products, services and promotions, including those that we believe may be of particular interest to you based on information we have collected. We collect personal information such as your name, financial information, telephone number, e-mail and postal address (“Personal Information”) that you provide to us when you save your information with us or when you participate in a sweepstakes, promotion or survey. We use this information to process any transaction, inquiry or promotion that you initiate with us, and provide you with advertising tailored to your interests. In addition, we maintain a record of your product interests, purchases and whatever else might enable us or our business partners to enhance and personalize your shopping experience on this or other websites and to provide you with offers, promotions or information that we believe may be of interest to you. We also monitor use of the Website and traffic patterns to improve the Website design and the products and services we offer as well as to determine what offers, promotions or information to send to you.</p></dd>

							<dt id="email">Our Email List</dt>
							<dd><p>Given the unpredictability of technology and the online environment, Xplender does not warrant that the function or operation of this website will be uninterrupted or error-free, that defects will be corrected, or that this site or the server that makes it available will be free of viruses or other harmful elements. As a visitor to and user of this website, you must assume full responsibility for any costs associated with the servicing of equipment used in connection with the use of our website. As a visitor to and a user of this website, you, in effect, agree that your access will be subject to the terms and conditions set forth in this legal notice and that access is undertaken at your own risk. Xplender shall not be liable for damages of any kind related to your use of or inability to access this website.</p></dd>

							<dt id="business">Business Partners</dt>
							<dd><p>We endeavor to present the most recent, most accurate, and most reliable information on our website at all times. However, there may be occasions when some of the information featured on Xplender.com may contain incomplete data, typographical errors, or inaccuracies. Any errors are wholly unintentional and we apologize if erroneous information is reflected in merchandise price, item availability, or in any way affects your individual order. Please be aware that we present our content “as is” and make no claims to its accuracy, either expressed or implied. We reserve the right to amend errors or to update product information at any time without prior notice. In the event an Xplender product is listed at an incorrect price due to photographical error, typographical error or error in pricing information from our suppliers, Xplender shall have the right to refuse or cancel any orders placed for product listed at the incorrect price. Xplender, Inc shall have the right to refuse or cancel any such orders whether or not the order has been confirmed and your credit card charged. If your credit card has already been charged for the purchase and your order is cancelled, Xplender shall issue a credit to your credit card account in the amount of the incorrect price.</p></dd>

							<dt id="secure">Secure Shopping</dt>
							<dd><p>At Xplender.com, we go out of our way to select the kind of distinctive merchandise for which the Xplender brand is recognized. Please understand that many of our featured items are offered in limited quantities and, because of their limited availability, stock will not and cannot be refreshed. That means once an item is gone, it may be gone for good and not appear on the website again. When an item featured on Xplender.com is no longer in stock, we make every attempt to remove that item from the website in a timely manner. Should you have any questions concerning the availability of a particular item, please contact us via service@xplender.com at any time, we promise to reply you as soon as we can.</p></dd>
						</dl>
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
					<form name="signEmail" action="../doAction.php?act=signup&source=privacphp" method="post">
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