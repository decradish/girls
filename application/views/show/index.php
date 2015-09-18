<?php require_once(dirname(__FILE__).'/'.'../public/header.php');?>


	<div class="race_news display-flexbox">
		<!-- <img src="/public/img/index/news_img.png"/> -->
		<div id="banner" class="banner">
			<a href="http://sjxj.ezone.cn/news/detail/51" target="_blank">
				<img src="/public/img/banner_0.jpg" alt="">
			</a>
			<a href="http://sjxj.ezone.cn/news/detail/50" target="_blank">
				<img src="/public/img/banner_1.jpg" alt="">
			</a>
		</div><!-- /#banner.banner -->
		<div class="flexbox-children race_news_text">
			<div class="race_news_top">
				<div class="news_title">NEWS</div>
				<?php if(isset($news[0]) && !empty($news[0])):?>
				<div class="news_sub_title"><a href="news/detail/<?php echo $news[0]['id'];?>" target="_blank" title="<?php echo $news[0]['title'];?>" style="color:red"><?php echo $news[0]['title'];?></a></div>
				<div class="race_news_content">
				<?php echo strip_tags($news[0]['content']);?>
				</div>
				<?php else:?>
				<div class="news_sub_title">世界时尚小姐京津翼赛区 报名9月17日即将开启</div>
				<div class="race_news_content">
				世界时尚小姐京津翼赛区 报名9月17日即将开启
				</div>
				<?php endif;?>
			</div>
			<div class="race_news_border"></div>
			<div class="race_news_bottom display-flexbox">
				<div class="flexbox-children">
					<?php if(isset($news[1]) && !empty($news[1])):?>
					<div class="news_title"><a href="news/detail/<?php echo $news[1]['id'];?>" target="_blank" title="<?php echo $news[1]['title'];?>" style="font-size:20px;color:#ffacdd"><?php echo $news[1]['title'];?></a></div>
					<div class="race_news_content">
					<?php echo strip_tags($news[1]['content']);?>~
					</div>
					<?php else:?>
					<div class="news_title">世界时尚小姐大赛开始了</div>
					<div class="race_news_content">
					世界时尚小姐大赛由2015年9月17日正式开始！美女们都来报名吧~
					</div>
					<?php endif;?>
				</div>
				
				<div  class="news_button">
					<a target="_blank" href="/signup/" class="news_bao">报名入口</a>
					<a href="javascript:lightbox('#coming_soon');" class="news_game">游戏入口</a>
					<div class="news_fish"></div>


				</div>

			</div>

		</div>
	</div><!-- /.news -->

	<?php require_once(dirname(__FILE__).'/'.'../public/race_course.php');?>
	<?php require_once(dirname(__FILE__).'/'.'../public/girl_timer.php');?>

	<div class="race_reward">
		<!-- <div class="index_title">赛事奖励</div> -->
	</div>

	<?php if(isset($girls) && !empty($girls)):?>
		<?php foreach ($girls as $key => $value) :?>
		<div class="race_girls">
			<div class="title"><?php echo $goddess[$key];?><a target="_blank" href="/player/?search_item=competition_event&girl_search_val=<?php echo $goddess[$key];?>">MORE >></a></div>

			<div class="girl_list">
				<?php if(isset($girls)&&!empty($girls)):?>
					<?php foreach ($value as $girl_key => $girl_value) :?>
						<?php #var_dump($value);?>
					<a target="_blank" href="/player/index/<?php echo $girl_value['ezone_id'];?>">
						<?php 
						$aImage = json_decode(@$girl_value['image'], true);
						$aImage['src'] = json_decode($aImage['src'], true);
						if(isset($aImage['src']) && !empty($aImage['src'])):
						?>
							<img src="<?php echo $aImage['src'][$aImage['leader_img']];?>"/>
						<?php endif;?>
						<div class="girl_info">
							<span>姓名：</span>
							<p><?php echo $girl_value['user_name'];?></p><br />

							<span>年龄：</span>
							<p><?php echo $girl_value['birth'] ? date('Y')-(int)substr($girl_value['birth'],0,4) : '-';?></p><br />

							<span>身高：</span>
							<p><?php echo $girl_value['stature'];?>CM</p><br />

							<span>三围：</span>
							<p><?php echo $girl_value['bust'];?>-<?php echo $girl_value['waistline'];?>-<?php echo $girl_value['hipline'];?></p><br />

							<span>职业：</span>
							<p><?php echo $girl_value['occupation'];?></p><br />

							<span class="girl_info_game_name">参赛项目：</span>
							<p class="girl_info_game_name"><?php echo $goddess[$key];?></p>
						</div><!-- /.girl_info -->
					</a>
					<?php endforeach;?>
				<?php endif;?>
			</div><!-- /div.girl_list -->
		</div><!-- /.race_girls -->
		<?php endforeach;?>
	<?php endif;?>

	<!--
	<div class="race_com">
		<div class="race_com_title">合作伙伴</div>
		<div class="display-flexbox">
			<div class="race_com_add flexbox-children"></div>
			<div class="race_com_add flexbox-children"></div>
			<div class="race_com_add flexbox-children"></div>

		</div>
	</div>
	-->

<script type="text/javascript" src="/public/js/jquery.slides.min.js"></script>
<script type="text/javascript">
var oBanner = $('#banner')
oBanner.slidesjs({
	width: oBanner.width(),
	height: oBanner.height(),
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

<?php require_once(dirname(__FILE__).'/'.'../public/footer.php');?>