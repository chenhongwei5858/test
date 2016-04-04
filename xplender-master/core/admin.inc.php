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









