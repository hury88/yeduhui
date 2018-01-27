$(function() {
	// $("img").css("background-image","http://lib.yeduhui.cn/img/2015/");
	// listener
	$("img").load(function() {
		// 图片默认隐藏
		$(this).hide();
		// 使用fadeIn特效
		$(this).fadeIn("5000");
	});
	$('.ydh-index-focus').slides({
		effect : 'fade',
		slideSpeed : 350,
		fadeSpeed : 500,
		play : 5000,
		pause : 2500,
		hoverPause : true,
		generateNextPrev : false,
		generatePagination : true,
		slidesLoaded:function(){
			$(".slider-img").removeClass("hide");
		}
	});

	// 
	$('.goods-item').mouseover(function() {
		$(this).find('span,img-area-con').each(function(idx, sp) {
			$(sp).removeClass('hide');
		});
	});
	$('.goods-item').mouseout(function() {
		$(this).find('span[class*=img-area-con]').each(function(idx, sp) {
			$(sp).addClass('hide');
		});
	});
	//
	$('.fxw-clear').click(function() {
		$this = $(this);
		$this.addClass('hide');
		$('.list-history-item.show-item').remove();
		$('.fxw-his-wu').removeClass('hide');
		delBrowse();
	});
	//
	$('.search-box-input').bind('input propertychange focus',function() {
			
			if ("" == $(this).val()) {
				$('.keyword-panel').hide();
				return false;
			}
				var model = {};
				model.cityId = city;
				model.key = $(this).val();
				$.ajax({
						url : "http://search.yeduhui.cn/search/companyOfCity.do",
						dataType : "jsonp",
						data : model,
						success : function(data) {
							var companys = $.evalJSON(data.company);
							if (companys.count) {
								$('.suggest-companys').empty();
								$.each(companys.data,function(index,oEach) {
									// <li><a
									// class='search-suggest-item'>碑林区</a></li>
									$('.suggest-companys').append("<li><a href='/club/"+ oEach.id + ".html' class='search-suggest-item'>"+ oEach.name + "</a></li>");
								});
							}
						}
				});
				$.ajax({
					url : "http://search.yeduhui.cn/search/subOfCity.do",
					dataType : "jsonp",
					data : model,
					success : function(data) {
						var countys = $.evalJSON(data.county);
						var business = $.evalJSON(data.business);
						if (countys.count) {
							$('.suggest-county').empty();
							$.each(countys.data,function(index,oEach) {
								$('.suggest-county').append("<li><a href='/"+ city + "/location" + oEach.county_id + "/' class='search-suggest-item'>" + oEach.county + "</a></li>");
							});
						}
						if (business.count) {
							$('.suggest-business').empty();
							$.each(business.data,function(index,oEach) {
								$('.suggest-business').append("<li><a href='/"+ city+ "/zone" + oEach.business_id + "/' class='search-suggest-item'>" + oEach.business + "</a></li>");
							});
						}
					}
				});
				console.log("action!1");
				$('.keyword-panel').show().removeClass("hide");
	});
	$('.close-keyword-panel').click(function(event) {
		$('.keyword-panel').hide();
	});
	// enter search
	$(".search-enter-button").click(function() {
		var keyword = $(".search-keyword-input").val();
		if ("" == keyword) {
			return false;
		}
		var url = "/" + city + "/k1" + keyword;
		window.location.href = url;
	});
	browseAjax();
});

$(document).keypress(function(e) {

	if (e.which == 13) {
		var keyword = $(".search-keyword-input").val();
		if ("" == keyword) {
			return false;
		}
		var url = "/" + city + "/k1" + keyword;
		window.location.href = url;
		return false;
	}
});
// init
var browseAjax = function() {

	$.ajax({
		url : "/browse/list.html",
		type : "GET",
		data : "",
		dataType : "jsonp",
		callback : "call1",
		success : function(data) {
			if (data.status) {
				// 
				drawBrowse(data.data);
			} else {
				// 隐藏清除记录按钮
				// 显示暂无记录
				$(".ydh-history-del").parent('.ydh-history.ie6css3').hide();
			}
		}
	});

};
var drawBrowse = function(dataArr) {
	$('.fxw-his-wu').addClass('hide');
	var sf = new StringBuffer();
	$
			.each(
					dataArr,
					function(index, browse) {
						sf
								.append("<a href='club/"
										+ browse.companyID
										+ ".html' class='list-history-item show-item f12 bdb clearfix' target='_blank'>");
						sf.append("<img src='" + browse.imgPath
								+ "' width='83px' height='55px'>");
						sf.append("<div class='list-history-item-right'>");
						sf.append("<p>" + browse.companyName + "["
								+ browse.companyGrade + "]</p>");
						sf.append("<p class='color-main'>¥" + browse.minExpense
								+ "起价</p>");
						sf.append("</div>");
						sf.append("</a>");
						$(".history-list").after(sf.toString);
						sf.clear();
					});
	$('.fxw-clear').removeClass('hide');
};
var delBrowse = function() {
	$.ajax({
		url : "/browse/del.html",
		type : "GET",
		data : "",
		success : function(msg) {
			// alert(msg);
		}
	});
};
