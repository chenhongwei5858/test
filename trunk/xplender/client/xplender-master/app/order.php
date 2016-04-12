<?php
require_once '../include.php';
$product_url=$_REQUEST['product'];
//检查是否登入
checkCustomerLogined($product_url);
//顾客id
$customer_id=@$_SESSION['login_customer_id']?$_SESSION['login_customer_id']:0;

$row=SCInformation("xplender_product","product_url='{$product_url}'");

$number=$_POST['number'];
$buy_price=$number*$row['product_price'];

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
					<form id="order" name="order" action="../doAction.php?act=order&product=<?php echo $product_url; ?>" method="post" novalidate="novalidate">
					    <?php
						    $result_rows=allInformation("xplender_address","customer_id={$customer_id}");
							if($result_rows){
								echo "<div class='order_address'>";
								    echo "<h3 class='title'>Choose your shipping address</h3>";
								    echo "<ul class='adr_list'>";
									    echo "<li class='adr_item'>";
										    echo "<select class='adr_select' name='address_index' required>";
												foreach($result_rows as $row):
												    echo "<option value='{$row['address_index']}'>{$row['address_index']} {$row['customer_fullName']} {$row['customer_caddress']}</option>";
												endforeach;
											echo "</select>";
										echo "</li>";
										echo "<input class='pay btn' type='text' value='add new address'>";
									echo "</ul>";	
								echo "</div>";
							}else{
								$address_index=$result_rows+1;
								echo "<form id='adress' name='adress' action='../doAction.php?act=address' method='post' novalidate='novalidate'>";
							        //fuck，加了个ad前缀，居然被abp拦截了
									echo "<div class='order_address'>";
								        echo "<h3 class='title'>Enter a new shipping address</h3>";
										echo "<ul class='adr_list'>";
										    echo "<li class='adr_item'>";
											    echo "<span class='item_title'>Full name:</span>";
												echo "<input type='text' class='adr_input' name='customer_fullName' required>";
											echo "</li>";
											echo "<li class='adr_item'>";
											    echo "<span class='item_title'>address_index:</span>";
												echo "<input type='text' class='adr_input' name='address_index' value='{$address_index}' required readonly >";
											echo "</li>";
											echo "<li class='adr_item'>";
											    echo "<span class='item_title'>Phone:</span>";
												echo "<input type='text' class='adr_input' name='customer_phone' required>";
											echo "</li>";
											echo "<li class='adr_item'>";
											    echo "<span class='item_title'>Address line 1:</span>";
												echo "<input type='text' class='adr_input' placeholder='Street address, P.O. box, company name, c/o ' name='customer_caddress' required>";
											echo "</li>";
											echo "<li class='adr_item'>";
											    echo "<span class='item_title'>Address line 2:</span>";
												echo "<input type='text' class='adr_input' placeholder='Apartment, suite, unit, building, floor, etc. ' name='customer_paddress' required>";
											echo "</li>";
											echo "<li class='adr_item'>";
											    echo "<span class='item_title'>City:</span>";
												echo "<input type='text' class='adr_input' name='customer_city' required>";
											echo "</li>";
											echo "<li class='adr_item'>";
											    echo "<span class='item_title'>State/Province/Region:</span>";
												echo "<input type='text' class='adr_input' name='customer_state' required>";
											echo "</li>";
											echo "<li class='adr_item'>";
											    echo "<span class='item_title'>ZIP:</span>";
												echo "<input type='text' class='adr_input' name='customer_zip' required>";
											echo "</li>";
											echo "<li class='adr_item'>";
											    echo "<span class='item_title'>Country:</span>";
												echo "<select class='adr_select' name='customer_country' required>";
												    echo "<option value='american'>American</option>";
												    echo "<option value='china'>China</option>";
												echo "</select>";
											echo "</li>";
										echo "</ul>";
                                        echo "<input class='pay btn' type='submit' value='submit'>";									
									echo "</div>";
                                echo "</form>";									
							}
							
						?>
						<!-- fuck，加了个ad前缀，居然被abp拦截了
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
							</ul> -->
							<!-- <input class="pay btn" value="Pay" type="submit"> 
						</div>-->
						<div class="order_summary">
							<div class="order_sum">
								<input class="pay btn" type="submit" value="Pay">
								<ul class="sum_list">
								    <li>
										<span class="title">Number:</span>
										<span class="cost"><?php echo $number; ?></span>
										<input type="hidden" name="number" value="<?php echo $number; ?>">
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
										<span class="cost">$<?php printf("%.2f",$delivery); ?><!--$20.00--></span>
									</li>
									<li>
										<span class="title">Sum:</span>
										<span class="cost">$<?php printf("%.2f",$delivery+$buy_price); ?><!--$219.00--></span>
									</li>
									<li class="order_total">
										<span class="title">Total:</span>
										<span class="cost">$<?php printf("%.2f",$delivery+$buy_price); ?><!--$219.00--></span>
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