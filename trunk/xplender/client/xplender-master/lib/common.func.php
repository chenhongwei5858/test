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
//添加地址
function address(){
	$arr=$_POST;
	$customer_id=$_SESSION['login_customer_id'];
	$keys="`".join("`,`",array_keys($arr))."`";
	$keys="`customer_id`,".$keys;
	$vals="'".join("','",array_values($arr))."'";
	$vals="'".$customer_id."',".$vals;
	$sql="insert `xplender_address`($keys) values({$vals})";
	mysql_query($sql);
	if(mysql_insert_id()){
	    $mes="add address success!<br /><a href='app/order.php'>return back</a>";
	}else{
	    $mes="add address fail! please try again<br /><a href='app/order.php'>return back</a>";
	}
	return $mes;

}
//下订单
function order($product_url){
	$arr=$_POST;
	$customer_id=$_SESSION['login_customer_id'];
	$keys="`".join("`,`",array_keys($arr))."`";
	$keys="`customer_id`,".$keys;
	$vals="'".join("','",array_values($arr))."'";
	$vals="'".$customer_id."',".$vals;
	$sql="insert `xplender_order`($keys) values({$vals})";
	echo $sql;
	mysql_query($sql);
	if(mysql_insert_id()){
	    $mes="order success!<br /><a href='app/index.php'>go to index page</a>";
	}else{
		echo $product_url;
	    $mes="order fail! please try again<br /><a href='app/{$product_url}'>return back product page</a>";
	}
	return $mes;
}
//添加购物车
function cart(){
	$product_name=$_POST['product_name'];
	$buy_number=$_POST['buy_number'];
	$customer_id=$_SESSION['login_customer_id'];
	$product_row=SCInformation("xplender_product","product_name='{$product_name}'");
	$product_id=$product_row['product_id'];
	$sql="insert `xplender_cart`(`customer_id`, `product_id`, `buy_number`) VALUES ('{$customer_id}','{$product_id}','{$buy_number}')";
	mysql_query($sql);
	if(mysql_affected_rows()){
	    $mes="add cart success!<br /><a href='app/index.php'>go to index page</a> or <a href='app/cart.php'>buy this porduct</a>";
	}else{
	    $mes="add cart fail! please try again<br /><a href='app/product_detail.php?click_product_name={$product_name}'>return back</a>";
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
