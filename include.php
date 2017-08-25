<?php 
header("content-type:text/html;charset=utf-8")
session_start();
define("Root",dirname(_FILE_));
set_include_path(".".PATH_SEPARATOR.ROOT."/lib".PATH_SEPARATOR.ROOT."/")
require_once'mysql.func.php';
require_once'image.func.php';
require_once'common.func.php';
require_once'string.func.php';
require_once'page.func.php';
require_once'configs.php';
require_once'admin.inc.php';
connet();

 ?>