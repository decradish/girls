
var Counter = function(options){
	this.panel = options.panel;
	this.timeS = options.timeS;

	// if(this.timeS > 0){
		this.init();
	// }
}
Counter.prototype.init = function(){
	var that = this;
	var inter = setInterval(function(){timer()},1000);
    function timer(){
		var time =	that.timeS;
        var remainingTime = new Date(time[0],time[1],time[2],time[3],time[4],time[5]).getTime() - new Date().getTime();//计算剩余的毫秒数
        remainingTime = remainingTime/1000;
        var day = parseInt(remainingTime/86400) < 10 ? parseTime(remainingTime/86400) : parseInt(remainingTime/86400);
        var hour = parseInt(remainingTime%86400/3600) < 10 ? parseTime(remainingTime%86400/3600) : parseInt(remainingTime%86400/3600);
        var min = parseInt(remainingTime%3600/60) < 10 ? parseTime(remainingTime%3600/60) : parseInt(remainingTime%3600/60);
        var sec = parseInt(remainingTime%60) < 10 ?  parseTime(remainingTime%60) : parseInt(remainingTime%60);
        var text = '<div class="timerBox">距离报名时间结束还有<i class="time_down">' + day + '</i>天<i class="time_down">' + hour + '</i>时<i class="time_down">' + min + '</i>分<i class="time_down">' + sec + '</i>秒</div>';
        that.panel.innerHTML = text
        if(remainingTime <= 0){
        	window.clearInterval(inter);
        	that.end();
        }
    }
    function parseTime(t){
    	return (Array(2).join(0) + parseInt(t)).slice(-2)
    }

}
Counter.prototype.end = function(){
    alert('倒计时结束');

}