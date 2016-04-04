<?php
require_once 'include.php';
$act=$_REQUEST['act'];
@$source=$_REQUEST['source'];

if($act=="logout"){
  logout();
}elseif($act=="customerLogout"){
  customerLogout();
}elseif($act=="signup"){
  $mes=signup($source);
}elseif($act=="register"){
  $mes=register();
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