

	<footer>
		Copyright © 2015 EZONE CO, INC. ALL RIGHTS RESERVED. 北京亿众时代科技有限公司版权所有<br />
		京ICP备15022943号-1<br />
		服务时间：周一至周五 10:00-18:00           客服电话：010-57622690<br />
		客服QQ：739601188                            QQ群：430040179
	</footer>

</div><!-- /.core -->
</div><!-- /.bottom -->
</div><!-- /.wrapper -->

<div class="none">
	<div id="qr_code">
		<a href="javascript:void(0);" class="qr_code_warpper">
			<img src="/public/img/qr_code.png" alt="">
		</a><!-- /a.qr_code_warpper -->
	</div><!-- /#qr_code -->

	<div id="coming_soon">
		<div class="coming_soon">
			9月30日开启，敬请期待！
		</div><!-- /.coming_soon -->
	</div><!-- /#coming_soon -->
</div><!-- /.none -->

<script type="text/javascript" src="/public/js/main.js"></script>
<?php /*
<script type="text/javascript">
var dataForWeixin={
   appId:"",
   MsgImg:"http://<?php echo $_SERVER['SERVER_NAME'];?>/public/img/sns.jpg",
   TLImg:"http://<?php echo $_SERVER['SERVER_NAME'];?>/public/img/sns.jpg",
   url:"http://<?php echo $_SERVER['SERVER_NAME'];?>/player/index/<?php echo $this->uri->segment(3);?>",
   title:"世界时尚小姐在线报名",
   desc:"10万美金美人鱼代言，开启疯狂招募！现在报名，下一个世界时尚女王就是你！",
   fakeid:"",
   callback:function(){}
};


var imgUrl = 'http://<?php echo $_SERVER['SERVER_NAME'];?>/public/img/sns.jpg';//这里是分享的时候的那个图片
var lineLink = 'http://<?php echo $_SERVER['SERVER_NAME'];?>/player/index/<?php echo $this->uri->segment(3);?>';//这个是分享的网址
var descContent = "10万美金美人鱼代言，开启疯狂招募！现在报名，下一个世界时尚女王就是你！";
var shareTitle = '世界时尚小姐在线报名';
var appid = 'wxc9937e3a66af6dc8';  //这里写开发者接口里的appid
function shareFriend() {
    WeixinJSBridge.invoke(‘sendAppMessage‘,{
    "appid": appid,
    "img_url": imgUrl,
    "img_width": "321",
    "img_height": "321",
    "link": lineLink,
    "desc": descContent,
    "title": shareTitle
    }, function(res) {
    _report(‘send_msg‘, res.err_msg);
    })
}
function shareTimeline() {
    WeixinJSBridge.invoke(‘shareTimeline‘,{
    "img_url": imgUrl,
    "img_width": "321",
    "img_height": "321",
    "link": lineLink,
    "desc": descContent,
    "title": shareTitle
    }, function(res) {
    _report(‘timeline‘, res.err_msg);
    });
}
function shareWeibo() {
    WeixinJSBridge.invoke(‘shareWeibo‘,{
    "content": descContent,
    "url": lineLink,
    }, function(res) {
    _report(‘weibo‘, res.err_msg);
    });
}
// 当微信内置浏览器完成内部初始化后会触发WeixinJSBridgeReady事件。
document.addEventListener(‘WeixinJSBridgeReady‘, function onBridgeReady() {
    // 发送给好友
    WeixinJSBridge.on(‘menu:share:appmessage‘, function(argv){
        shareFriend();
        });
    // 分享到朋友圈
    WeixinJSBridge.on(‘menu:share:timeline‘, function(argv){
        shareTimeline();
        });
    // 分享到微博
    WeixinJSBridge.on(‘menu:share:weibo‘, function(argv){
        shareWeibo();
        });
    }, false);


</script>
*/?>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?1dfc31f5ed6046c2a743353087618542";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

</body>
</html>