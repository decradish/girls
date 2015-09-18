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
	<meta property="wb:webmaster" content="120869181abf54a1" />
	<title><?php if($controller == 'player' && $method == 'index'):?>世界时尚小姐在线报名<?php else:?>世界时尚小姐在线报名<?php endif;?></title>
	
	<!-- 强制360浏览器用WebKit内核 -->
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">

	<meta name="keywords" content="世界时尚小姐,时尚小姐,世界小姐,环球小姐,选秀,模特大赛,梦幻美人鱼,捕鱼达人,捕鱼,亿众时代,2015选秀比赛,环球国际小姐,环球小姐 ,国际小姐,世界小姐,选美大赛" />
	<meta name="description" content="10万美金美人鱼代言，开启疯狂招募！现在报名，下一个世界时尚女王就是你！" />

	<base href="<?php echo base_url() ?>">
	<link rel="stylesheet" type="text/css" href="/public/js/fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />
	<link rel="stylesheet" href="/public/css/style.css" media="all">
	<link rel="stylesheet" href="/public/css/hstyle.css" media="all">
	<link rel="stylesheet" href="/public/css/jquery.Jcrop.css" media="all">
	<link rel="stylesheet" href="/public/css/index.css" media="all">

	<!--[if lt IE 9]>
	<script type="text/javascript" src="js/html5.js"></script>
	<![endif]-->

	<script type="text/javascript" src="/public/js/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="/public/js/jquery-migrate-1.2.1.min.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="/public/js/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>

</head>
<body>
<img class="sns_img" src="/public/img/sns.jpg" alt="">
<div class="wrapper">
<div class="bottom">
<div class="core">
	

		<div class="qr_right"></div><!-- /.qr_right -->
	<header>
		<div class="logos">
			<a class="logo_0" target="_blank" href="//www.ezone.cn" title="亿众时代">亿众时代</a>
			<a class="logo_1" target="_blank" href="javascript:void(0);" title="Fashion">Fashion</a>
			<a class="logo_2" target="_blank" href="javascript:void(0);" title="梦之冠国际影视">梦之冠国际影视</a>
		</div><!-- /.logos -->

		<table class="header_tb">
			<tr>
				<th colspan="2">
					2015世界时尚小姐中国京津翼赛区
					<span>报名时间：2015年9月17日-9月30日</span>
				</th>
			</tr>
			<tr>
				<td>主办单位：</td>
				<td>
					世界时尚小姐大赛组织 / 北京梦之冠国际影视文化传媒有限公司<br />
					北京亿众时代科技有限公司
				</td>
			</tr>
			<tr>
				<td>协办单位：</td>
				<td>
					北京鲁商盛世文化中心/礼团网
				</td>
			</tr>
		</table><!-- /table.header_tb -->

		<div class="girl_count">
			已有 <?php if(isset($girl_count)): echo $girl_count;else:?>0000000<?php endif;?> 名女神参选
		</div><!-- /.girl_count -->

		<div class="nav">
			<a class="<?php if($bHome):?>current<?php endif;?>" title="首页" href="/">首页</a>
			<a class="<?php if($controller == 'introduce'):?>current<?php endif;?>" title="赛事介绍" href="/introduce/">赛事介绍</a>
			<a class="<?php if($controller == 'news'):?>current<?php endif;?>" title="大赛咨询" href="/news/">大赛咨询</a>
			<a class="nav_3 <?php if($controller == 'player'):?>current<?php endif;?>" title="选手靓影" href="/player/">选手靓影</a>
			<a class="<?php if($controller == 'signup'):?>current<?php endif;?>" title="我要参加" href="/signup/">我要参加</a>
		</div><!-- /.nav -->
	</header>