<?php
require_once '../include.php';
$product_url=$_REQUEST['product'];
@$customer_email=$_SESSION['login_customer_name'];
//顾客id
$customer_id=@$_SESSION['login_customer_id']?$_SESSION['login_customer_id']:0;
//我的账户
$customer_row=SCInformation("xplender_customer","customer_id='{$customer_id}'");

$product_row=SCInformation("xplender_product","product_url='{$product_url}'");

$number=@$_POST['number']?$_POST['number']:$_REQUEST['number'];
$buy_price=$number*$product_row['product_price'];

//邮费
$delivery="20.00";



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
			<a href="index.php" class="logo"><img src="images/logo.png" alt="lo go"></a>
			
			<ul class="login_info">
				<li>
				   <?php
				     if(@$_SESSION['login_customer_id']==""){
					   echo "<form action='doCustomerLogin.php?page=order.php' method='post'>";
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
		<div class="w">
			<section class="order_info">
				<div class="order_head">
					<h3 class="order_title">Enter you shipping address</h3>
					<p>Please enter a shipping address for this order. Please also indicate whether your billing address is the same as the shipping address entered. When finished, click the "Continue" button.  Or, if you're sending items to more than one address, click the "Add another address" button to enter additional addresses.</p>
				</div>
				<div class="order_main">
				    <form id="order" name="order" action="../doAction.php?act=order" method="post" novalidate="novalidate">
						<!-- fuck，加了个ad前缀，居然被abp拦截了-->
						<div class="order_address">
							<h3 class="title">Enter a new shipping address</h3>
							<ul class="adr_list">
						        <li class="adr_item">
									<span class="item_title">email:</span>
									<input type="text" class="adr_input" name="customer_email" value="<?php echo $customer_row['customer_email']; ?>" <?php if($customer_row['customer_email']) echo "readonly"; ?>  required>
								</li>
								<li class="adr_item">
									<span class="item_title">Full name:</span>
									<input type="text" class="adr_input" name="customer_fullName" value="<?php echo $customer_row['customer_fullName']; ?>" required>
								</li>
    							<li class="adr_item">
									<span class="item_title">Phone:</span>
									<input type="text" class="adr_input" name="customer_phone" value="<?php echo $customer_row['customer_phone']; ?>" required>
								</li>
								<li class="adr_item">
									<span class="item_title">Address line 1:</span>
									<input type="text" class="adr_input" name="customer_c_address" placeholder="Street address, P.O. box, company name, c/o " value="<?php echo $customer_row['customer_c_address']; ?>"  required>
								</li>
								<li class="adr_item">
									<span class="item_title">Address line 2:</span>
									<input type="text" class="adr_input" name="customer_p_address" placeholder="Apartment, suite, unit, building, floor, etc. " value="<?php echo $customer_row['customer_p_address']; ?>" required>
								</li>
								<li class="adr_item">
									<span class="item_title">City:</span>
									<input type="text" class="adr_input" name="customer_city" value="<?php echo $customer_row['customer_city']; ?>" required>
								</li>
								<li class="adr_item">
									<span class="item_title">State/Province/Region: </span>
									<input type="text" class="adr_input" name="customer_state" value="<?php echo $customer_row['customer_state']; ?>" required>
								</li>
								<li class="adr_item">
									<span class="item_title">ZIP: </span>
									<input type="text" class="adr_input" name="customer_zip" value="<?php echo $customer_row['customer_zip']; ?>" required>
								</li>
								<li class="adr_item">
									<span class="item_title">Country: </span>
									<!--$customer_row['customer_country']获得表单中存储的国家值-->
									<select class="adr_select" name="customer_country" required>
									    <option value="american" <?php if($customer_row['customer_country']=="american") echo "selected='selected'"; ?> >American</option>
										<option value="china" <?php if($customer_row['customer_country']=="china") echo "selected='selected'"; ?> >China</option>
									</select>
								</li>
							</ul>
							<!-- <input class="pay btn" value="Pay" type="submit">--> 
						</div>
					     <!--<form id="order" name="order" action="" method="post" novalidate="novalidate">-->	
						<div class="order_summary">
							<div class="order_sum">
								<input class="pay btn" type="submit" value="Pay">
								<ul class="sum_list">
								    <li>
										<span class="title">product name:</span>
										<span class="cost"><?php echo $product_row['product_name']; ?></span>
							            <input type="hidden" name="product_name" value="<?php echo $product_row['product_name']; ?>">
									</li>
								    <li>
										<span class="title">Number:</span>
										<span class="cost"><?php echo $number; ?></span>
										<input type="hidden" name="order_number" value="<?php echo $number; ?>">
									</li>
									<li>
										<span class="title">Product:</span>
										<span class="cost">
										$<?php printf("%.2f",$buy_price); ?>
										<!--$199.00-->
										</span>
									</li>
									<li>
										<span class="title">Delivery:</span>
										<span class="cost">
										$<?php printf("%.2f",$delivery); ?>
										<!--$20.00-->
										</span>
										<input type="hidden" name="order_postage" value="<?php printf("%.2f",$delivery); ?>">
									</li>
									<li>
										<span class="title">Sum:</span>
										<span class="cost">
										$<?php printf("%.2f",$delivery+$buy_price); ?>
										<!--$219.00-->
										</span>
									</li>
									<li class="order_total">
										<span class="title">Total:</span>
										<span class="cost">
										$<?php printf("%.2f",$delivery+$buy_price); ?>
										<!--$219.00-->
										</span>
										<input type="hidden" name="order_total" value="<?php printf("%.2f",$delivery+$buy_price); ?>">
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