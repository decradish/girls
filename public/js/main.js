function lightbox(target){
	$.fancybox.close()
	$.fancybox({
		href: target
	})
}

$(function(){
	var oPlayerImg = $('#player_img_small')
	oPlayerImg.find('li').click(function(event) {
		var oThis = $(this),
			sImgSrc = oThis.find('img').attr('src')

		oPlayerImg.prev().find('img').attr('src', sImgSrc)
	});
})