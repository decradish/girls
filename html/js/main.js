var oBirth = {
	//设置初始年月日
	init: function(){
		// 添加年份，从1910年开始  
		for (var i = 1910; i <= new Date().getFullYear(); i++) {  
		    this.addOption(birth_year, i, i - 1909);  
		    /*// 默认选中1988年 
		    if (i == 1988) { 
		        birth_year.options[i-1910].selected = true; 
		    }*/  
		}  
		// 添加月份  
		for (var i = 1; i <= 12; i++) {
			if(i < 10){
				i = '0'+i;
			}
		    this.addOption(birth_month, i, i);  
		}  
		// 添加天份，先默认31天  
		for (var i = 1; i <= 31; i++) {
			if(i < 10){
				i = '0'+i;
			}
		    this.addOption(birth_day, i, i);  
		} 
	},
	bind: function(){

	},
	// 设置每个月份的天数  
	setDays: function (year, month,day) {  
		var monthDays = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];  
		var yea = year.options[year.selectedIndex].text;  
		var mon = month.options[month.selectedIndex].text;  
		var num = monthDays[mon - 1];  
		if (mon == 2 && this.isLeapYear(yea)) {  
		    num++;  
		} 
		for (var j = day.options.length - 1; j >=num; j--) {  
		   day.remove(j);  
		}  
		for (var i = day.options.length + 1; i <= num; i++) { 
		   this.addOption(birth_day,i,i);  
		}  
	},
	// 判断是否闰年  
	isLeapYear: function (year) {  
	    return (year % 4 == 0 || (year % 100 == 0 && year % 400 == 0));  
	},
	// 向select尾部添加option  
	addOption: function (selectbox, text, value) {  
		var option = document.createElement("option");  
		option.text = text;  
		option.value = value;  
		selectbox.options.add(option);  
	}  
}

var oCehck = {
	init: function(){

	},
	// 判断是否为身份证号
	isCardNo: function (card) {  
		// 身份证号码为15位或者18位，15位时全为数字，18位前17位为数字，最后一位是校验位，可能为数字或字符X  
		var reg = /(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x)$)/;  
		if(reg.test(card) === false){    
			return  false;  
		}else{
			return true
		}
	},
	// 判断是否为电话号码
	isPhoneNo: function (sPhone){
		var bVali = RegExp(/^(0|86|17951)?(13[0-9]|15[012356789]|17[0-9]|18[0-9]|14[57])[0-9]{8}$/).test(sPhone);
		if (bVali) {
			return true;
		}else{
			return false;
		}
	},
	// 判断是否为邮箱
	isEmail: function (sEmail){
		var bVali = RegExp(/^([\.a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-])+/).test(sEmail);
		if (bVali) {
			return true;
		}else{
			return false;
		}
	},
	// 返回中文字数，英文字母和数字视为半个字
	chLength: function (fData) { 
		var intLength=0 
		for (var i=0;i<fData.length;i++) 
		{ 
			if ((fData.charCodeAt(i) < 0) || (fData.charCodeAt(i) > 255)) 
				intLength=intLength+1 
			else 
				intLength=intLength+0.5 
		} 
		return intLength 
	}
}

var oSignup = {
	oWrapper: $('#signup'),
	init: function(){

	},
	bind: function(){

	},
	msg: function(oThis, msg){
		sMsg = msg
		if(msg != ''){
			sMsg = oThis.attr('placeholder')+msg+'; '
			sMsg = sMsg.replace(undefined, '')
		}else{
			sMsg = oThis.parents('.signup_box').prev('h2').text().replace('(', '').replace(')', '')
		}
		oThis.parents('.signup_box, ul.photos').find('.msg').append(sMsg)
	},
	check: function(){
		var error = 0,
			self = this,
			oCheckbox = {}

			oCheckbox.aName = []
			oCheckbox.iCount = []

		self.oWrapper
			.find('.msg').html('').end()
			.find('input[type="text"], textarea, select')
				.each(function(){
					var oThis = $(this),
						sThis = oThis.val()
					if(sThis == ''){
						self.msg(oThis, '不能为空')
						error ++
						return
					}

					if(oThis.hasClass('id_code') && !oCehck.isCardNo(sThis)){
						self.msg(oThis, '格式不正确')
						error ++
					}

					if(oThis.hasClass('email') && !oCehck.isEmail(sThis)){
						self.msg(oThis, '格式不正确')
						error ++
					}

					if(oThis.hasClass('phone') && !oCehck.isPhoneNo(sThis)){
						self.msg(oThis, '格式不正确')
						error ++
					}

					if(oThis.hasClass('intro') && oCehck.chLength(sThis) > 100){
						self.msg(oThis, '不能超过100个字')
						error ++
					}

					if(oThis.parents('.signup_box').hasClass('signup_box_body') && isNaN(sThis)){
						self.msg(oThis, '必须为数字')
						error ++
					}
				}).end()
			.find('input[type="checkbox"]').each(function(){
				var oThis = $(this),
					sThis = oThis.val(),
					sName = oThis.attr('name')//.replace("[]","")
				if($.inArray(sName, oCheckbox.aName) >= 0){
					var i = $.inArray(sName, oCheckbox.aName)
					if(oThis.prop('checked')){
						oCheckbox.iCount[i] ++
					}
				}else{
					var j = oCheckbox.aName.push(sName)
					oCheckbox.iCount[j-1] = 0
				}
			}).end()
			.find('ul.photos img').each(function(){
				var oThis = $(this)
				if(!oThis.hasClass('show')){
					self.msg(oThis, '请上传5张照片')
					error ++
					return false
				}
			})

		$(oCheckbox.aName).each(function(i){
			if(oCheckbox.iCount[i] == 0){
				var oThis = $('input[type="checkbox"][name="'+oCheckbox.aName[i]+'"]').eq(0)
				self.msg(oThis, '')
				error ++
			}
		})

		if(error > 0){
			return false
		}else{
			return true
		}
	}
}

$(function() {
    // oBirth.init()  
})
