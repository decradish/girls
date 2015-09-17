<?php 
$now = date('Y-m-d h:i:s',time());
if($now < '2015-09-29 23:59:59'):
?>
<div id="girl_timer"></div>
<script type="text/javascript" src="/public/js/timer.js"></script>
<script>
	var timer  = new Counter({
		'panel':document.getElementById('girl_timer'),
		'timeS': [2015,9,8,17,6,0]
	});
</script>
<?php endif;?>