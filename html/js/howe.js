var jcrop_api, boundx, boundy;
var cutimg = {
	uploadSuccess: function (file, data) {
	    try {
	        $("#img_upload_schedule").hide();
	        // if (jcrop_api) {
	        //     jcrop_api.destroy();
	        // }

	        // var rs = eval('(' + data + ')');
	        // if (rs.code == 1) {
	            // var url = rs.imgurl + '?_=' + Math.random();
	            var url = 'https://ss3.baidu.com/9fo3dSag_xI4khGko9WTAnF6hhy/super/whfpf%3D425%2C260%2C50/sign=4b62dd6a273fb80e0c84329750ec1b1c/503d269759ee3d6d1f70569045166d224f4ade33.jpg';
	            $('#preview2').attr('src', url).show();
	            $('#preview1').attr('src', url).show();
	            $("#img_preview_125").show();
	            $("#img_preview_96").show();
	            $("#target").parent().css('background', '#FFF');
	            $("#target").attr('src', url).show().Jcrop( {
	                setSelect : [ 0, 0, 125, 125 ],
	                onChange : updatePreview,
	                onSelect : updatePreview,
	                onSelect : updateCoords,
	                aspectRatio : 1
	            }, function() {
	                var bounds = this.getBounds();
	                boundx = bounds[0];
	                boundy = bounds[1];
	                jcrop_api = this;
	                $(".jcrop-holder").css('margin-top', (304 - boundy)/2);
	                updatePreview(jcrop_api.tellSelect());
	                updateCoords(jcrop_api.tellSelect());
	                isUploaded = true;
	            });
	        // }
	    } catch (ex) {
	        // this.debug(ex);
	    }
	}
};
var login = {
	login: function () {
		var username = $('#username').val();
		var pwd = $('#pwd').val();
		var pewcheck = $("#remember").is(':checked');
		if(username == '' || pwd == ''){
			login.showLoginErr();
		}else{
			dologin(function (res) {
				if(res && res.code == '1'){
					//登录成功
					//是否记住密码
					if(pewcheck){
						mycookie.setCookie("password",pwd,24,"/");
					}else{
						mycookie.deleteCookie("password","/");
					}
				}else{
					login.showLoginErr();
				}
			})
		}
	},
	showLoginErr: function () {
		$('.login_warn').show();
		setTimeout(function () {
			$('.login_warn').hide();
		},1000)
	},
	hideLoginErr: function () {
		$('.login_warn').hide();
	},
	showSignupErr: function (message) {
		$('.signup_warn').html('').html(message).show();
		setTimeout(function () {
			$('.signup_warn').hide();
		},1000)
	},
	signup: function () {
		var signObj = $('.isignup');
		var usernameObj = signObj.find('#username'),
			username = usernameObj.val(),
			usernameOk = false,
			pwdObj = signObj.find('#pwd'),
			pwd = pwdObj.val(),
			pwdOk = false,
			confirmPwdObj = signObj.find('#pwdcheck'),
			confirmPwd = confirmPwdObj.val(),
			confirmPwdOk = false,
			realnameObj = signObj.find('#realname'),
			realname = realnameObj.val(),
			realnameOk = false,
			identityObj = signObj.find('#identity'),
			identity = identityObj.val(),
			identityOk = false,
			phoneObj = signObj.find('#phone'),
			phone = phoneObj.val(),
			phoneOk = false,
			readObj = signObj.find('#read'),
			read = readObj.is(':checked'),
			readOk = false;
		if(username && username != ''){
			if(!username.match(/^[a-zA-z0-9\u4e00-\u9fa5]{3,12}$/)){
				login.showSignupErr('3-12个字，支持中文、英文、数字!');
				usernameObj.focus();
				return;
			}else{
				usernameOk = true
			}
		}else{
			login.showSignupErr('用户名不能为空!');
			usernameObj.focus();
			return;
		}
		if(pwd && pwd != ''){
			if(pwd.length < 6){
				login.showSignupErr('密码至少6位!');
				pwdObj.focus();
				return;
			}else{
				pwdOk = true;
			}
		}else{
			login.showSignupErr('密码不能为空!');
			pwdObj.focus();
			return;
		}
		if(confirmPwd && confirmPwd != ''){
			if(confirmPwd != pwd){
				login.showSignupErr('确认密码与密码不一致!');
				confirmPwdObj.focus();
				return;
			}else{
				confirmPwdOk = true;
			}
		}else{
			login.showSignupErr('确认密码不能为空!');
			confirmPwdObj.focus();
			return;
		}
		if(realname && realname != ''){
			realnameOk = true
		}else{
			login.showSignupErr('真实姓名不能为空!');
			realnameObj.focus();
			return;
		}
		if(identity && identity !=''){
			if(!identity.match(/(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x)$)/)){
				login.showSignupErr('身份证号码格式不正确!');
				identityObj.focus();
				return;
			}else{
				identityOk = true
			}
		}else{
			login.showSignupErr('身份证号码不能为空!');
			identityObj.focus();
			return;
		}
		if(phone && phone != ''){
			if(!phone.match(/^([+]86)?[1][3-8][\d]{9}$/)){
				login.showSignupErr('手机号格式不正确');
				phoneObj.focus();
				return;
			}else{
				phoneOk = true
			}
		}else{
			login.showSignupErr('手机号不能为空!');
			phoneObj.focus();
			return;
		}
		if(read){
			readOk = true
		}else{
			login.showSignupErr('请阅读协议!');
			return;
		}
		if(usernameOk && pwdOk && confirmPwdOk && realnameOk && identityOk && phoneOk && readOk){
			dosignup(function (res) {
				if(res && res.code == '1'){
					//注册成功
				}else{
					login.showSignupErr(res.message);
				}
			})
		}
	},
	bindEvent: function () {
		var $main = $('.user_wrap');
		$main.on('click', '.signup_btn', function () {
			login.signup();
		});
		$main.on('click','.login_btn', function () {
			login.login();
		})
	}
};
var mycookie = {
	//新建cookie。
	//hours为空字符串时,cookie的生存期至浏览器会话结束。hours为数字0时,建立的是一个失效的cookie,这个cookie会覆盖已经建立过的同名、同path的cookie（如果这个cookie存在）。
	setCookie: function(name,value,hours,path){
	    var name = escape(name);
	    var value = escape(value);
	    var expires = new Date();
	     expires.setTime(expires.getTime() + hours*3600000);
	     path = path == "" ? "" : ";path=" + path;
	     _expires = (typeof hours) == "string" ? "" : ";expires=" + expires.toUTCString();
	     document.cookie = name + "=" + value + _expires + path;
	},
	//获取cookie值
	getCookieValue: function(name){
	    var name = escape(name);
	    //读cookie属性，这将返回文档的所有cookie
	    var allcookies = document.cookie;       
	    //查找名为name的cookie的开始位置
	     name += "=";
	    var pos = allcookies.indexOf(name);    
	    //如果找到了具有该名字的cookie，那么提取并使用它的值
	    if (pos != -1){                                             //如果pos值为-1则说明搜索"version="失败
	        var start = pos + name.length;                  //cookie值开始的位置
	        var end = allcookies.indexOf(";",start);        //从cookie值开始的位置起搜索第一个";"的位置,即cookie值结尾的位置
	        if (end == -1) end = allcookies.length;        //如果end值为-1说明cookie列表里只有一个cookie
	        var value = allcookies.substring(start,end); //提取cookie的值
	        return (value);                           //对它解码      
	         }   
	    else return "";                               //搜索失败，返回空字符串
	},
	//删除cookie
	deleteCookie: function(name,path){
	    var name = escape(name);
	    var expires = new Date(0);
	     path = path == "" ? "" : ";path=" + path;
	     document.cookie = name + "="+ ";expires=" + expires.toUTCString() + path;
	}
}
$(function () {
	login.bindEvent();
})