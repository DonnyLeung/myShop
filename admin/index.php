<?php 
require_once'../include.php';
checkLogined();
//后台主页
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>首页</title>
 <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
 <meta name="apple-mobile-web-app-capable" content="yes">
 <meta name="apple-mobile-web-app-status-bar-style" content="black">
 <link rel="stylesheet" href="../pages/common/css/bootstrap.min.css">
 <link rel="stylesheet" href="../pages/common/css/style.css">
</head>
</head>
<body>
 <div class="navbar navbar-default" role="navigation">
 	<div class="navbar-header">
 		<a href="##" class="navbar-brand">MyShop</a>
 		<span class="pull-right">欢迎你</span>
 	</div>
 </div>
 
 <div class="body row">
 	
 	<div class="btn-toolbar">
		 <ol class="breadcrumb pull-left">
		 	<li><a href="#">首页</a></li>
		 	<li><a href="#">我的书</a></li>
		 	<li class="active">《图解CSS3》</li>
			</ol>
			<div class="btn-group pull-right">
				<button type="button" class="btn btn-default"><span class="glyphicon glyphicon-home"></span>首页</button>
    <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-arrow-left"></span>前进</button>
    <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-arrow-right"></span>后退</button>
    <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-refresh"></span>刷新</button>
    <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-log-out"></span>退出</button>
			</div>
 	</div>
 	
 	<div class="col-md-2">
 		<div class="panel panel-default">
 			<div class="panel-heading">管理员</div>
 			<div class="pamel-body">
 				<dl>
 					<dt>商品管理</dt>
 					<dd>商品修改</dd>
 					<dd>商品分类</dd>
 					<dt>订单管理</dt>
 					<dd>订单列表</dd>
 					<dd>订单详情</dd>
 					<dd>退订</dd>
 				</dl>
 			</div>
 		</div>
 	</div>
 	
 	<div class="col-md-10">
 	<div class="panel panel-default">
 		<div class="panel-heading">产品管理</div>
 		<div class="panel-body">
 			
 			<table class="table table-bordered">
 				<thead>
 					<tr>
 						<th>商品编号</th>
 						<th>商品名称</th>
 						<th>品牌</th>
 						<th>分类</th>
 						<th>库存</th>
 					</tr>
 				</thead>
 			</table>
 		</div>
 	</div>	
 	</div>
 </div>


	<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
 <script src="../pages/common/js/bootstrap.min.js"></script>
</body>
</html>