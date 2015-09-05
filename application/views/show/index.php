<?php require_once(dirname(__FILE__).'/'.'../public/header.php');?>

	<div id="home_banner" class="banner home_banner">
		<a class="home_banner_item home_banner_2" href="product#lytl" title="烈焰屠龙">烈焰屠龙</a>
		<a class="home_banner_item home_banner_0" href="product#fish" title="THE AWAKENING">THE AWAKENING</a>
		<a class="home_banner_item home_banner_1" href="product#3nations" title="火麒麟的黄金宝藏">火麒麟的黄金宝藏</a>
	</div><!-- /#home_banner.banner.home_banner -->

	<div class="main">
		<div class="home_list">
			<div class="right_top">
				<a href="lists" class="more">查看更多</a>
				资讯动态
			</div><!-- /.right_top -->

			<div class="home_links">
				<a href="lists/detail/0" title="李克强：降低网费和流量费是市场的选择">
					<span>2015/08/14</span>
					<strong>李克强：降低网费和流量费是市场的选择</strong>
				</a>
				<a href="lists/detail/1" title="成功打开中国手机游戏市场的6大窍门">
					<span>2015/08/12</span>
					<strong>成功打开中国手机游戏市场的6大窍门</strong>
				</a>
				<a href="lists/detail/2" title="独立开发者：如何优雅的处理糟糕的游戏">
					<span>2015/08/11</span>
					<strong>独立开发者：如何优雅的处理糟糕的游戏</strong>
				</a>
				<a href="lists/detail/3" title="大数据创业，数据哪里来？需要跨过几道坎？">
					<span>2015/07/26</span>
					<strong>大数据创业，数据哪里来？需要跨过几道坎？</strong>
				</a>
				<a href="lists/detail/4" title="移动游戏行业现状 增加人气其实是场灾难">
					<span>2015/08/16</span>
					<strong>移动游戏行业现状 增加人气其实是场灾难</strong>
				</a>
				<a href="lists/detail/5" title="如何判定一款网游为“垃圾”？给你17个参考标准">
					<span>2015/08/16</span>
					<strong>如何判定一款网游为“垃圾”？给你17个参考标准</strong>
				</a>
			</div><!-- /.home_links -->
		</div><!-- /.home_list -->

		<div class="sns home_sns">
			<a class="sns_0" href="/">
				客服热线
				<div class="tips">
					<table>
						<tr>
							<td>客服热线：</td>
							<td>010-57622690</td>
						</tr>
						<tr>
							<td>工作时间：</td>
							<td>周一至周五<br />9:30-18:30</td>
						</tr>
					</table>					
				</div><!-- /.tips -->
			</a>
			<a class="sns_1" href="mailto:web@ezone.cn">客服邮箱</a>
			<a class="sns_2" href="/">
				官方微信
				<div class="tips">
					<img src="public/img/qr_code.jpg" alt="">					
				</div><!-- /.tips -->
			</a>
			<a class="sns_3" href="/">新浪微博</a>
		</div><!-- /.sns.home_sns -->

		<div class="right">
			<div class="right_top">
				<a href="/" class="more">查看更多</a>
				热门活动
			</div><!-- /.right_top -->

			<a href="http://lytl.ezone.cn" target="_blank" class="right_banner">
				<img src="public/img/event_2.jpg" alt="">
			</a><!-- /.right_banner -->

			<a href="product#fish" class="right_banner">
				<img src="public/img/004.jpg" alt="">
			</a><!-- /.right_banner -->
		</div><!-- /.right -->



	<!-- SlidesJS Required: Link to jquery.slides.js -->
	<script src="public/js/jquery.slides.min.js"></script>
	<script type="text/javascript">
	var oHomeBanner = $('#home_banner');
	oHomeBanner.slidesjs({
		width: oHomeBanner.width(),
		height: oHomeBanner.height(),
		play:{
			auto: true
		},
		navigation: {
			active: false
		},
		pagination: {
			effect: "slide"
		}
	});
	</script>
	<!-- End SlidesJS Required -->
<?php #require_once(dirname(__FILE__).'/'.'../public/right.php');?>
<?php require_once(dirname(__FILE__).'/'.'../public/footer.php');?>