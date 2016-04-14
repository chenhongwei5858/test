<?php
require_once '../include.php';
checkLogined();

$order_id=$_REQUEST['order_id'];
$order_row=SCInformation("xplender_order","order_id='{$order_id}'");

$customer_id=$order_row['customer_id'];
$customer_row=SCInformation("xplender_customer","customer_id='{$customer_id}'");

$product_name=$order_row['product_name'];
$product_row=SCInformation("xplender_product","product_name='{$product_name}'");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>xplender bakcstage</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>  
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar" style="width:200px;">
        <header class="templatemo-site-header">
          <h1>xplender</h1>
        </header>
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
        </div>
        <nav class="templatemo-left-nav" style="font-size:10px;">          
          <ul>
            <li><a href="admin.php" ><i class="fa fa-home fa-fw"></i>admin</a></li>
            <li><a href="customer.php"><i class="fa fa-bar-chart fa-fw"></i>customer list</a></li>
            <li><a href="subscribe.php"><i class="fa fa-users fa-fwi"></i>Subscribe list</a></li>
			<li><a href="product.php"><i class="fa fa-users fa-fwi"></i>product list</a></li>
			<li><a href="order.php"><i class="fa fa-users fa-fwi"></i>order list</a></li>
            <li><a href="../doAction.php?act=logout">log out</a></li>			
          </ul>  
        </nav>
      </div>
      <!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
				<li>Welcome <?php echo $_SESSION['login_admin_name']; ?></li>
              </ul>  
            </nav> 
          </div>
        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">
            <h2 class="margin-bottom-10">order details</h2>
            <form action="../doAdminAction.php?act=updateOrder&order_id=<?php  echo $order_id; ?>" class="templatemo-login-form" method="post" enctype="multipart/form-data">
              <div class="row form-group">
                <div class="col-lg-12 col-md-12 form-group">                  
                    <label for="order_customer_email">customer email</label>
                    <input type="text" class="form-control" id="order_customer_email" value="<?php  echo $customer_row['customer_email']; ?>" name="customer_email" readonly >                  
                </div>
                <div class="col-lg-12 col-md-12 form-group">                  
                    <p>product img</p>
                    <img src="<?php  echo "../app/{$product_row['images_url']}" ?>" width="100" height="100" />                  
                </div> 
				<div class="col-lg-12 col-md-12 form-group">                  
                    <label for="order_product_id">product id</label>
                    <input type="text" class="form-control" id="order_product_id" value="<?php  echo $product_row['product_id']; ?>" name="product_id" readonly>                  
                </div>
                <div class="col-lg-12 col-md-12 form-group">                 
                    <label for="order_price">order total</label>
                    <input type="text" class="form-control" id="order_price" value="<?php  echo $order_row['order_total']; ?>" name="order_total" readonly>                  
                </div>
				<div class="col-lg-6 col-md-6 form-group">                  
                    <label for="company">logistics company</label>
                    <input type="text" class="form-control" id="company" placeholder="logistics company" name="order_company" value="<?php echo $order_row['order_company']; ?>">                  
                </div> 
				<div class="col-lg-6 col-md-6 form-group">                  
                    <label for="logisticsNumber">logistics number</label>
                    <input type="text" class="form-control" id="logisticsNumber" placeholder="logistics number" name="logistics_number" value="<?php echo $order_row['logistics_number']; ?>">
                </div>
				<div class="col-lg-6 col-md-6 form-group"> 
                  <label class="control-label templatemo-block">logistics status</label>                 
                  <select class="form-control" name="logistics_status">
                    <option value="freight" <?php if($order_row['logistics_status']=="freight") echo "selected";  ?> >freight</option>
                    <option value="logistics success" <?php if($order_row['logistics_status']=="logistics success") echo "selected";  ?>>logistics success</option>
                    <option value="order picking" <?php if($order_row['logistics_status']=="order picking") echo "selected";  ?> >order picking</option>					
                  </select>
                </div>
				<div class="col-lg-6 col-md-6 form-group"> 
                  <label class="control-label templatemo-block">order status</label>                 
                  <select class="form-control" name="order_status">
                    <option value="have in hand" <?php if($order_row['order_status']=="have in hand") echo "selected";  ?> >have in hand</option>
                    <option value="order success" <?php if($order_row['order_status']=="order success") echo "selected";  ?>>order success</option>				
                  </select>
                </div>
              </div>
              <div class="form-group text-right">
                <button type="submit" class="templatemo-blue-button">Update</button>
              </div>                           
            </form>
          </div>
          <footer class="text-center">
            <p>by:zhf</p>
          </footer>
        </div>
	  </div>
    </div>
    
    <!-- JS -->
    <script src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
    <script src="js/jquery-migrate-1.2.1.min.js"></script> <!--  jQuery Migrate Plugin -->
    <!--<script src="https://www.google.com/jsapi"></script>  Google Chart -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->

  </body>
</html>