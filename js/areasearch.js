var city,county,zone,k;
$(function(){
	
   //监听 搜索 城市 的输入
   $('#citySearch').bind("input onpropertychange",function() {
	   //获取输入的内容
	   var thisStr = $(this).val();
	   if(thisStr!=null&&thisStr!=undefined&&thisStr!=""){
	       searchBoxList(thisStr);
	   }
	    
   });
   
   //监听 搜索    关键字/行政区/商圈   输入
   $('#areaK1').bind("input onpropertychange",function() {
   
	   var citySearchStr = $('#citySearch').val();
	   if(citySearchStr!=null&&citySearchStr!=undefined&&citySearchStr!=""){
		   //获取输入的内容
		   var thisStr = $(this).val();
		   searchKeyList(thisStr);
	  }
   });
   
  // $("#areaK1").focus(function(){
       if(city!=null&&city!=undefined&&city!=""){
	       countyClick(city);
	  }
   //});

   //监听  搜索 按钮点击事件
   $("#ydh-search-btn").click(function() {
     	if(city!=null&&city!=undefined&&city!=""){
            city=city;
     		window.open(''+url+city+'/','_blank');
     	}
   });
   
   //根据城市id 获取 区域/商圈 数据  
   $('.search-box-list-box:eq(0)').find('span').click(function() {
	   var cityId=$(this).find('a').attr('id');
	   if(cityId!=null&&cityId!=undefined&&cityId!=""){
		   city=cityId;
		   countyClick(cityId); 
	   }else{
		   console.log("城市id 为空 ");
	   }
   });
   
   //点击 区域  发起请求 
   $('.search-key-list-box:eq(0)').find("span").click(function(){
		county="location-"+$(this).find('a').attr("id")+"/";
		searchBtu(county);
   });
   //点击 商圈 发起请求
   $('.search-key-list-box:eq(1)').find("span").click(function(){
		zone="zone-"+$(this).find('a').attr("id")+"/";
		searchBtu(zone);
	});
 
});


/**根据 城市id 获取 
 * @param cityId
 */
function countyClick(cityId){ 
	//根据城市 id  获取城市下的 区域
	 $.ajax({
	        type : "get",
	        async : false,
	        url : "http://search.yeduhui.cn/search/countyOfCity.do",
	        data : {cityId:cityId},
	        cache : false, 
	        dataType : "jsonp",
	        crossDomain:true,
	        jsonp: "callback",
	        jsonpCallback:"areaCounty"
	 });
}



//等到 城市下的 区域 
function areaCounty(data){
 	var dataStr = data.county;
 	var objStr = eval("("+dataStr+")");
 	var sf = new StringBuffer();
 	$(".search-key-list-box:eq(0)").find('span').remove();
 	if(objStr.count>0){
 		var dataCityId;
 		$.each(objStr.data,function(index,county){
 			dataCityId=county.city_id;
			sf.append("<span><a id="+county.county_id+">"+county.county+"</a></span> ");
		    $(".search-key-list-box:eq(0)").append(sf.toString);
 			sf.clear();
 		});
 		//出发他的点击事件
 		$('.search-key-list-box:eq(0)').find("span").bind("click", function(){
 			county="location-"+$(this).find('a').attr("id")+"/";
 			searchBtu(county);
 		});
 		businessClick(dataCityId);
 	}
}

function businessClick(cityId){
	 //根据城市 id  获取城市下的 商圈
	 $.ajax({
	        type : "get",
	        async : false,
	        url : "http://search.yeduhui.cn/search/businessOfCity.do",
	        data : {cityId:cityId},
	        cache : false, 
	        dataType : "jsonp",
	        crossDomain:true,
	        jsonp: "callback",
	        jsonpCallback:"areaBusiness"
	 });	
	 
}
//得到所有 商圈
function areaBusiness(data){
	$(".search-key-list-box:eq(1)").find('span').remove();
	var dataStr = data.business;
	var objStr = eval("("+dataStr+")");
	var sf = new StringBuffer();
	if(objStr.count>0){
		$.each(objStr.data,function(index,business){
			sf.append("<span><a id="+business.business_id+">"+business.business+"</a></span> ");
			$(".search-key-list-box:eq(1)").append(sf.toString);			
			sf.clear();
		});
		//出发他的点击事件
		$('.search-key-list-box:eq(1)').find("span").bind("click", function(){
			zone="zone-"+$(this).find('a').attr("id")+"/";
			searchBtu(zone);
		});
		
	}
}



function searchBoxList(city){
	//发送ajax 请求
//	$.post("test.php",{city:city},function(data){
//		//将返回的数据填充 到 div 中
//		$('.search-box-list:eq(1)').after(data);
//		$('.search-box-list:eq(0)').hide();
//		$('.search-box-list:eq(1)').slideDown();
//		$(".search-box-title").bind("click", function(){
//			alert("这是搜索出来的城市 ，注册事件");
//		});
//	});
	
}


function searchKeyList(k){
	 //发送ajax 请求
	$.post("test.php",{k:k},function(data){
		 //
		 $('.search-key-list:eq(1)').after(data);
		 $('.search-key-list:eq(0)').hide();
		 $('.search-key-list:eq(1)').slideDown();
	});
}

/**
 * 根据城市id 获取 区域/商圈 数据
 * @param cityId
 * @param e
 */
function selectSearchKey(cityId){
	city=cityId+"/";
	$.post("test.php",{cityId:cityId},function(data){
		$('.search-box-list:eq(0)').after(data);
		$('.search-key-list-box:eq(0)').find("span").bind("click", function(){
			alert("这是搜索出来的城市 ，区域点击注册事件");
		});
		$('.search-key-list-box:eq(1)').find("span").bind("click", function(){
			alert("这是搜索出来的城市 ，区域商圈点击注册事件");
		});
	});
}

/**点击 区域 
 * @param location
 * @param e
 */
function locationClick(county,e){
	e.preventDefault();
	county="location"+county+"/"
	
}

/**点击 商圈 
 * @param zone
 * @param e
 */
function zoneClick(zone,e){
	e.preventDefault();
	zone="zone"+zone+"/";
}

/**点击 关键字 
 * @param k
 * @param e
 */
function kClick(k,e){
	e.preventDefault();
	k="k1"+k;
}

/** 搜索
 * @param key
 */
function searchBtu(key){
	window.open(''+url+city+'/'+key+'','_blank');
}



