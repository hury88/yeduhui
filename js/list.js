var filter = "";
var orderBy = "";
var price = 0;
var score = 0;
$(function(){
	getPage();
	$("div[rel='pjax']").each(function(idx,div){
		$div = $(div);
		$.ajax({
			url:$div.attr('data-src'),
			success:function(data){
				$div.html(data);
			}
		});
	});
});
$(".ydh-list-filter-type.sortBy").children('span').click(function(){
		$(this).parent('dd').siblings().removeClass('active');
		//$(this).parent('dd').siblings().removeClass('desc');
		$(this).parent('dd').siblings().removeClass('desc-cur');
		$(this).parent('dd').siblings().removeClass('asc-cur');
		
		//$('span[class=sortBy]').removeAttr('data-target');
		if($(this).attr('id') == 'sortP'){
			if($(this).attr("data-target") == 'P1'){
				$(this).attr("data-target",'P2');
				$(this).parent('dd').removeClass('desc-cur');
				$(this).parent('dd').removeClass('asc-cur');
				$(this).parent('dd').addClass('asc-cur');
			}else{
				$(this).attr("data-target",'P1');
				$(this).parent('dd').removeClass('asc-cur');
				$(this).parent('dd').removeClass('desc-cur');
				$(this).parent('dd').addClass('desc-cur');
			}
		}else if($(this).attr('id') == 'sortS'){
			if($(this).attr("data-target") == 'S1'){
				$(this).attr("data-target",'S2');
				$(this).parent('dd').removeClass('desc-cur');
				$(this).parent('dd').removeClass('asc-cur');
				$(this).parent('dd').addClass('asc-cur');
			}else{
				$(this).attr("data-target",'S1');
				$(this).parent('dd').removeClass('asc-cur');
				$(this).parent('dd').removeClass('desc-cur');
				$(this).parent('dd').addClass('desc-cur');
			}
		}else if($(this).attr('id') == 'sortST'){
			if($(this).attr("data-target") == 'ST1'){
				$(this).attr("data-target",'ST2');
				$(this).parent('dd').removeClass('desc-cur');
				$(this).parent('dd').removeClass('asc-cur');
				$(this).parent('dd').addClass('asc-cur');
			}else{
				$(this).attr("data-target",'ST1');
				$(this).parent('dd').removeClass('asc-cur');
				$(this).parent('dd').removeClass('desc-cur');
				$(this).parent('dd').addClass('desc-cur');
			}
		}
		
		
	//return false;	
	var field = $(this).attr("data-target");
	orderBy = field;
	var model = {};
	if(field.indexOf("star") != -1 || field.indexOf("location") != -1 || field.indexOf("zone") != -1){
		model.filter = field;
		filter = field;
	}
	if(field.indexOf("P") != -1 || field.indexOf("S") != -1){
		model.orderBy = field;
		orderBy = field;
	}
	//alert("debug .... ");
	ajaxDraw(model);
});
function getPage(){
	$("a[class^=page]").click(function(){
		var action = $(this).attr('class'); //page-pre page-cur page-num page-next
		var curPage =parseInt($("a[class=page-cur]").html());
		var targetPage;
		if(action == 'page-prev'){
			targetPage = curPage -1 < 1 ? 1 : curPage -1 ;
		}else if(action == 'page-cur'){
			return false;
		}else if(action == 'page-num'){
			targetPage = parseInt($(this).html());
		}else if(action == 'page-next'){
			var max =  parseInt($(this).attr('max'));
			targetPage =curPage + 1 > max ? max : curPage + 1;
		}
		if(targetPage == curPage){
			return false;
		}
		var model = {};
		//model.filter = filter;
		model.orderBy = orderBy;
		model.page = targetPage;
		ajaxDraw(model);
	});
}
function ajaxDraw(model){
	//alert("debug ...1");
	$.ajax({
		url:encodeURI(requestPath),
		type:"POST",
		data:$.toJSON(model),
		dataType:"json",
		//contentType: "application/x-www-form-urlencoded; charset=GBK",
		success:function(data){
			//alert("debug ...2");		
			// draw
			$("div[class=ydh-list-content]").empty();
			$("div[class=ydh-list-content]").append(data.data);
			$("#companyCount").html(data.count);
			$("#scrollUp").click();
			listener();
		}
	});
};
function listener(){
	getPage();
};

////
$(function() {
	$('.close-keyword-panel').click(function(event){
		$('.keyword-panel').hide();
	});
	// 
	$('.search-box-input').bind('input propertychange focus',function(){
		if("" == $(this).val()){
			$('.keyword-panel').hide();
			return false;
		}
		var model = {};
		model.cityId=city;
		model.key=$(this).val();
		$.ajax({
			url:"http://search.yeduhui.cn/search/companyOfCity.do",
			dataType:"jsonp",
			data:model,
			success:function(data){
				var companys = $.evalJSON(data.company);
				if(companys.count){
					$('.suggest-companys').empty();
					$.each(companys.data,function(index,oEach){
						//<li><a class='search-suggest-item'>碑林区</a></li>	
						$('.suggest-companys').append("<li><a href='/club/"+oEach.id+".html' class='search-suggest-item'>"+oEach.name+"</a></li>");	
					});
				}
			}
		});
		//
		$.ajax({
			url:"http://search.yeduhui.cn/search/subOfCity.do",
			dataType:"jsonp",
			data:model,
			success:function(data){
				var countys = $.evalJSON(data.county);
				var business = $.evalJSON(data.business);
				if(countys.count){
					$('.suggest-county').empty();
					$.each(countys.data,function(index,oEach){
						$('.suggest-county').append("<li><a href='/"+oEach.city_id+"/location"+oEach.county_id+"/' class='search-suggest-item'>"+oEach.county+"</a></li>");	
					});
				}
				if(business.count){
					$('.suggest-business').empty();
					$.each(business.data,function(index,oEach){
						$('.suggest-business').append("<li><a href='/"+oEach.city_id+"/zone"+oEach.business_id+"/' class='search-suggest-item'>"+oEach.business+"</a></li>");	
					});
				}
			}
		});
		$('.keyword-panel').show();
	});
	// enter search
	$(".search-enter-button").click(function(){
		var keyword = $(".search-keyword-input").val();
		if("" == keyword){
			return false;
		}
		var url = "/"+city+"/k1"+keyword;
		window.location.href=url;
	});
	
	//
	
	
});

$(document).keypress(function(e){
	
	if(e.which == 13){
		var keyword = $(".search-keyword-input").val();
		if("" == keyword){
			return false;
		}
		var url = "/"+city+"/k1"+keyword;
		window.location.href=url;
		return false;
	}
});