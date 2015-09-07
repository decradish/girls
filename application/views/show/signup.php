<?php require_once(dirname(__FILE__).'/'.'../public/header.php');?>

<?php $oriCitis   = json_decode(CITIS, true);?>
<?php $oriHobby   = json_decode(HOBBY, true);?>
<?php $oriSkill   = json_decode(SKILL, true);?>
<?php $oriGoddess = json_decode(GODDESS, true);?>

<?php 
/*
$oriSkill = array(
	0 => array(
		0 => '演唱',
		1 => array('通俗','美声','戏曲','其他演唱')
	),
	1 => array(
		0 => '舞蹈',
		1 => array('现代','民族','古典','芭蕾','街舞','其他舞蹈')
	),
	2 => array(
		0 => '表演',
		1 => array('主持','小品','相声','电影','电视','哑剧','其他表演')
	),
	3 => array(
		0 => '乐器',
		1 => array('钢琴','吉他','笛类','提琴','鼓类','号类','萨克斯','口琴','琵琶','柳琴','古筝','扬琴','二胡','唢呐','马头琴','手风琴','其他乐器')
	),
	4 => array(
		0 => '艺术',
		1 => array('T台','书法','绘画','插花','服装设计','化妆造型','手工艺','其他艺术')
	)
);
*/

?>

	<div class="race_course">
		<h1>赛事进程</h1>
		<ul>
			<li class="course_0 current">
				<strong>赛事报名</strong>
				9月10日-9月29日
			</li>
			<li class="course_1">
				<strong>百强选拔赛</strong>
				9月30日-10月29日
			</li>
			<li class="course_2">
				<strong>30强选拔赛</strong>
				10月30日-11月29日
			</li>
			<li class="course_3">
				<strong>20强选拔赛</strong>
				12月10日
			</li>
			<li class="course_4">
				<strong>10强选拔赛</strong>
				12月17日
			</li>
			<li class="course_5">
				<strong>总决赛</strong>
				12月26日
			</li>
		</ul>
	</div><!-- /.race_course -->

	<div id="signup" class="signup">
		<form action="" method="post" target="_blank" onsubmit="return oSignup.check();">
		<h1>世界时尚小姐在线报名</h1>

		<div class="msg">
			<?php echo @$msg;?>
		</div>

		<h2>基本资料 (必填项)</h2>
		<div class="signup_box">
			<div class="msg"></div>

			姓名：
			<input type="text" name="user_name" id="user_name" class="user_name" placeholder="姓名" value="<?php echo @$user_name;?>">

			籍贯：
			<select name="native_place" id="native_place" class="native_place" placeholder="籍贯">
				<option value="">选择省市</option>
				<?php foreach ($oriCitis as $key => $value) :?>
				<option <?php if($value == @$native_place):?>selected="selected"<?php endif;?> value="<?php echo $value;?>"><?php echo $value;?></option>
				<?php endforeach;?>
			</select>

			<?php
			$aBirth = explode('-', @$birth);
			?>
			出生日期：
			<select data-year="<?php echo @$aBirth[0];?>" placeholder="出生日期" name="birth_year" id="birth_year" onchange="oBirth.setDays(this,birth_month,birth_day);"></select>
			<select data-month="<?php echo @$aBirth[1];?>" placeholder="出生日期" name="birth_month" id="birth_month" onchange="oBirth.setDays(birth_year,this,birth_day);"></select>
			<select data-day="<?php echo @$aBirth[2];?>" placeholder="出生日期" name="birth_day" id="birth_day" class="birth_day"></select>

			身份证:
			<input type="text" name="id_code" id="id_code" class="id_code" maxlength="18" placeholder="身份证" value="<?php echo @$id_code;?>"><br />

			民族：
			<input type="text" name="nationality" id="nationality" class="nationality" placeholder="民族" value="<?php echo @$nationality;?>">

			职业：
			<input type="text" name="occupation" id="occupation" class="occupation" placeholder="职业" value="<?php echo @$occupation;?>">

			所在城市：
			<select name="city" id="city" class="city" placeholder="所在城市">
				<option value="">选择省市</option>
				<?php foreach ($oriCitis as $key => $value) :?>
				<option <?php if($value == @$city):?>selected="selected"<?php endif;?> value="<?php echo $value;?>"><?php echo $value;?></option>
				<?php endforeach;?>
			</select>

			E-MAIL:
			<input type="text" name="email" id="email" class="email" placeholder="E-MAIL" value="<?php echo @$email;?>"><br />

			手机号码：
			<input type="text" name="phone" id="phone" class="phone" maxlength="11" placeholder="手机号码" value="<?php echo @$phone;?>">

			学历：
			<input type="text" name="education" id="education" class="education" placeholder="学历" value="<?php echo @$education;?>">

			游戏账号：
			<input type="text" name="game_account" id="game_account" class="game_account" placeholder="游戏账号" value="<?php echo @$game_account;?>">

			参赛项目：
			<select name="competition_event" id="competition_event" placeholder="参赛项目">
				<option selected value="">选择项目</option>
				<?php foreach ($oriGoddess as $key => $value) :?>
				<option <?php if($value == @$competition_event):?>selected="selected"<?php endif;?> value="<?php echo $value;?>"><?php echo $value;?></option>
				<?php endforeach;?>
			</select>
			<br />

			自我介绍(*限100字)：<br />
			<textarea name="intro" id="intro" class="intro" placeholder="自我介绍"><?php echo @$intro;?></textarea>
		</div><!-- /.signup_box -->

		<h2>身体条件 (必填项)</h2>
		<div class="signup_box signup_box_body">
			<div class="msg"></div>

			身高：
			<input type="text" maxlength="3" name="stature" id="stature" class="stature" placeholder="身高" value="<?php echo @$stature;?>"> CM&nbsp;&nbsp;&nbsp;&nbsp;

			体重：
			<input type="text" maxlength="3" name="weight" id="weight" class="weight" placeholder="体重" value="<?php echo @$weight;?>"> KG&nbsp;&nbsp;&nbsp;&nbsp;

			鞋码：
			<input type="text" maxlength="3" name="shoe_size" id="shoe_size" class="shoe_size" placeholder="鞋码" value="<?php echo @$shoe_size;?>"> 码<br />

			胸围：
			<input type="text" maxlength="3" name="bust" id="bust" class="bust" placeholder="胸围" value="<?php echo @$bust;?>"> CM&nbsp;&nbsp;&nbsp;&nbsp;

			腰围：
			<input type="text" maxlength="3" name="waistline" id="waistline" class="waistline" placeholder="腰围" value="<?php echo @$waistline;?>"> CM&nbsp;&nbsp;&nbsp;&nbsp;

			臀围：
			<input type="text" maxlength="3" name="hipline" id="hipline" class="hipline" placeholder="臀围" value="<?php echo @$hipline;?>"> CM
		</div><!-- /.signup_box -->

		<h2>兴趣爱好(必填一项)</h2>
		<div class="signup_box signup_box_hobby">
			<div class="msg"></div>
			<?php $hobby = json_decode(@$hobby, true);?>
			<?php foreach ($oriHobby as $key => $value) :?>
			<label for="hobby_<?php echo $key;?>">
				<input <?php if(!empty($hobby) && in_array($value, $hobby)):?>checked="checked"<?php endif;?> type="checkbox" name="hobby[]" id="hobby_<?php echo $key;?>" value="<?php echo $value;?>">
				<?php echo $value;?>
			</label>
				<?php if(($key+1)%10 == 0):?><br /><?php endif;?>
			<?php endforeach;?>
		</div><!-- /.signup_box -->

		<h2>具备才艺(必填一项)</h2>
		<div class="signup_box">
			<div class="msg"></div>

			<table class="skill_tb">
				<?php 
				$skill = json_decode(@$skill, true);
				$skill_count = 0;
				foreach ($oriSkill as $key => $value) :?>
				<tr>
					<td><?php echo $value[0];?> －</td>
					<td>
					<?php foreach ($value[1] as $key_son => $value_son) :?>
						<label for="skill_<?php echo $skill_count;?>">
							<input <?php if(!empty($skill) && in_array($value_son, $skill)):?>checked="checked"<?php endif;?> type="checkbox" name="skill[]" id="skill_<?php echo $skill_count;?>" value="<?php echo $value_son;?>">
							<?php echo $value_son;?>
						</label>
						<?php $skill_count ++;?>
					<?php endforeach;?>
					</td>
				</tr>
				<?php endforeach;?>
			</table><!-- /.skill_tb -->
		</div><!-- /.signup_box -->

		<h2>上传照片 (5张必传)</h2>
		<ul class="photos">
			<div class="msg"></div>

			<li>
				<img class="show" src="/public/img/photo.jpg" alt="">
				<div class="photo_btns">
					<input type="button" value="设为首图" class="btn">
					<input type="button" value="重新上传" class="btn">
				</div><!-- /.photo_btns -->
			</li>
			<li>
				<img src="/public/img/photo.jpg" alt="">
				<div class="photo_btns">
					<input type="button" value="设为首图" class="btn">
					<input type="button" value="重新上传" class="btn">
				</div><!-- /.photo_btns -->
			</li>
			<li>
				<img src="/public/img/photo.jpg" alt="">
				<div class="photo_btns">
					<input type="button" value="设为首图" class="btn">
					<input type="button" value="重新上传" class="btn">
				</div><!-- /.photo_btns -->
			</li>
			<li>
				<img src="/public/img/photo.jpg" alt="">
				<div class="photo_btns">
					<input type="button" value="设为首图" class="btn">
					<input type="button" value="重新上传" class="btn">
				</div><!-- /.photo_btns -->
			</li>
			<li>
				<img src="/public/img/photo.jpg" alt="">
				<div class="photo_btns">
					<input type="button" value="设为首图" class="btn">
					<input type="button" value="重新上传" class="btn">
				</div><!-- /.photo_btns -->
			</li>
		</ul><!-- /.photos -->

		<div class="info">温馨提示：上传照片格式可以是 jpg / gif / jpeg / png；上传照片每张不超过1M</div>

		<div class="info">
			填表说明：<br />
			1、以上必填项均须填写，不可遗漏。<br />
			2、本人确认：以上内容属实并准确无误，如大赛组委会查证内容与事实不符，大赛组委会有取消选手资格，并无异议。<br />
			3、联系方式如有改变，请注意与组委会及时更新。
		</div><!-- /.info -->

		<div class="btn_wrapper">
			<input name="add_btn" type="submit" value="提交">
			<input name="edit_btn" type="button" value="修改" class="btn_edit">
			<a href="/" class="btn_cancel">取消</a>
		</div><!-- /.btn_wrapper -->
		</form>
	</div><!-- /.signup -->

<?php require_once(dirname(__FILE__).'/'.'../public/footer.php');?>