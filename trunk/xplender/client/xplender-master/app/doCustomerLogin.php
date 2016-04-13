<?php
  require_once '../include.php';
  $customer_email=$_POST['customer_email'];
  $customer_password=md5($_POST['customer_password']);
  $page=@$_REQUEST['page']?$_REQUEST['page']:"index.php";
    $sql="select * from xplender_customer where customer_email='{$customer_email}' and customer_password='{$customer_password}'";
    $goPage=$page;
	if($page=="order.php"){
		$product_url=$_REQUEST['product_url'];
		$number=$_REQUEST['number'];
		$goPage=$page.'?product='.$product_url.'&number='.$number;
	}
	$row=checkCustomer($sql);
    if($row){
      $_SESSION['login_customer_name']=$row['customer_email'];
      $_SESSION['login_customer_id']=$row['customer_id'];
      //header("location:changePassword.php");
      alertMes("登录成功",$goPage);
    }else{
      alertMes("登入失败，重新登入","login.php?page={$goPage}");
    } 	  
  
