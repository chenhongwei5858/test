<?php
require_once '../include.php';
$all_row=allInformation("xplender_product");
@$customer_email=$_SESSION['login_customer_name'];
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
			<ul class="login_info">
				<li>
				   <?php
				     if(@$_SESSION['login_customer_id']==""){
					   echo "<form action='doCustomerLogin.php?page=product.php' method='post'>";
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

			<!-- location -->
			<div class="location">
				<p><a href="index.php">Home</a>><a href="product.php">Product List</a></p>
			</div>

			
			
			
			
			<?php foreach($all_row as $row): ?>
			    <?php 
				    $product_id=$row['product_id'];
				    if(($product_id+2)%3==0){
					    echo "<section class='product_section white'>";
				  }
				?>
					<div class="middle_show">
						<?php
                            echo "<a class='middle_show_photo' href='{$row['product_url']}'>";
							echo "<img src='{$row['images_url']}' />";
                            echo "</a>";
						?>
						<div class="middle_show_des">
						    <div class="show_info">
							    <?php 
								    echo "<h3><a href='{$row['product_url']}'>{$row['product_name']}</a></h3>";
									echo "<p class='info'><a href='{$row['product_url']}'>{$row['product_illustration']}</a></h3>";
								?>
							</div>
							<span class="price">$<i class="number"><?php echo $row['product_price']; ?></i></span>
						</div>
					</div>
				<?php
                    if($product_id%3==0){
						echo "</section>";
					}
				?>				
		    <?php endforeach; ?>			
			<!-- product 3
			<section class="product_section white">
				<div class="middle_show">
					<a class="middle_show_photo" href="product_detail1.php">
						<img src="images/temp/product1/480x480.jpg">
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
					<a class="middle_show_photo" href="product_detail2.php">
						<img src="images/temp/product2/480x480.jpg">
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
					<a class="middle_show_photo" href="product_detail3.php">
						<img src="images/temp/product3/480x480.jpg">
					</a>
					<div class="middle_show_des">
						<div class="show_info">
							<h3><a href="product_detail.php">Yeelight床头灯</a></h3>
							<p class="info"><a href="product_detail.php">触摸式操作 给卧室1600万种颜色</a></p>
						</div>
						<span class="price">$<i class="number">99.00</i></span>
					</div>
				</div>
			</section> -->

			<!-- product 3 
			<section class="product_section white">
				<div class="middle_show">
					<a class="middle_show_photo" href="product_detail4.php">
						<img src="images/temp/product4/480x480.jpg">
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
					<a class="middle_show_photo" href="product_detail5.php">
						<img src="images/temp/product5/480x480.jpg">
					</a>
					<div class="middle_show_des">
						<div class="show_info">
							<h3><a href="">Yeelight床头灯</a></h3>
							<p class="info"><a href="">触摸式操作 给卧室1600万种颜色</a></p>
						</div>
						<span class="price">$<i class="number">99.00</i></span>
					</div>
				</div>
			</section>-->

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