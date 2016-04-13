<?php
function alertMes($mes,$url){
  echo "<script>alert('{$mes}');</script>";
  echo "<script>window.location='{$url}';</script>";
}
//获得单个商品详细信息
function SCInformation($table,$where=null){
	$where=$where==null?null:" where ".$where;
	$sql="select * from {$table} {$where}";
	$row=fetchOne($sql);
	return $row;
} 
//获得所有商品详细信息
function allInformation($table,$where=null){
	$where=$where==null?null:" where ".$where;
	$sql="select * from {$table} {$where}";
	$row=fetchAll($sql);
	return $row;
}

//修改地址
function updateAddress(){
	$arr=$_POST;
	$customer_email=$_POST['customer_email'];
	if(update("xplender_customer",$arr,"customer_email='{$customer_email}'")){
	    $mes="change address success<br /><a href='app/personal_center.php'>return back</a>";
	}else{
		$mes="don't change email<br /><a href='app/personal_center.php'>return back</a>";
	}
	return $mes;
}
//下订单
function order($product_url){
	$arr=$_POST;
	
	$product_name=$_POST['product_name'];
	$number=$_POST['order_number'];
	$product_row=SCInformation("xplender_product","product_name='{$product_name}'");
	$product_url=$product_row['product_url'];
	$customer_email=$_POST['customer_email'];
	
	//update地址
	$address_arr=array_slice($arr,0,9);
	//order地址
	$order_arr=array_slice($arr,9,5);
	$login_customer_email=@$_SESSION['login_customer_name'];
	//判断是否登入
	if($login_customer_email){
		//修改地址
		if(update("xplender_customer",$address_arr,"customer_email='{$customer_email}'")){
			//修改地址成功，下订单
			$customer_row=SCInformation("xplender_customer","customer_email='{$customer_email}'");
			$order_arr['customer_id']=$customer_row['customer_id'];
			$order_arr['order_time']=date(time());
			if(insert("xplender_order",$order_arr)){
				$mes="order success!<br /><a href='app/personal_center.php'>go to personal center page</a>";
			}else{
				$mes="order fail!<br /><a href='app/order.php?product={$product_url}&number={$number}'>order again</a>";
			}
		}else{
			//失败
			$mes="update address fail!<br /><a href='app/order.php?product={$product_url}&number={$number}'>order again</a>";
		}
	}else{
		$sql="select * from `xplender_customer` where customer_email='{$customer_email}'";
		$row=fetchOne($sql);
		if($row){
			//邮箱已注册
			$mes="this email is register! you should log in to buy product<br /><a href='app/login.php?page=order.php&product={$product_url}&number={$number}'>log in</a>";
		}else{
			//添加用户
		    $customer_password=md5("abcd1234");
		    $address_arr['customer_password']=$customer_password;
		    //判断邮箱
		    if(filter_var($customer_email, FILTER_VALIDATE_EMAIL)){
			    if(insert("xplender_customer",$address_arr)){
			        //添加用户成功，下订单adadada
					$order_arr['customer_id']=mysql_insert_id();
					$order_arr['order_time']=date(time());
                    if(insert("xplender_order",$order_arr)){
				        $mes="order success!<br /><a href='app/personal_center.php'>go to personal center page</a>";
			        }else{
			        	$mes="order fail!<br /><a href='app/order.php?product={$product_url}&number={$number}'>order again</a>";
			        }
                }else{
			        //失败
                    $mes="add address fail<br /><a href='app/order.php?product={$product_url}&number={$number}'>order again</a>";
                }
		    }else{
				$mes="add email fail!<br /><a href='app/order.php?product={$product_url}&number={$number}'>order again</a>";
			}
		}
	}	
	return $mes;
}

//收藏
function collection($customer_id,$product_id){
	if($customer_id){
		$sql="select * from xplender_collection where product_id={$product_id}";
		$row=fetchOne($sql);
		if($row){
			$collection=$row['collection'];
			if($collection){
				echo "<span class='collection active'>collection</span>";
			}else{
				echo "<span class='collection'>collection</span>";
			}
		}else{
			echo "<span class='collection'>collection</span>";
		}
	}else{
		echo "<span class='collection'>collection</span>";
	}
}
