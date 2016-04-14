<?php
require_once 'include.php';
$act=$_REQUEST['act'];
$order_id=$_REQUEST['order_id'];

if($act=="updateOrder"){
  $mes=updateOrder($order_id);
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