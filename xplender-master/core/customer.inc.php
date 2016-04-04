<?php
//sing up
function signup($source){
  $arr=$_POST;
  $subscribe_email=$_POST['subscribe_email'];
  $addTable="xplender_subscribe";
  $sql="select * from {$addTable} where `subscribe_email`='{$subscribe_email}'";
  $row=fetchOne($sql);
  if($row){
    $mes=" Subscription failed! This email by subscription<br /><a href='app/{$source}.php'>return back</a>";
  }else if(filter_var($subscribe_email, FILTER_VALIDATE_EMAIL)){
           if(insert($addTable,$arr)){
             $mes="Subscription success！<br /><a href='app/{$source}.php'>return back</a>";
           }else{
             $mes="Subscription failed!<br /><a href='app/{$source}.php'>return back</a>";
           }
  }else{
    $mes="Subscription failed! Is not email address <br /><a href='app/{$source}.php'>return back</a>";
  }
  return $mes;
}
//register
function register(){
 //是否勾选了agree
  if(@$_POST['agree']){
    $customer_password=$_POST['customer_password'];
	//判断密码长度
	if(strlen($customer_password)>=6){
	  $customer_password=md5($_POST['customer_password']);
	  $password_again=md5($_POST['password_again']);
	  //判断两次密码是否一致
	  if($customer_password==$password_again){
	    $customer_email=$_POST['customer_email'];
		//判断是否为邮箱
	    if(filter_var($customer_email, FILTER_VALIDATE_EMAIL)){
	      $sql="select * from `xplender_customer` where `customer_email`='{$customer_email}'";
		  $row=fetchOne($sql);
		  //判断是否注册过
		  if($row){
	  	    $mes="This mailbox is registered.<br /><a href='app/register.php'>return back</a>";
		  }else{
	  	    $send=@$_POST['send'];
			//判断是否需要offer
		    if($send){
		      $send="yes";
		    }else{
		      $send="no";
		    }
		    $sql="insert `xplender_customer`( `customer_email`, `customer_password`,`customer_offers`) values('{$customer_email}','{$customer_password}','{$send}')";
		    mysql_query($sql);
			//判断注册是否成功
		    if(mysql_insert_id()){
               $mes="Register success！<br /><a href='app/register.php'>return back</a>";
             }else{
               $mes="Register failed!System error<br /><a href='app/register.php'>return back</a>";
             }
		  }
	    }else{
	      $mes="Please enter the corrent email address!<br /><a href='app/register.php'>return back</a>";
	    }
	}else{
	  $mes="The two passwords differ!<br /><a href='app/register.php'>return back</a>";
	}
  
	}else{
	  $mes="Enter password length too short!<br /><a href='app/register.php'>return back</a>";
	}
	
  }else{
    $mes="please agreed to User Agreement. <br /><a href='app/register.php'>return back</a>";
  }
  return $mes;
}










