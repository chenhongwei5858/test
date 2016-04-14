<?php

function showPage($index_name,$page,$totalPage,$where=null,$sep="&nbsp;"){
  $where=($where==null)?null:"&".$where;
    //得到当前路径
	$url = $_SERVER ['PHP_SELF'];
	$index = ($page == 1) ? "首页" : "<a href='{$url}?{$index_name}=1{$where}'>首页</a>";
	$last = ($page == $totalPage) ? "尾页" : "<a href='{$url}?{$index_name}={$totalPage}{$where}'>尾页</a>";
	$prevPage=($page>=1)?$page-1:1;
	$nextPage=(@$Page>=$totalPage)?$totalPage:$page+1;
	$prev = ($page == 1) ? "上一页" : "<a href='{$url}?{$index_name}={$prevPage}{$where}'>上一页</a>";
	$next = ($page == $totalPage) ? "下一页" : "<a href='{$url}?{$index_name}={$nextPage}{$where}'>下一页</a>";
	$str = "总共{$totalPage}页/当前是第{$page}页";
	for($i = 1; $i <= $totalPage; $i ++) {
		//当前页无连接
		if ($page == $i) {
			@$p .= "[{$i}]";
		} else {
			@$p .= "<a href='{$url}?{$index_name}={$i}{$where}'>[{$i}]</a>";
		}
	}
 	$pageStr=$str.$sep . $index .$sep. $prev.$sep . $p.$sep . $next.$sep . $last;
 	return $pageStr;
}

