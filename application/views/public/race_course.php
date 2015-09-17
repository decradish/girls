<?php 
$today = date('m-d');
?>
<div class="race_course">
	<h1>赛事进程</h1>
	<ul>
		<li class="course_0 <?php if($today <= '09-29'):?>current<?php endif;?>">
			<strong>赛事报名</strong>
			9月17日-9月29日
		</li>
		<li class="course_1 <?php if($today >= '09-30' && $today <= '10-29'):?>current<?php endif;?>">
			<strong>百强选拔赛</strong>
			9月30日-10月29日
		</li>
		<li class="course_2 <?php if($today >= '10-30' && $today <= '11-29'):?>current<?php endif;?>">
			<strong>30强选拔赛</strong>
			10月30日-11月29日
		</li>
		<li class="course_3 <?php if($today >= '11-30' && $today <= '12-10'):?>current<?php endif;?>">
			<strong>20强选拔赛</strong>
			12月10日
		</li>
		<li class="course_4 <?php if($today >= '12-11' && $today <= '12-17'):?>current<?php endif;?>">
			<strong>10强选拔赛</strong>
			12月17日
		</li>
		<li class="course_5 <?php if($today >= '12-18' && $today <= '12-26'):?>current<?php endif;?>">
			<strong>总决赛</strong>
			12月26日
		</li>
	</ul>
</div><!-- /.race_course -->