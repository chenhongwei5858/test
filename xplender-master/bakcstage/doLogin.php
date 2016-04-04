<?php
  require_once '../include.php';
  $admin_name=$_POST['admin_name'];
  $admin_password=md5($_POST['admin_password']);

    $sql="select * from xplender_admin where admin_name='{$admin_name}' and admin_password='{$admin_password}'";
    $goPage="admin.php";
	$row=checkAdmin($sql);
    if($row){
      $_SESSION['login_admin_name']=$row['admin_name'];
      $_SESSION['login_admin_id']=$row['admin_id'];
      //header("location:changePassword.php");
      alertMes("登录成功",$goPage);
    }else{
      alertMes("登入失败，重新登入","login.html");
    } 	  
  
