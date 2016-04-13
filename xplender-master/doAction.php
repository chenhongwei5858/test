<?php
require_once 'include.php';
$act=$_REQUEST['act'];
@$source=$_REQUEST['source'];
@$product_url=$_REQUEST['product'];

if($act=="logout"){
  logout();
}elseif($act=="customerLogout"){
  customerLogout();
}elseif($act=="signup"){
  $mes=signup($source);
}elseif($act=="register"){
  $mes=register();
}elseif($act=="order"){
  $mes=order($product_url);
}elseif($act=="updateAddress"){
  $mes=updateAddress();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>xplender</title>
</head>
<body>
<?php
  if($mes){
    echo $mes;
  }
?>
</body>
</html>