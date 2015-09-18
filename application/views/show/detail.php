<?php require_once(dirname(__FILE__).'/'.'../public/header.php');?>

	<div class="player">
		<div class="player_wrap player_detail">
			<div class="player_title"></div>
			<div class="player_content">
				<div class="palyer_img fl">

					<?php 
					$aImage = json_decode(@$image, true);
					$aImage['src'] = json_decode($aImage['src'], true);
					if(isset($aImage['src']) && !empty($aImage['src'])):
						
					?>
					<div class="player_img_big fl">
						<img src="<?php echo $aImage['src'][$aImage['leader_img']];?>" alt="">
					</div>
					<ul id="player_img_small" class="player_img_small fr">
						<?php foreach ($aImage['src'] as $key => $value) :?>
						<li class="player_img_small_item">
							<img src="<?php echo $value;?>" alt="">
						</li>
						<?php endforeach;?>
					</ul>
					<?php endif;?>
				</div>
				<div class="palyer_base fr">
					<ul class="palyer_base_list">
						<li class="cur_rate_wrap">
							<span>当前票数：</span>
							<span class="cur_rate">0</span>
						</li>
						<li class="name_wrap">
							<span>姓名：</span>
							<span class="name"><?php echo @$user_name;?></span>
						</li>
						
						<li class="apply_time_wrap">
							<span>报名日期：</span>
							<span class="apply_time"><?php echo substr(@$create_time,0,10);?></span>
						</li>
						<li class="project_name_wrap">
							<span>参赛项目：</span>
							<span class="project_name"><?php echo @$competition_event;?></span>
						</li>
						<li class="age_wrap">
							<span>年龄：</span>
							<span class="age"><?php echo @$birth ? date('Y')-(int)substr(@$birth,0,4) : '-';?></span>
						</li>
						<li class="talent_wrap">
							<span>才艺：</span>
							<?php $aSkill = json_decode(@$skill);?>
							<span class="talent" style="width: 350px;"><?php echo isset($aSkill) ? implode('，', @$aSkill) : '';?></span>
						</li>
						<li class="height_wrap">
							<span>身高：</span>
							<span class="height"><?php echo @(int)$stature;?>cm</span>
						</li>
						<li class="weight_wrap">
							<span>体重：</span>
							<span class="weight"><?php echo @(int)$weight;?>kg</span>
						</li>
						<li class="interest_wrap">
							<span>爱好：</span>
							<?php $aHobby = json_decode(@$hobby);?>
							<span class="interest" style="width: 350px;"><?php echo isset($aHobby) ? implode('，', @$aHobby) : '';?></span>
						</li>
						<li class="selfintro_wrap">
							<span>自我介绍：</span>
							<span class="selfintro"><?php echo @$intro;?></span>
						</li>
						<li class="other_info_wrap">
							<span>其他信息：</span>
							<span class="other_info">无</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="player_wrap player_share">
			<div class="share_item share_text">
				我是<span class="share_name"><?php echo @$user_name;?></span>，我正在参与世界时尚小姐大赛，快来给我投票吧！
			</div>
			<a class="share_item find_him" href="javascript:lightbox('#coming_soon');"></a>
			<ul class="share_item share_sns">
				<!-- <li class="weixin"></li>
				<li class="weibo"></li>
				<li class="qzone"></li>
				<li class="renren"></li> -->
				<!-- JiaThis Button BEGIN -->
				<div class="jiathis_style_24x24">
					<a class="jiathis_button_weixin"></a>
					<a class="jiathis_button_tsina"></a>
					<a class="jiathis_button_qzone"></a>
					<a class="jiathis_button_renren"></a>
					<a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank">更多</a>
					<a class="jiathis_counter_style"></a>
				</div>
				<script type="text/javascript" src="http://v3.jiathis.com/code/jia.js?uid=" charset="utf-8"></script>
				<!-- JiaThis Button END -->
			</ul>
		</div>

		<?php /*
		<div class="comments_wrapper">
		<!-- UY BEGIN -->
		<div id="uyan_frame"></div>
		<script type="text/javascript" src="http://v2.uyan.cc/code/uyan.js"></script>
		<!-- UY END -->
		</div>
		*/?>

		<?php /*
		<script type="text/javascript">
		(function(){
		var url = "http://widget.weibo.com/distribution/comments.php?width=0&url=http%3A%2F%2Fopen.weibo.com%2Fwidget%2Fcomments.php&brandline=y&appkey=3599922694&dpc=1";
		document.write('<iframe id="WBCommentFrame" src="' + url + '" scrolling="no" frameborder="0" style="width:100%"></iframe>');
		})();
		</script>
		<script src="http://tjs.sjs.sinajs.cn/open/widget/js/widget/comment.js" type="text/javascript" charset="utf-8"></script>
		*/?>

		<div class="comments_wrapper">
			<!-- 多说评论框 start -->
			<div class="ds-thread" data-thread-key="<?php echo (int)$this->uri->segment(3);?>" data-title="<?php echo @$user_name;?>的信息" data-url="<?php echo '//'.$_SERVER['SERVER_NAME'].'/player/index/'.(int)$this->uri->segment(3);?>"></div>
			<!-- 多说评论框 end -->
			<!-- 多说公共JS代码 start (一个网页只需插入一次) -->
			<script type="text/javascript">
			var duoshuoQuery = {short_name:"sjxj"};
				(function() {
					var ds = document.createElement('script');
					ds.type = 'text/javascript';ds.async = true;
					ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
					ds.charset = 'UTF-8';
					(document.getElementsByTagName('head')[0] 
					 || document.getElementsByTagName('body')[0]).appendChild(ds);
				})();
				</script>
			<!-- 多说公共JS代码 end -->
		</div>

		<?php /*
		<div class="comments_wrapper">
			<div id="disqus_thread"></div>
			<script type="text/javascript">
			    //CONFIGURATION VARIABLES
			    var disqus_shortname = 'sjxj';
			    
			    //DON'T EDIT BELOW THIS LINE
			    (function() {
			        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
			        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
			        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
			    })();
			</script>
			<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
		</div><!-- /.comments_wrapper -->
		*/?>

		<?php /*
		<div class="player_wrap player_ipt">
			<div class="sayher">
				<div class="signup_enter">注册亿众通行证>></div>
			</div>
			<textarea class="player_textarea" id="player_textarea"></textarea>
			<div class="login_enter">
				<span>账号：</span>
				<input class="username" type="text">
				<span>密码：</span>
				<input class="userpwd" type="password">
				<input type="button" class="submit_comment" value="发表评论">
			</div>
		</div>
		<div class="player_wrap player_comment">
			<div class="comment_item">
				<div class="comment_title">
					<span class="comment_name">尼玛的春天</span>
					<span class="comment_time">发表于 2015-08-31 16:32</span>
					<span class="comment_ctrl comment_oppose">反对（180）</span>
					<span class="comment_ctrl comment_support">赞（58647）</span>
				</div>
				<div class="comment_content">
					此人就是牛逼
				</div>
			</div>
			<div class="comment_item">
				<div class="comment_title">
					<span class="comment_name">尼玛的春天</span>
					<span class="comment_time">发表于 2015-08-31 16:32</span>
					<span class="comment_ctrl comment_oppose">反对（180）</span>
					<span class="comment_ctrl comment_support">赞（58647）</span>
				</div>
				<div class="comment_content">
					此人就是牛逼</br>
					你说的没有错
				</div>
			</div>
		</div>
		<div class="player_wrap comment_page">
			<div class="page_main">
				<span class="page_ctrl first_page">首页</span>
				<span class="page_ctrl pre_page">上一页</span>
				<span class="page_num">5</span>
				<span class="page_num">6</span>
				<span class="page_num">7</span>
				<span class="page_num">8</span>
				<span class="page_num cur">9</span>
				<span class="page_num">10</span>
				<span class="page_num">11</span>
				<span class="page_num">12</span>
				<span class="page_num">13</span>
				<span class="page_ctrl next_page">上一页</span>
				<span class="page_ctrl last_page">首页</span>
				
			</div>
		</div>
		*/?>
	</div><!-- /.player -->
<?php require_once(dirname(__FILE__).'/'.'../public/footer.php');?>