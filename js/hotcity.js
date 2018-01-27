$(function(){
	//监听 选中 城市 的 企业
	$('.ydh-index-city-tab').find('a').click(function() {
		var clickCityId=$(this).attr("data-city-id");
		if(clickCityId!=null&&clickCityId!=undefined&&clickCityId!=""){
		      getHotCity(clickCityId);
		      $('.ydh-index-view').find('a').attr('href','club/'+clickCityId+'/');
		      $('.ydh-index-view').find('a').html('查看更多'+$(this).html()+'夜店');
		}
	});
});

/**
 * 根据城市id 获取城市下的企业
 * @param cityId
 */
function getHotCity(cityId){
	
		 $.ajax({
		        type : "get",
		        async : false,
		        url : "http://search.yeduhui.cn/search/companyOfCity.do",
		        data : {cityId:cityId},
		        cache : false, 
		        dataType : "jsonp",
		        crossDomain:true,
		        jsonp: "callback",
		        jsonpCallback:"cityCompany"
		 });	 
	
}
function cityCompany(data){
	var dataStr = data.company;
	var objStr = eval("("+dataStr+")");
	var sf = new StringBuffer();
	$(".ydh-index-city-list-item.clearfix").remove();
	$("#preview").remove();
	if(objStr.count>0){
		$('.ydh-index-view').show();
		$.each(objStr.data,function(index,companyInfo){
		    sf.append("<div class='ydh-index-city-list-item clearfix'>");
		    
		    sf.append('<div class="ydh-index-city-list-item-pic  pull-left" id="imgtest">');
		    sf.append('<a class="boxsmaimage"  href="club/'+companyInfo.id+'.html" target="_blank">');
		    sf.append(' <ul><li><img src="'+companyInfo.gallery_cover+'" data-trigger="preview" data-href="'+companyInfo.gallery_cover+'" /></li></ul>');
		    sf.append('</a>');
		    sf.append(' </div>');

		    sf.append(' <div class="ydh-index-city-list-item-info  pull-right">');
		    sf.append('<h2><a href="club/'+companyInfo.id+'.html" target="_blank">'+companyInfo.name+'</a>');
		    sf.append('<span class="ydu-lx">['+companyInfo.grade+']</span><span class="ydu-fg"><span class="ydh-index-comment"><a href="#">好评率 '+companyInfo.score+'</a></span></span>');
		    sf.append('</h2>');
		    sf.append('<p>'+companyInfo.detail+'</p>');
		    
		    sf.append(' <div class="ydh-index-list-ablum" id="imgtest">');
		    sf.append(' <div class="pull-right"> ');
		    sf.append(' <span  class="batton" target="_blank">¥<span>'+eval("("+companyInfo.minProduct+")").minExpense+'</span>起</span>');
		    sf.append(' </div>');
		    
		    sf.append('<ul class="clearfix">');
			var galleryStr=eval("("+companyInfo.gallerys+")");
			if(galleryStr!=null&& typeof galleryStr!="undefined" &&galleryStr!=""){
				$.each(galleryStr,function(index,gallery){
				   sf.append(' <li> <img src='+gallery.path+'  data-trigger="preview" data-href='+gallery.path+' /> </li>');
				});
			}
		    sf.append('</ul>')
		    sf.append('</div>');
		    
		    sf.append('</div>');
		    
		    
		    sf.append('</div>');
			$(".ydh-index-view").before(sf.toString);
			sf.clear();
		});
		
		$('img').bind("click mouseover", function(){
			 $('[data-trigger="preview"]').preview();
		});
	}else{
	    sf.append('<div class="ydh-index-city-list-item clearfix ">');
	    sf.append("暂无数据");
	    sf.append('</div>');
	    $(".ydh-index-view").before(sf.toString);
		sf.clear();
		$('.ydh-index-view').hide();
	}	
}


