<?php
require_once '../include.php';
checkLogined();
$admin_id=$_SESSION['login_admin_id'];
$pageSize=5;
$page=@$_REQUEST['page']?(int)$_REQUEST['page']:1;
@$customer_email=$_REQUEST['customer_email'];
if($customer_email){
  $rows=getProductPage($page,$pageSize,"xplender_customer","customer_email='{$customer_email}'");
}else{
  $rows=getProductPage($page,$pageSize,"xplender_customer");
}
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
            <li><a href="#customer.php" class="active"><i class="fa fa-bar-chart fa-fw"></i>customer list</a></li>
            <li><a href="subscribe.php"><i class="fa fa-users fa-fwi"></i>Subscribe list</a></li>
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
          
		  <div class="templatemo-flex-row flex-content-row">
            
			<div class="col-1">
              <div class="panel panel-default templatemo-content-widget white-bg no-padding templatemo-overflow-hidden">
                <div class="panel-heading templatemo-position-relative"><h2 class="text-uppercase">Customer Table</h2></div>
                <div class="table-responsive">
                  <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <td>customer id</td>
                        <td>email</td>
						<td>special offers</td>
                        <td>fullName</td>
                        <td>phone</td>
						<td>addressLine 1</td>
						<td>addressLine 2</td>
						<td>city</td>
						<td>State/Province/Region</td>
						<td>zip</td>
						<td>country</td>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach($rows as $row): ?>
						    <tr>
								<td><?php echo $row['customer_id']; ?></td>
								<td><?php echo $row['customer_email']; ?></td>
								<td><?php echo $row['customer_offers']; ?></td>
								<td><?php echo $row['customer_fullName']; ?></td>
								<td><?php echo $row['customer_phone']; ?></td>
								<td><?php echo $row['customer_addressLineOne']; ?></td>
								<td><?php echo $row['customer_addressLineTwo']; ?></td>
								<td><?php echo $row['customer_city']; ?></td>
								<td><?php echo $row['customer_StateProvinceRegion']; ?></td>
								<td><?php echo $row['customer_zip']; ?></td>
								<td><?php echo $row['customer_country']; ?></td>
							</tr>
							<?php endforeach; ?>
							<?php if($rows>$pageSize):?>
							<tr>
							    <td colspan="10" class="no-padding-right"><?php echo showPage($page,$totalPage);?></td>
							</tr>
							<?php endif;?>                   
                    </tbody>
                  </table>    
                </div>                          
              </div>
            </div>           
          </div> <!-- Second row ends -->
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