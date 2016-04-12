<?php
require_once '../include.php';
$customer_id=@$_SESSION['login_customer_id']?$_SESSION['login_customer_id']:0;
//值为该商品的url
$product_url="product_detail3.php";

$product_row=SCInformation("xplender_product","product_url='{$product_url}'");
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
				<form name="purchase" action="cart.php?product=<?php echo $product_url; ?>" method="post">
					<div class="product_show_module">
						<div class="photo_show">
							<div class="sliderBox">
					            <ul class="slider">
					                <li><a href=""><img src="images/temp/product3/480x480.jpg"></a></li>
					            </ul>    
					        </div>
					        <ul class="control">
					            <li><img src="images/temp/product3/60x60.jpg"></li>
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
								<span class="norton"><img src="images/norton.gif" alt="norton"></span>
							</li>
							<li class="info_item">
								<div class="info_item_pur">
									<div class="pur_num">
										<span class="num_count num_sub">-</span>
										<span class="num"><input type="text" name="number" value="1" autocomplete="false"></span>
										<span class="num_count num_add">+</span>
									</div>
									<input class="purchase btn" type="submit" value="Buy">
									<?php
									    collection($customer_id,$product_row['product_id']);
									?>
									<!--<span class="collection">collection</span>-->
								</div>
							</li>
						</ul>
					</div>
				</form>
			</section>

			<!-- product description -->
			<section class="product_des">
				<div class="pro_des_head">
					<ul class="des_head tab_menu">
						<li>Description</li>
						<li>Customer Review</li>
					</ul>
				</div>
				<div class="des_content tab_content">
					<div class="tab_con">
						<div class="des_item product_description tab_conItem">
							<img src="images/temp/product3/size.png" alt="description">
						</div>
						<div class="des_item review_content tab_conItem">
							<!-- customer review -->
							<div class="customer_review">
								<div class="review_stars">
									<h4>Average Rating</h4>
									<span class="average_rating_star"><i class="star"></i></span>
									<span>5.0 out of 5</span>
								</div>
								<ul class="star_list">
									<li>5<i class="star"></i><span class="percent_total"><i class="percent"></i></span><span class="num">5</span></li>
									<li>4<i class="star"></i><span class="percent_total"><i class="percent"></i></span><span class="num">4</span></li>
									<li>3<i class="star"></i><span class="percent_total"><i class="percent"></i></span><span class="num">3</span></li>
									<li>2<i class="star"></i><span class="percent_total"><i class="percent"></i></span><span class="num">2</span></li>
									<li>1<i class="star"></i><span class="percent_total"><i class="percent"></i></span><span class="num">1</span></li>
								</ul>
								<div class="write_review">
									<div class="write_review_text">
										<p>We want to hear from you!</p>
										<p>You can leave your review after login and purchase.</p>
									</div>
									<a href="#add_review" class="review_btn">Write a review</a>
								</div>
							</div>
						
							<!-- customer review list -->
							<ul class="customer_review_list">
								<li class="review_item ">
									<!-- customer info -->
									<div class="customer_info">
										<span class="customer_info_stars"><i class="star5"></i></span>
										<span class="customer_name">By Tracy</span>
										<span class="order_info">I bought: White,M</span>
									</div>
									<!-- review info -->
									<div class="review_info">
										<p class="review_date">02/10/2015</p>
										<p class="review_description">size is ok</p>
									</div>
								</li>
								<li class="review_item ">
									<!-- customer info -->
									<div class="customer_info">
										<span class="customer_info_stars"><i class="star5"></i></span>
										<span class="customer_name">By Tracy</span>
										<span class="order_info">I bought: White,M</span>
									</div>
									<!-- review info -->
									<div class="review_info">
										<p class="review_date">02/10/2015</p>
										<p class="review_description">size is ok</p>
									</div>
								</li>
								<li class="review_item ">
									<!-- customer info -->
									<div class="customer_info">
										<span class="customer_info_stars"><i class="star5"></i></span>
										<span class="customer_name">By Tracy</span>
										<span class="order_info">I bought: White,M</span>
									</div>
									<!-- review info -->
									<div class="review_info">
										<p class="review_date">02/10/2015</p>
										<p class="review_description">size is ok</p>
									</div>
								</li>
							</ul>

							<!-- add customer review -->
							<div id="add_review" class="add_review_main">
								<form class="customer_review_form" action="" name="review">
									<ul class="add_review_list">
										<li class="add_review_item">
											<input id="review_star" type="hidden" name="review_star">
											<span class="add_review_title">Stars</span>
											<div class="add_review_info">
												<ul class="add_star">
													<li></li>
													<li></li>
													<li></li>
													<li></li>
													<li></li>
												</ul>
											</div>
										</li>
										<li class="add_review_item">
											<span class="add_review_title">Review</span>
											<div class="add_review_info">
												<textarea name="text_info" id="" class="add_review_text"></textarea>
											</div>
										</li>
										<li><input type="submit" class="review_sub" value="submit"></li>
									</ul>
								</form>
							</div>
						</div>

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