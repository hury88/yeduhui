// JavaScript Document
//copyright c by zhangxinxu 2009-10-17 
//http://www.zhangxinxu.com
/*由于大图绑定在href属性中，故一般而言，需使用a标签的href指向大图。仅支持png,gif,jpg,bmp四种格式的图片。用法是：目标.preview();
例如：<a href="xx.jpg">图片</a>
$("a").preview();就可以了
*/
(function($){
	$.fn.preview = function(){
		var xOffset = 10;
		var yOffset = 20;
		var w = $(window).width();
		$(this).each(function(){
			$(this).hover(function(e){
				if(/.png$|.gif$|.jpg$|.bmp$/.test($(this).attr("data-href"))){
					$("body").append("<div id='preview'><div><img src='"+$(this).attr('data-href')+"' /><p></p></div></div>");
				}else{
					$("body").append("<div id='preview'><div><p></p></div></div>");
				}
				$("#preview").css({
					position:"absolute",
					padding:"4px",
					borderRadius:"5px",
					backgroundColor:"#f1f1f1",
					top:(e.pageY - yOffset) + "px",
					zIndex:499,
				});
				$("#preview > div").css({
					width:"350px",
					height:"210px",
						borderRadius:"5px",
				});
				$("#preview > div > img").css({
					width:"350px",
					height:"210px",
						borderRadius:"5px",
				});
				$("#preview > div > p").css({
					textAlign:"center",
					fontSize:"12px",
					padding:"0",
					margin:"0"
				});
					$("#preview").css({
						left: e.pageX + xOffset + "px",
						right: "auto"
					}).fadeIn("fast");
				
			},function(){
				$("#preview").remove();
			}).mousemove(function(e){
				$("#preview").css("top",(e.pageY - xOffset) + "px")
				$("#preview").css("left",(e.pageX + yOffset) + "px").css("right","auto");
				
			});						  
		});
	};


})(jQuery);
$(function() {
		$('[data-trigger="preview"]').preview();
});
