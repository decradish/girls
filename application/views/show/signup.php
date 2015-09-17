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

<div class="none">
	<div id="login22">
		
		<!--
		<input type="text" name="username" id="username"><br />
		<input type="password" name="password" id="password"><br />
		<input type="button" id="login_btn" value="登录">
		<a href="javascript:lightbox('#signup_ezone')">注册</a>
		-->

	</div><!-- /#login -->

	<div id="login" class="login_wrap">
		<div class="login">
			<div class="login_item">
				<label for="username">用户名：</label>
				<input class="login_ipt" type="text" name="username" id="username" />
			</div>
			<div class="login_item">
				<label for="pwd">密码：</label>
				<input class="login_ipt" type="password" name="password" id="password" />
			</div>
			<div class="login_item">
				<input type="checkbox" name="remember" id="remember" class="remember" />
				<label for="remember">记住密码</label>
				<a href="javascript:lightbox('#signup_ezone')" class="signupenter">注册亿众通行证</a>
			</div>
			<div class="login_item">
				<a href="javascript:void(0)" class="login_btn">登录</a>
			</div>
			<div class="login_warn">
				账号或密码错误，请重新输入！
			</div>
		</div>
	</div><!-- /.login_wrap -->

	<div id="signup_ezoneaaaaaa">
		<!--
		<input type="text" name="username_ezone" id="username_ezone"><br />
		<input type="password" name="password_ezone" id="password_ezone"><br />
		<input type="password" name="repassword_ezone" id="repassword_ezone"><br />
		<input type="text" name="realname_ezone" id="realname_ezone"><br />
		<input type="text" name="id_no_ezone" id="id_no_ezone"><br />
		<input type="text" name="phone_ezone" id="phone_ezone"><br />
		<input type="button" id="signup_ezone_btn" value="注册">
		-->
	</div><!-- /#signup_ezone -->

	<div id="signup_ezone" class="signup_wrap user_wrap">
		<div class="isignup">
			<div class="signup_item">
				<label for="username">用户名：</label>
				<input class="signup_ipt" type="text" maxlength='12' placeholder='3-12个字，支持中文、英文、数字!' name="username_ezone" id="username_ezone" />
			</div>
			<div class="signup_item">
				<label for="pwd">密码：</label>
				<input class="signup_ipt" type="password" placeholder='至少6位' name="password_ezone" id="password_ezone" />
			</div>
			<div class="signup_item">
				<label for="pwd">重复密码：</label>
				<input class="signup_ipt" type="password" name="repassword_ezone" id="repassword_ezone" />
			</div>
			<div class="signup_line"></div>
			<div class="signup_item">
				<label for="pwd">真实姓名：</label>
				<input class="signup_ipt" type="text" name="realname_ezone" id="realname_ezone" />
			</div>
			<div class="signup_item">
				<label for="pwd">身份证号码：</label>
				<input class="signup_ipt" type="text" name="id_no_ezone" id="id_no_ezone" />
			</div>
			<div class="signup_item">
				<label for="pwd">手机号：</label>
				<input class="signup_ipt" type="text" name="phone_ezone" id="phone_ezone" />
			</div>
			<div class="signup_line"></div>
			<div class="signup_item">
				<input type="checkbox" name="" id="read" class="read" />
				<label for="remember" class="read_label">阅读并接受《亿众时代协议》</label>
			</div>
			<div class="signup_item">
				<a href="javascript:void(0)" id="signup_ezone_btn" class="signup_btn">提交</a>
				<a href="javascript:void(0)" class="signup_cancel_btn">取消</a>
			</div>
			<div class="signup_warn">
			</div>
		</div>	
	</div><!-- /#signup_ezone -->
</div><!-- /.none -->

<script type="text/javascript">
function lightbox(target){
	$.fancybox.close()
	$.fancybox({
		href: target
	})
}
$(function(){
	<?php if(isset($login) && $login === false):?>
	lightbox('#login')
	<?php endif;?>

	$('#login_btn').click(function(event) {
		$.ajax({
			url: '/login/',
			type: 'post',
			data: {
				username: $('#username').val(),
				password: $('#password').val()
			},
			dataType: 'json',
			success: function(data){
				// console.log(data)
				var data = eval('(' + data + ')')
				if(data.code && data.code == 1){
					$.fancybox.close();
					alert('登录成功')
				}else{
					alert('用户名或密码错误，请重试')
				}
			},
			error: function(data){
				// console.log('error: ', data)
			}
		})
	})

	$('#signup_ezone_btn').click(function(event) {
		
	})
})
</script>

	<?php require_once(dirname(__FILE__).'/'.'../public/race_course.php');?>

	<div id="signup" class="signup">
		<form action="" method="post" onsubmit="return oSignup.check();">
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
		<ul id="photos" class="photos">
			<div class="msg"></div>

			<?php 
			$aImage = json_decode(@$image, true);
			$aImage['src'] = json_decode($aImage['src'], true);
			if(isset($aImage['src']) && !empty($aImage['src'])):
				foreach ($aImage['src'] as $key => $value) :
			?>
				<li>
					<img src="<?php echo $value;?>" class="show" alt="">
					<input type="file" name="image" id="img_<?php echo $key;?>">
					<input type="hidden" name="image_src[]" id="img_src_<?php echo $key;?>" value="<?php echo $value;?>">
					<div class="photo_btns">
						<input type="button" value="设为首图" class="btn to_leader">
						<a href="javascript:void(0);" class="btn reupload">
							重新上传
							<input type="file" name="image" id="reupload_<?php echo $key;?>">
						</a>
					</div><!-- /.photo_btns -->
				</li>
			<?php
				endforeach;
			else:
			?>
			<li>
				<img src="" alt="">
				<input type="file" name="image" id="img_0">
				<input type="hidden" name="image_src[]" id="img_src_0">
				<div class="photo_btns">
					<input type="button" value="设为首图" class="btn to_leader">
					<a href="javascript:void(0);" class="btn reupload">
						重新上传
						<input type="file" name="image" id="reupload_0">
					</a>
				</div><!-- /.photo_btns -->
			</li>
			<li>
				<img src="" alt="">
				<input type="file" name="image" id="img_1">
				<input type="hidden" name="image_src[]" id="img_src_1">
				<div class="photo_btns">
					<input type="button" value="设为首图" class="btn to_leader">
					<a href="javascript:void(0);" class="btn reupload">
						重新上传
						<input type="file" name="image" id="reupload_1">
					</a>
				</div><!-- /.photo_btns -->
			</li>
			<li>
				<img src="" alt="">
				<input type="file" name="image" id="img_2">
				<input type="hidden" name="image_src[]" id="img_src_2">
				<div class="photo_btns">
					<input type="button" value="设为首图" class="btn to_leader">
					<a href="javascript:void(0);" class="btn reupload">
						重新上传
						<input type="file" name="image" id="reupload_2">
					</a>
				</div><!-- /.photo_btns -->
			</li>
			<li>
				<img src="" alt="">
				<input type="file" name="image" id="img_3">
				<input type="hidden" name="image_src[]" id="img_src_3">
				<div class="photo_btns">
					<input type="button" value="设为首图" class="btn to_leader">
					<a href="javascript:void(0);" class="btn reupload">
						重新上传
						<input type="file" name="image" id="reupload_3">
					</a>
				</div><!-- /.photo_btns -->
			</li>
			<li>
				<img src="" alt="">
				<input type="file" name="image" id="img_4">
				<input type="hidden" name="image_src[]" id="img_src_4">
				<div class="photo_btns">
					<input type="button" value="设为首图" class="btn to_leader">
					<a href="javascript:void(0);" class="btn reupload">
						重新上传
						<input type="file" name="image" id="reupload_4">
					</a>
				</div><!-- /.photo_btns -->
			</li>
			<?php
			endif;
			?>
			<input type="hidden" name="leader_img" id="leader_img" value="0">
		</ul><!-- /.photos -->

		<div class="info">温馨提示：上传照片格式可以是 jpg / gif / jpeg / png；上传照片每张不超过1M</div>

		<div class="msg"></div>
		<label class="portrait_authority_label" for="portrait_authority">
			<input type="checkbox" name="portrait_authority" id="portrait_authority">
			<a target="_blank" href="/public/选手肖像权授权书.docx">同意肖像授权</a>
		</label>

		<div class="info">
			填表说明：<br />
			1、以上必填项均须填写，不可遗漏。<br />
			2、本人确认：以上内容属实并准确无误，如大赛组委会查证内容与事实不符，大赛组委会有取消选手资格，并无异议。<br />
			3、联系方式如有改变，请注意与组委会及时更新。
		</div><!-- /.info -->

		<div class="btn_wrapper">
			<?php if(!isset($signuped)):?>
			<input name="add_btn" type="submit" value="提交">
			<?php else:?>
			<input name="edit_btn" type="submit" value="修改" class="btn_edit">
			<?php endif;?>
			<a href="/" class="btn_cancel">取消</a>
		</div><!-- /.btn_wrapper -->
		</form>
	</div><!-- /.signup -->

	<?php /*
	<form action="/signup/upload_img/" method="post" enctype="multipart/form-data">
		<input type="file" name="image" id="image">
		<input id="spanButtonPlaceHolder" type="submit" value="上传">
	</form>
	*/?>

	<script type="text/javascript" src="/public/js/ajaxfileupload.js"></script>
	<script type="text/javascript" src="/public/js/jquery.Jcrop.min.js"></script>
	<script type="text/javascript">
	var oPhotos = $('#photos'),
		oNewImg = oPhotos.find('img'),
		iImgIdx = 0,
		oNewImgFile = oPhotos.find('li > input:file'),
		oReupload = oPhotos.find('.reupload input:file'),
		o2Leader = oPhotos.find('.to_leader')

	oNewImgFile.change(function(event) {
		upload_img(this)
	})
	oReupload.change(function(event) {
		upload_img(this)
	})
	o2Leader.click(function(event) {
		var oThis = $(this),
			iIdx = oThis.parents("li:first").index()
		$('#leader_img').val(iIdx)
	})

	function upload_img(obj){
		var oThis = $(obj)
		iImgIdx = oThis.parents('li:first').index()-1

		$.ajaxFileUpload({
			url: '/signup/upload_img/',
			secureuri: false,
			fileElementId: oThis.attr('id'),
			dataType: 'json',
			success: function(data, status){
				// console.log(data)

				lightbox('#jcrop_lg')

		        if (jcrop_api) {
		            jcrop_api.destroy();
		        }
				$('#preview1').attr('src', data.url).show()
				$("#target")
					.attr('src', data.url).show()
					.Jcrop( {
					    setSelect : [ 0, 0, 353, 471 ],
					    onChange : updatePreview,
					    onSelect : updatePreview,
					    onSelect : updateCoords,
					    aspectRatio : 353/471
					}, function() {
					    var bounds = this.getBounds();
					    boundx = bounds[0];
					    boundy = bounds[1];
					    jcrop_api = this;
					    // $(".jcrop-holder").css('margin-top', (304 - boundy)/2);
					    updatePreview(jcrop_api.tellSelect());
					    updateCoords(jcrop_api.tellSelect());
					    isUploaded = true;
					});
			},
			error: function(data, status, e){
				// console.log('error: ', data+', '+status+', '+e)
				alert('上传失败，请重试')
			}
		})
	}

	function resize_img(){
		var oData = {
			x: $('#x').val(),
			y: $('#y').val(),
			w: $('#w').val(),
			h: $('#h').val(),
			img: $('#target').attr('src')
		}
		// console.log(oData)

		$.ajax({
			url: '/signup/resize_img/',
			type: 'post',
			data: oData,
			dataType: 'json',
			success: function(data){
				// console.log(data)
				if(data.status == true){
					$.fancybox.close()

					oNewImg.eq(iImgIdx)
						.addClass('show')
						.attr('src', oData.img+'?type=new')
						.nextAll('input[type="hidden"]').val(oData.img)
				}else{
					alert('提交失败，请重试')
				}
			},
			error: function(data){
				// console.log('error: ', data)
				alert('提交失败，请重试')
			}
		})
	}
	</script>

<div class="none">
	<div id="jcrop_lg" class="jcrop_lg">
		<div id="img_preview">
			<div id="target_wrapper">
				<img id="target" src="" alt="">
			</div><!-- /#target_wrapper -->

			<div id="img_preview_158_211">
                <div class="font">预览</div>
                <div class="preview_img_div">
                	<div>
		                <img id="preview1" src="">
                	</div>
                </div>
            </div>
		</div><!-- /#img_preview -->

		<div class="clearfix"></div>

		<div class="btn_wrapper">
			<input type="hidden" name="x" id="x">
			<input type="hidden" name="y" id="y">
			<input type="hidden" name="w" id="w">
			<input type="hidden" name="h" id="h">

			<a id="resie_img_btn" class="add_btn" href="javascript:resize_img();">提交</a>
			<a class="btn_cancel" href="javascript:$.fancybox.close();">取消</a>
		</div><!-- /.btn_wrapper -->
	</div><!-- /#jcrop_lg -->
</div><!-- /.none -->
		
	<script type="text/javascript">

		function updateCoords(c) {
		    $('#x').val(c.x);
		    $('#y').val(c.y);
		    $('#w').val(c.w);
		    $('#h').val(c.h);
		}
		function checkCoords() {
		    if (parseInt($('#w').val()))
		        return true;
		    alert('Please select a crop region then press submit.');
		    return false;
		}
		function updatePreview(c) {
		    var rx = 158 / c.w;
		    var ry = 211 / c.h;
		    $('#preview1').css( {
		        width : Math.round(rx * boundx) + 'px',
		        height : Math.round(ry * boundy) + 'px',
		        marginLeft : '-' + Math.round(rx * c.x) + 'px',
		        marginTop : '-' + Math.round(ry * c.y) + 'px'
		    })
		};
	</script>

	<script type="text/javascript" src="/public/js/howe.js"></script>
	<script type="text/javascript" src="/public/js/signup.js"></script>
<?php require_once(dirname(__FILE__).'/'.'../public/footer.php');?>