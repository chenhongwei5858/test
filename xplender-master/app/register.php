<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>xplender register</title>
	</head>

	<body>
	   <div class="register">
	   	<form action="../doAction.php?act=register" method="post" >
	   	  <div class="register_input">
	   	  	  <div style="margin-bottom:30px;">
			    <label name="email">email</label>
			    <input type="email" id="email" placeholder="name" name="customer_email" />
			  </div>
			  <div style="margin-bottom:30px;">
			    <label name="password">password</label>
			    <input type="password" id="password" placeholder="password" name="customer_password" />
			  </div>
			  <div style="margin-bottom:30px;">
			    <label name="passwordAgain">password again</label>
			    <input type="password" id="passwordAgain" placeholder="password again" name="password_again"/>
			  </div>
	   	  </div>
		  <div style="margin-bottom:30px;">
		    <label>
			  <input type="checkbox" name="send" checked="">Yes, Send me emails about special offers, exclusives and promotions.
			</label>
	      </div>
		  <div style="margin-bottom:30px;">
			<label class="input-ckb wd320">
			  <input type="checkbox" name="agree" class="mr5 J-checkbox" checked="">I have read and agreed to 
			  <a target="_blank" href="privacphp.php">User Agreement.</a>
			</label>
		  </div>
		  <button type='submit'>submit</button>
		</form>
		<div>
		  <a href="index.php">log in</a>
		</div>
	   </div>
		
	</body>
</html>
