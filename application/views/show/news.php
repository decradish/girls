<?php require_once(dirname(__FILE__).'/'.'../public/header.php');?>

<?php if(isset($news) && !empty($news)):?>
<div class="news">
	<?php foreach ($news as $key => $value) :?>
	<a href="/news/detail/<?php echo $value['id'];?>">
		<span><?php echo date('Y-m-d', strtotime($value['create_time']));?></span>
		<?php echo $value['title'];?>
	</a>
	<?php endforeach;?>
</div><!-- /.news -->
<?php endif;?>

<?php if(isset($post) && !empty($post)):?>
<article>
	<h1>
		<?php echo $post['title'];?>
		<span><?php echo date('Y-m-d', strtotime($post['create_time']));?></span>
	</h1>

	<div class="article_content">
		<?php echo $post['content'];?>
	</div><!-- /.article_content -->
</article>
<?php endif;?>

<?php require_once(dirname(__FILE__).'/'.'../public/footer.php');?>