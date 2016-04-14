<?php
//检查是否有管理员
function checkAdmin($sql){
  return fetchOne($sql);
}
//检查是否登录
function checkLogined(){
  error_reporting(0);
  if($_SESSION['login_admin_id']==""){
    alertMes("请先登录","login.html");
  }
}
//注销
function logout(){
  $_SESSION=array();
  session_destroy();
  header("location:bakcstage/login.html");
}
//客户注销
function customerLogout(){
  $_SESSION=array();
  session_destroy();
  header("location:app/index.php");
}
//商品分页
function getProductPage($page,$pageSize=2,$table,$where=null){
  $where=$where==null?null:" where ".$where;
  $sql="select * from {$table} {$where}";
  $totalRows=getResultNum($sql);
  //得到总页码数
  global $totalPage;
  $totalPage=ceil($totalRows/$pageSize);
  if($page<1||$page==null||!is_numeric($page)){
    $page=1;
  }
  if($page>=$totalPage)$page=$totalPage;
  $offset=($page-1)*$pageSize;
  $sql="select * from {$table} {$where} limit {$offset},{$pageSize}";
  $rows=fetchAll($sql);
  return $rows;
}
//更新order
function updateOrder($order_id){
	$arr=$_POST;
	array_splice($arr,0,2);
	
	$customer_email=$_POST['customer_email'];
	$customer_row=SCInformation("xplender_customer","customer_email='{$customer_email}'");
	$customer_id=$customer_row['customer_id'];
	
	$product_id=$_POST['product_id'];
	$product_row=SCInformation("xplender_product","product_id='{$product_id}'");
	$product_name=$product_row['product_name'];
	
	$arr['customer_id']=$customer_id;
	$arr['product_name']=$product_name;
	if(update("xplender_order",$arr,"order_id={$order_id}")){
        $mes="update success！<br /><a href='bakcstage/order.php'>return order page</a>";
    }else{
        $mes="update fail！<br /><a href='bakcstage/order_details?order_id={$order_id}.php'>return edit page</a>";
    }
    return $mes;
}








