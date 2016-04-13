<?php
require_once '../include.php';
@$customer_email=$_SESSION['login_customer_name'];
$page=@$_REQUEST['page']?$_REQUEST['page']:"index.php";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>xplender login</title>
	</head>

	<body>
	   <div class="register">
	   	<form action="doCustomerLogin.php?page=<?php echo $page;?>" method="post" >
	   	  <div class="register_input">
	   	  	  <div style="margin-bottom:30px;">
			    <label name="email">email</label>
			    <input type="email" id="email" placeholder="name" name="customer_email" />
			  </div>
			  <div style="margin-bottom:30px;">
			    <label name="password">password</label>
			    <input type="password" id="password" placeholder="password" name="customer_password" />
			  </div>
	   	  </div>
		  <button type='submit'>log in</button>
		</form>
	   </div>
		
	</body>
</html>
