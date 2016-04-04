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
				<p class="location"><a href="">Home</a>><a href="">Term of use</a></p>

				<!-- services list -->
				<div class="service_module">
					<!-- services menu -->
					<dl class="service_menu">
						<dt><a href="">Term of use</a></dt>
						<dd>
							<a href="#term" class="current">Term of use</a>
							<a href="#legal">Legal Information</a>
							<a href="#limit">Limitation of Liability</a>
							<a href="#inac">Inaccuracies</a>
							<a href="#avail">Availability</a>
							<a href="#price">Pricing</a>
							<a href="#colors">Colors</a>
							<a href="#indem">Indemnification</a>
							<a href="#corr">Correspondence</a>
						</dd>
						<dt><a href="">Privacy Policy</a></dt>
						<dd>
							<a href="/privacy.php#privacy">Your Privacy</a>
							<a href="/privacy.php#collect">Collected Information</a>
							<a href="/privacy.php#email">Our Email List</a>
							<a href="/privacy.php#business">Business Partners</a>
							<a href="/privacy.php#secure">Secure Shopping</a>
						</dd>
					</dl>

					<!-- service content -->
					<div class="service_content">
						<dl class="service_list">
							<dt id="term">Term of use</dt>
							<dd><p>Thank you for visiting Xplender.com. We have prepared the information below to ensure that your experience on our website is one you’ll want to repeat again and again. Xplender, Inc provides this site as a service to its customers. Please review the following basic rules that govern your use of our site. Please note that your use of our site constitutes your agreement to follow and be bound by these terms. If you do not agree to these terms, please do not use this site. Although you may “bookmark” a particular portion of Xplender.com and thereby bypass this agreement, your use of this site still binds you to the terms. Since Xplender may revise this agreement at any time, you should visit this page periodically to review the terms of your use. Should you have any questions concerning any of our policies, please contact us.</p></dd>

							<dt id="legal">Legal Information</dt>
							<dd><p>This website is expressly owned and operated by Xplender, Inc. All design and content featured on Xplender.com-including navigational buttons and images, artwork, graphics, photography, text, and the like-are copyrights, trademarks, trade dress, and/or intellectual property that are owned, controlled, or licensed by Xplender, Inc. This website in its entirety is protected by copyright and applicable trade dress. All worldwide rights, titles, and interests are reserved. The contents of our website and the website as a whole are intended solely for your personal, noncommercial use. Any use of our website and its content for purposes other than personal and noncommercial is prohibited without the prior written permission of Xplender, Inc. Do not reproduce, publish, display, modify, sell, or distribute any of the materials from Xplender, Inc. You may, however, download or electronically copy and print any of the page contents displayed on the site, but please remember that these are available for your personal, noncommercial use only. Should you choose to download, copy, or forward any site materials via email, no right, title, or interest in those materials will be transferred to you.</p></dd>

							<dt id="limit">Limitation of Liability</dt>
							<dd><p>Given the unpredictability of technology and the online environment, Xplender does not warrant that the function or operation of this website will be uninterrupted or error-free, that defects will be corrected, or that this site or the server that makes it available will be free of viruses or other harmful elements. As a visitor to and user of this website, you must assume full responsibility for any costs associated with the servicing of equipment used in connection with the use of our website. As a visitor to and a user of this website, you, in effect, agree that your access will be subject to the terms and conditions set forth in this legal notice and that access is undertaken at your own risk. Xplender shall not be liable for damages of any kind related to your use of or inability to access this website.</p></dd>

							<dt id="inac">Inaccuracies</dt>
							<dd><p>We endeavor to present the most recent, most accurate, and most reliable information on our website at all times. However, there may be occasions when some of the information featured on Xplender.com may contain incomplete data, typographical errors, or inaccuracies. Any errors are wholly unintentional and we apologize if erroneous information is reflected in merchandise price, item availability, or in any way affects your individual order. Please be aware that we present our content “as is” and make no claims to its accuracy, either expressed or implied. We reserve the right to amend errors or to update product information at any time without prior notice. In the event an Xplender product is listed at an incorrect price due to photographical error, typographical error or error in pricing information from our suppliers, Xplender shall have the right to refuse or cancel any orders placed for product listed at the incorrect price. Xplender, Inc shall have the right to refuse or cancel any such orders whether or not the order has been confirmed and your credit card charged. If your credit card has already been charged for the purchase and your order is cancelled, Xplender shall issue a credit to your credit card account in the amount of the incorrect price.</p></dd>

							<dt id="avail">Availability</dt>
							<dd><p>At Xplender.com, we go out of our way to select the kind of distinctive merchandise for which the Xplender brand is recognized. Please understand that many of our featured items are offered in limited quantities and, because of their limited availability, stock will not and cannot be refreshed. That means once an item is gone, it may be gone for good and not appear on the website again. When an item featured on Xplender.com is no longer in stock, we make every attempt to remove that item from the website in a timely manner. Should you have any questions concerning the availability of a particular item, please contact us via service@xplender.com at any time, we promise to reply you as soon as we can.</p></dd>

							<dt id="price">Pricing</dt>
							<dd><p>Most Xplender products displayed on the website are available in select Xplender stores while supplies last. In some cases, web merchandise may not be available in Xplender stores. Stores may also have different prices or promotional events at different times. Sale prices on the website are Internet-only specials and do not reflect the pricing of Xplender stores.</p></dd>

							<dt id="colors">Colors</dt>
							<dd><p>We have made every effort to display as accurately as possible the colors of our products that appear on the website. However, due to monitor discrepancies, we cannot guarantee that your display of color will be accurate.</p></dd>

							<dt id="indem">Indemnification</dt>
							<dd><p>You agree to indemnify, defend, and hold harmless Xplender, its officers, directors, employees, agents, licensors and suppliers (collectively the “Service Providers”) from and against all losses, expenses, damages and costs, including reasonable attorneys’ fees, resulting from any violation of these terms and conditions or any activity related to your account (including negligent or wrongful conduct) by you or any other person accessing the site using your Internet account.</p></dd>

							<dt id="corr">Correspondence</dt>
							<dd><p>Although we will make every effort to respond quickly to applicable email messages, Xplender.com is under no obligation to respond to all pieces of correspondence received through this site, or to maintain your submitted comments in confidence, or to pay compensation of any kind for your comments or submissions. While we welcome your comments and feedback regarding Xplender.com, our merchandise and our services, we do not wish to receive any confidential or proprietary ideas, suggestions, materials, or information via this website or any email connection. Please note that all of your comments, feedback, ideas, suggestions, and other submissions that are disclosed or submitted to our company through Xplender.com shall become and remain the property of Xplender. Any such disclosure or submission by you is a declaration of the full release of all proprietary claims and/or intellectual rights regarding your submission. However, we will not use your name in connection with any such materials, information, suggestions, ideas or comments unless we first obtain your permission or otherwise are required by law to do so.</p></dd>
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
					<form name="signEmail" action="../doAction.php?act=signup&source=term_use" method="post">
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