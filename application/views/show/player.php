<?php require_once(dirname(__FILE__).'/'.'../public/header.php');?>


	<?php require_once(dirname(__FILE__).'/'.'../public/girl_timer.php');?>

	<form accept="/player/" method="get">
	<div id="girl_search_box" class="girl_search_box display-flexbox">
		<div class="girl_search_sel">按照<span class="search_item_text"></span>进行搜索</div>
		<ul class="girlz_search_list">
			<li data-item="competition_event">参赛项目</li>
			<li data-item="user_name">选手姓名</li>
			<!--
			<li data-item="game_account">游戏账号</li>
			<li data-item="city">所在城市</li>
			<li data-item="education">学历</li>
			<li data-item="hobby">兴趣爱好</li>
			<li data-item="skill">具备才艺</li>
			-->
		</ul><!-- /.girlz_search_list -->
		<input type="hidden" name="search_item" id="search_item" class="search_item" value="<?php echo isset($_GET['search_item']) ? $_GET['search_item'] : 'ezone_id';?>" />

		<input type="text" value="<?php echo isset($_GET['girl_search_val']) ? $_GET['girl_search_val'] : '';?>" name="girl_search_val" id="girl_search_val" class="girl_search_val flexbox-children">
		<!-- <div class="girl_search_button">搜索</div> -->
		<input type="submit" value="搜索" id="girl_search_button" class="girl_search_button" />
	</div>
	</form>

	<div class="girl_list search_girl_list">
		<?php if(isset($girls)&&!empty($girls)):?>
			<?php foreach ($girls as $key => $value) :?>
			<a target="_blank" href="/player/index/<?php echo $value['ezone_id'];?>">
			<?php 
			$aImage = json_decode(@$value['image'], true);
			$aImage['src'] = json_decode($aImage['src'], true);
			if(isset($aImage['src']) && !empty($aImage['src'])):
			?>
				<img src="<?php echo $aImage['src'][$aImage['leader_img']];?>"/>
			<?php endif;?>
				<div class="girl_info">
					<span>姓名：</span>
					<p><?php echo $value['user_name'];?></p><br />

					
					<span style="float:left">宣言：</span>
					<p><?php echo $value['intro'];?></p>
				</div><!-- /.girl_info -->
			</a>
			<?php endforeach;?>
		<?php endif;?>
	</div><!-- /div.girl_list -->

<script type="text/javascript">
$(function(){
	var oSearch = $('#girl_search_box'),
		oSchItem = oSearch.find('.girl_search_sel'),
		oSchItemList = oSearch.find('ul.girlz_search_list'),
		oSchText = $('.search_item_text'),
		oSchInput = $('#search_item')

	oSchItem.click(function(){
		var oThis = $(this)

		oThis.toggleClass('up')
		oSchItemList.toggle()
	})

	console.log('li[data-item="'+oSchInput.val()+'"]')
	oSchText.html(oSchItemList.find('li[data-item="'+oSchInput.val()+'"]').text())
	
	oSchItemList.find('li').click(function(){
		var oThis = $(this)

		oSchInput.val(oThis.data('item'))
		oSchText.html(oThis.text())
		oSchItem.toggleClass('up')
		oSchItemList.toggle()

	})

})
</script>

<?php require_once(dirname(__FILE__).'/'.'../public/footer.php');?>