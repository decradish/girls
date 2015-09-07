<?php
$controller = $this->uri->segment(1);
$method = $this->uri->segment(2);

$bHome = false;
if(!$controller){
	$bHome = true;
}elseif($controller == 'index' && !$method){
	$bHome = true;
}elseif($controller == 'index' && $method == 'index'){
	$bHome = true;
}
$account = !empty($_COOKIE['username']) ? $_COOKIE['username'] : null;
?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>世界时尚小姐</title>
	<base href="<?php echo base_url() ?>">
	<link rel="stylesheet" href="/public/css/style.css" media="all">

	<!--[if lt IE 9]>
	<script type="text/javascript" src="js/html5.js"></script>
	<![endif]-->

	<script type="text/javascript" src="/public/js/jquery-1.11.0.min.js"></script>

</head>
<body>
<div class="wrapper">
<div class="bottom">
<div class="core">
	
	<header>
		<div class="logos">
			<a class="logo_0" target="_blank" href="//www.ezone.cn" title="亿众时代">亿众时代</a>
			<a class="logo_1" target="_blank" href="#" title="Fashion">Fashion</a>
			<a class="logo_2" target="_blank" href="#" title="梦之冠国际影视">梦之冠国际影视</a>
		</div><!-- /.logos -->

		<table class="header_tb">
			<tr>
				<th colspan="2">
					2015世界时尚小姐中国京津翼赛区
					<span>报名时间：2015年9月10日-9月30日</span>
				</th>
			</tr>
			<tr>
				<td>主办单位：</td>
				<td>
					世界时尚小姐选美组织　/　世界时尚小姐大赛有限公司<br />
					北京梦之冠国际影视文化传媒有限公司　/　北京亿众时代网络科技有限公司
				</td>
			</tr>
			<tr>
				<td>协办单位：</td>
				<td>
					中国模特协会　/　中央电视台
				</td>
			</tr>
		</table><!-- /table.header_tb -->

		<div class="girl_count">
			已有 0000000 名女神参选
		</div><!-- /.girl_count -->

		<div class="nav">
			<a title="首页" href="#">首页</a>
			<a title="赛事介绍" href="#">赛事介绍</a>
			<a title="大赛咨询" href="#">大赛咨询</a>
			<a class="nav_3" title="选手靓影" href="#">选手靓影</a>
			<a class="current" title="我要参加" href="#">我要参加</a>
		</div><!-- /.nav -->
	</header>