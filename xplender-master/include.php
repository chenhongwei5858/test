<?php
  header("content-type:text/html;charset=utf-8");
  session_start();
  //define("ROOT",dirname('_FILE_'));
  //set_include_path(".".PATH_SEPARATOR.ROOT."/lib".PATH_SEPARATOR.ROOT."/core".PATH_SEPARATOR.ROOT."/configs".PATH_SEPARATOR.get_include_path());
  require_once 'lib/mysql.func.php';
  require_once 'lib/common.func.php';
  require_once 'lib/string.func.php';
  require_once 'lib/page.func.php';
  require_once "configs/configs.php";
  require_once 'core/admin.inc.php';
  require_once 'core/customer.inc.php';
  connect();