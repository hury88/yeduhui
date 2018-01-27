$(function(){
	var _t = getCookie("_t");
	var aMy = $("#header_my");
	var aLogin = $("#header_login");
	var aLogout = $("#header_logout");
	$.ajax({
		url:"http://account.yeduhui.cn/isLogin.do",
		type:"GET",
		dataType:"JSONP",
		data:{_t:_t,},
		jsonp:"callbackfun",
		success:function(result){
			if(result.status == 0){
				aMy.attr("href","/uc/init#order");
				aLogin.html(result.uname);
				aLogin.attr("href","/uc/init#info");
				aLogout.html("退出");
				aLogout.attr("href","/uc/logout");
			}// fi
		}
	});
});