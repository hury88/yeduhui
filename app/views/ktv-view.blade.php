@extends('layouts.master')

@section('wapper')
<div class="nei-main">


	<div class="filter" >

		<div class="ydh-crumbs mb14">
			<p class="pt15 f14">
				<a href="/" class="text-line">主页</a> &nbsp;&nbsp;&nbsp;&nbsp;> 
				<a href="/xian4/" class="text-line">{{v_id($view->city_id, 'title')}}</a> >
				<a href="/xian4/location41/" class="text-line">{{v_id($view->cate_id, 'title')}}</a> >
				<a href="javascript:;" class="text-line">{{$view->title}}</a>
			</p>
		</div>

		<div class="ydh-detail-right">
			<div class="ydh-detail-title-main pull-left">
				<h1>
					{{$view->title}} <span>[豪华型]</span>
				</h1>
				<h2>{{$view->ftitle}}</h2>
				<p>预订热线：<span class="f18">{{$view->hotline}}</span></p>
				<p>营业时间：{{$view->ontime}}</p>
				<p>
					<add>地&nbsp;&nbsp;&nbsp;&nbsp;址：碑林区&nbsp;雁塔北路17号(李家村万达广场对面)</add>
					<a href="/detail/map/S3GGcfvvsSz5tdocU6CEQF.html" data-trigger="modal"
					data-title="西安丽都国会"><span class="ydh-view-map">显示地图</span></a>
				</p>
			</div>

			<div class="ydh-detail-title-order pull-right text-right">
				<a href="#order" class="btn btn-default text-left mb10">立即预订</a>
				<p>
					最低消费 <span><i class="f14">¥</i>{{$view->xiaobao_p2}}</span>
				</p>
				<!-- <a href="#" class="ydh-detail-fav">收藏此店</a> -->
			</div>

			<div class="clearit"></div>
			<div class="ydh-detail-ablum-title">
				<a href="#comment" class="pull-right">查看所有点评</a>跳转至: <a
				href="#order">包间预订</a> <a href="#company-info">商家简介</a>
			</div>

			<div class="ydh-detail-ablum-big detail-job-ablum">
				<div class="slides_container">
					<img alt="" src="http://img1.yeduhui.cn/9af0e008-f3a1-4c7f-beeb-9da6afafdb0fIMG_2155.JPG" style="display: none;"/>
					<img alt="" src="http://img1.yeduhui.cn/aa9fc196-e6a5-4162-8ad6-f1ac50a53549IMG_2156.JPG" style="display: none;"/><img alt="" src="http://img1.yeduhui.cn/2f8230b4-3c85-4fdd-8508-6f20e720cdb4IMG_2154.JPG" style="display: none;"/><img alt="" src="http://img1.yeduhui.cn/6ee6a7cb-9351-4d30-8dd6-35f9fd75cb5bIMG_1732.JPG" style="display: none;"/><img alt="" src="http://img1.yeduhui.cn/d565664f-5072-43c9-bca0-846de91cd9c0IMG_1731.JPG" style="display: none;"/><img alt="" src="http://img1.yeduhui.cn/9d9b16cb-6e48-42a6-acd4-554119c909d5IMG_1745.JPG" style="display: none;"/><img alt="" src="http://img1.yeduhui.cn/56e7224b-f17f-4cb2-96df-e298325a4928IMG_1746.JPG" style="display: none;"/><img alt="" src="http://img1.yeduhui.cn/6bc63179-5fb6-4256-ab33-49124f048d18IMG_1739.JPG" style="display: none;"/><img alt="" src="http://img1.yeduhui.cn/e4642d8e-312b-4345-ba98-51f94f2368b7IMG_1738.JPG" style="display: none;"/><img alt="" src="http://img1.yeduhui.cn/5464dbd0-9a81-4051-a58e-ef2e1a306656IMG_1735.JPG" style="display: none;"/><img alt="" src="http://img1.yeduhui.cn/f7b44666-2c86-4e2a-b09b-db1f6b5d3a75IMG_1737.JPG" style="display: none;"/><img alt="" src="http://img1.yeduhui.cn/cbbf48f6-94a5-4a7c-8f56-679c1a8971b3IMG_1734.JPG" style="display: none;"/><img alt="" src="http://img1.yeduhui.cn/69d8cf08-5a7e-466b-a213-8afb30c30258IMG_1733.JPG" style="display: none;"/><img alt="" src="http://img1.yeduhui.cn/0eb6647d-3fae-4338-8e27-1ebb31a88a6dmmexport1430031023628.jpg" style="display: none;"/>
				</div>
				<a href="#" class="prev detail-btn-arr" style="display: none;">Prev</a>
				<a href="#" class="next detail-btn-arr" style="display: none;">Next</a>
				<!--<div class="ydh-detail-ablum-big-tips-bg"></div> -->
				<div class="ydh-detail-ablum-big-tips text-right">
					<p class="f18 mb5">优秀 98.18%分</p>
					<p class="mb14">来自11份评论</p>
					<p class="mb5">“在阳光国会消费，朋友过生日还送香槟，挺好的！”</p><p><p class="f14 fwb pt8">匿名</p><br>2014年12月27日</p>
				</div>
				<div class="ydh-detail-ablum-info">
					<!-- 企业也服务设施 -->
					总包间数3间 
					<span class="service-icon"><img src="http://img.yeduhui.cn/4a4d3722-eb72-47a3-9496-94341a671813tingche.png" />停车场</span><span class="service-icon"><img src="http://img.yeduhui.cn/17124e50-a31f-4f61-97e4-ce5118b3460ftaiqiu.png" />台球</span><span class="service-icon"><img src="http://img.yeduhui.cn/3fd01884-6e23-4611-a215-dde9c6ebc6badaijia.png" />代驾</span><span class="service-icon"><img src="http://img.yeduhui.cn/c0e80fb4-0ec1-495e-8c69-bdd8a18968d1WIFI.png" />WIFI</span>

				</div>
				<div id="scl" class="ydh-detail-ablum-carousel scl-pic clearfix ">
					<div class="jcarousel-container">
						<span title="上一条" class="jcarousel-prev iepng"
						style="display: block;" onselectstart="false">上一条</span>
						<ul class="smallimg pagination">
							<li><a href="#0"> <img alt="" src="http://img1.yeduhui.cn/9af0e008-f3a1-4c7f-beeb-9da6afafdb0fIMG_2155.JPG!m60x60.jpg"/><div class="cur" ></div> </a></li><li><a href="#1"> <img alt="" src="http://img1.yeduhui.cn/aa9fc196-e6a5-4162-8ad6-f1ac50a53549IMG_2156.JPG!m60x60.jpg"/><div class="cur" ></div> </a></li><li><a href="#2"> <img alt="" src="http://img1.yeduhui.cn/2f8230b4-3c85-4fdd-8508-6f20e720cdb4IMG_2154.JPG!m60x60.jpg"/><div class="cur" ></div> </a></li><li><a href="#3"> <img alt="" src="http://img1.yeduhui.cn/6ee6a7cb-9351-4d30-8dd6-35f9fd75cb5bIMG_1732.JPG!m60x60.jpg"/><div class="cur" ></div> </a></li><li><a href="#4"> <img alt="" src="http://img1.yeduhui.cn/d565664f-5072-43c9-bca0-846de91cd9c0IMG_1731.JPG!m60x60.jpg"/><div class="cur" ></div> </a></li><li><a href="#5"> <img alt="" src="http://img1.yeduhui.cn/9d9b16cb-6e48-42a6-acd4-554119c909d5IMG_1745.JPG!m60x60.jpg"/><div class="cur" ></div> </a></li><li><a href="#6"> <img alt="" src="http://img1.yeduhui.cn/56e7224b-f17f-4cb2-96df-e298325a4928IMG_1746.JPG!m60x60.jpg"/><div class="cur" ></div> </a></li><li><a href="#7"> <img alt="" src="http://img1.yeduhui.cn/6bc63179-5fb6-4256-ab33-49124f048d18IMG_1739.JPG!m60x60.jpg"/><div class="cur" ></div> </a></li><li><a href="#8"> <img alt="" src="http://img1.yeduhui.cn/e4642d8e-312b-4345-ba98-51f94f2368b7IMG_1738.JPG!m60x60.jpg"/><div class="cur" ></div> </a></li><li><a href="#9"> <img alt="" src="http://img1.yeduhui.cn/5464dbd0-9a81-4051-a58e-ef2e1a306656IMG_1735.JPG!m60x60.jpg"/><div class="cur" ></div> </a></li><li><a href="#10"> <img alt="" src="http://img1.yeduhui.cn/f7b44666-2c86-4e2a-b09b-db1f6b5d3a75IMG_1737.JPG!m60x60.jpg"/><div class="cur" ></div> </a></li><li><a href="#11"> <img alt="" src="http://img1.yeduhui.cn/cbbf48f6-94a5-4a7c-8f56-679c1a8971b3IMG_1734.JPG!m60x60.jpg"/><div class="cur" ></div> </a></li><li><a href="#12"> <img alt="" src="http://img1.yeduhui.cn/69d8cf08-5a7e-466b-a213-8afb30c30258IMG_1733.JPG!m60x60.jpg"/><div class="cur" ></div> </a></li><li><a href="#13"> <img alt="" src="http://img1.yeduhui.cn/0eb6647d-3fae-4338-8e27-1ebb31a88a6dmmexport1430031023628.jpg!m60x60.jpg"/><div class="cur" ></div> </a></li>
						</ul>
						<span title="下一条" class="jcarousel-next iepng"
						style="display: block;" onselectstart="false">下一条</span>
					</div>
				</div>
			</div>

			<div class="ydh-detail-privi ie6css3 pull-left">
				<h3>
					<span class="privi-tips pull-right" data-tips="tips"
					title="<div class='tipsy-title'><span>温馨提示</span></div><div class='tipsy-content'>此信息仅供参考，具体赠送方式以店内<br>活动为准。</div>"></span>夜都汇会员专享优惠特权！
				</h3>
				<div class="ydh-detail-privi-content">
					<p><span class="ydh-detail-privi-title">啤酒</span><span class="ydh-detail-privi-price">80元/瓶起价</span>买三送一</p><p><span class="ydh-detail-privi-title">红酒</span><span class="ydh-detail-privi-price">1580元/瓶起价</span>部分特价买二送一</p><p><span class="ydh-detail-privi-title">洋酒</span><span class="ydh-detail-privi-price">1580元/瓶起价</span>名士马爹利系列买二送一</p><p><span class="ydh-detail-privi-title">红酒</span><span class="ydh-detail-privi-price">1580元/瓶起价</span>部分特价买二送一</p><p><span class="ydh-detail-privi-title">啤酒</span><span class="ydh-detail-privi-price">80元/瓶起价</span>买三送一</p>
					<div class="ydh-detail-privi-d">果盘免费送！ 酒水全单8.5折。</div>
				</div>
			</div>

			<div class="ydh-detail-order-tips ie6css3 pull-right">
				<div class="ydh-detail-order-tips-content ie6css3">
					<p class="f14 fwb">无需预付 | 免费预订</p>
					<p>多数客户可免费取消</p>
					<p class="f14 fwb">现在预订 并享受即时确认服务!</p>
					<p>明智的选择，选择Yeduhui</p>
					<div class="ydh-detail-privi-d">预订，就是这么简单！</div>
				</div>
			</div>

			<div class="clearit"></div>
			<div class="ydh-detail-order-wapper mb20 clearfix ie6css3 "
			id='order'>
			<div class="ydh-detail-order-wapper-title">
				<span class="pull-right" id="theWeather">2018年01月29日 </span> <span class="f14 fwb">选择你喜欢的房型</span>
			</div>
			<ul class="ydh-detail-order-grid-title">
				<li class="ydh-detail-order-grid-type">包间类型</li>
				<li class="ydh-detail-order-grid-people">容纳人数</li>
				<li class="ydh-detail-order-grid-low">
					<span class="privi-tips " data-tips="tips"
					title="<div class='tipsy-title'><span>最低消费</span>
				</div><div class='tipsy-content'>包含包间费、酒水最低消费、公主小费
				<br>但不包含15%服务费</div>">
			</span> 
			<span>最低消费</span></li>
			<li class="ydh-detail-order-grid-info">房态信息</li>
			<li class="ydh-detail-order-grid-order">最新预订时间1小时前</li>
		</ul>
		<!-- 产品 -->
		<ul class="ydh-detail-order-grid-list clearfix">
			<li class="ydh-detail-order-grid-type">
				<div class="ydh-detail-order-grid-img">
					<h2>普通小包</h2>
					<a href="/detail/product/3wEHcQ6cXd93qWhP62VJTe.html" data-trigger="modal" data-title="西安丽都国会普通小包">
						<img alt="" src="http://img1.yeduhui.cn/c48fff8a-b974-4c71-befe-cc94dc620259IMG_1734.JPG!m100x75.jpg" />
						<div class="ydh-detail-zoom iepng">
						</div>
					</a>
				</div>
			</li>
			<li class="ydh-detail-order-grid-people">{{$view->xiao_p1}}</li>
			<li class="ydh-detail-order-grid-low"><span><i class="f14">¥</i>{{$view->xiao_p2}}</span></li>
			<li class="ydh-detail-order-grid-info">有房</li>
			<li class="ydh-detail-order-grid-order">
				<a href="/productInfo/3wEHcQ6cXd93qWhP62VJTe.html" class="list-btn  text-left"   data-title="西安丽都国会">立即预订</a>
			</li>
		</ul>
		<ul class="ydh-detail-order-grid-list clearfix">
			<li class="ydh-detail-order-grid-type">
				<div class="ydh-detail-order-grid-img">
					<h2>普通中包</h2>
					<a href="/detail/product/RX1Dkmm8enJHW4r3N8w142.html" data-trigger="modal" data-title="西安丽都国会普通中包">
						<img alt="" src="http://img1.yeduhui.cn/02407fba-82b4-49dc-a144-0489695055e9IMG_1736.JPG!m100x75.jpg" />
						<div class="ydh-detail-zoom iepng"></div>
					</a>
				</div>
			</li>
			<li class="ydh-detail-order-grid-people">{{$view->zhong_p1}}</li>
			<li class="ydh-detail-order-grid-low"><span><i class="f14">¥</i>{{$view->zhong_p2}}</span></li>
			<li class="ydh-detail-order-grid-info">有房</li>
			<li class="ydh-detail-order-grid-order"> <a href="/productInfo/RX1Dkmm8enJHW4r3N8w142.html" class="list-btn  text-left"   data-title="西安丽都国会">立即预订</a> </li>
		</ul>
		<ul class="ydh-detail-order-grid-list clearfix">
			<li class="ydh-detail-order-grid-type">
				<div class="ydh-detail-order-grid-img">
					<h2>普通大包</h2>
					<a href="/detail/product/AM2u9SLuKbSBaYU9qh6ypC.html" data-trigger="modal" data-title="西安丽都国会普通大包">
						<img alt="" src="http://img1.yeduhui.cn/a4139517-d394-4871-96d0-18c4fff5ad38IMG_1731.JPG!m100x75.jpg" />
						<div class="ydh-detail-zoom iepng"></div>
					</a>
				</div>
			</li>
			<li class="ydh-detail-order-grid-people">{{$view->da_p1}}</li>
			<li class="ydh-detail-order-grid-low"><span><i class="f14">¥</i>{{$view->da_p2}}</span></li>
			<li class="ydh-detail-order-grid-info">有房</li>
			<li class="ydh-detail-order-grid-order"> <a href="/productInfo/AM2u9SLuKbSBaYU9qh6ypC.html" class="list-btn  text-left"   data-title="西安丽都国会">立即预订</a></li>
		</ul>

		<div class="ydh-search-member-tips pull-right mt10 mb10 mr10">
			<a href="#" data-tips="tips"
			title="<div class='tipsy-title'><span>Yeduhui会员专享</span></div>
			<div class='tipsy-content'>
				啤酒80元/瓶起价&nbsp;&nbsp;买三送一</br>红酒1580元/瓶起价&nbsp;&nbsp;部分特价买二送一</br>洋酒1580元/瓶起价&nbsp;&nbsp;名士马爹利系列买二送一</br>红酒1580元/瓶起价&nbsp;&nbsp;部分特价买二送一</br>啤酒80元/瓶起价&nbsp;&nbsp;买三送一</br>
			</div> "
			class="ydh-search-member-info pull-right">了解会员</a>Yeduhui会员优惠专享 ！
		</div>


	</div>

	<div class="w-spec-nav mb10 clearfix">
		<ul class="sn-list">
			<li id="j-info-all" class="specactive">
				<a href="javascript:void(0)">
					<span>本单详情</span>
				</a>
			</li>
			<li id="j-info-about">
				<a href="javascript:void(0)">
					<span>商家介绍</span>
				</a>
			</li>
			<li id="j-info-user">
				<a href="javascript:void(0)">
					<span>会员评价</span>
				</a>
			</li>
		</ul>
	</div>

	<div class="ydh-detail-info ie6css3 mb10" id="j-info-map" rel='pjax' data-src='/detail/map/S3GGcfvvsSz5tdocU6CEQF.html'>
	</div>

	<div class="ydh-detail-info ie6css3" id="j-info-intro">
		<span class="ydh-index-city-list  f14" id="company-info">夜店简介</span>
		<div class="ydh-detail-info-content collapsible">
			<div class="ydh-detail-c">西安阳光丽都国会私人商务会所设计之新颖，设施之完善，风格之独特，服务之规范在西安尚属首家。２０００余平米的演艺广场，拥有奇特的“流光溢彩”空间，国际级ＤＪ及专业乐队每晚为您演绎经典西安ｋｔｖ嘉年华。 阳光丽都国会的成立：该项目总投资１.２亿元人民币，占地近３５，０００平米，营业面积达７６，０００平米。 西安阳光丽都国会建成后，日接待人数可达４０００人左右，她将成为陕西文化娱乐宣传的窗口，有助于陕西文化娱乐品牌的提升，它将成为西部娱乐行业一颗璀璨的巨星，对陕西乃至全国的文化娱乐产业将产生巨大的引导和推动作用。 阳光丽都国会管理：公司导入国际一流的娱乐管理运作模式，以超一流的硬件设施，创造一流的服务品质，执着推行品牌战略，并以主导时尚潮流为一贯追求目标。我们不仅有专业的设施、全方位策划，更有一流的服务！我们不仅是娱乐的空间、时尚的舞台，更是文化的聚点！西安阳光丽都国会装修：百余间多功能包房在设计风格上以圆形为基调，无言地诠释着“和为贵”“和为美”的中国传统文化。特色的会员专区、雍容热烈的内涵格调、功能齐备的人文情怀、细致入微的体贴服务让这里成为俱乐部的亮点。西安阳光丽都国会服务宗旨：西安阳光丽都国会私人商务会所不仅有专业的设施、全方位策划，更有一流的服务！ 西安阳光丽都国会私人商务会所不仅是娱乐的空间、时尚的舞台，更是文化的聚点！西安阳光丽都国会会所是餐饮、娱乐、ＫＴＶ等活动的好地方，集高级、现代、时尚、私密于一体的空间。欢迎成功人士预订包间！
				夜都汇夜总会预订网www.yeduhui.cn</div>

				<div class="ydh-detail-btn text-right">
				</div>


			</div>
			<a class="ydh-index-city-list " >有用信息</a>
			<div class="ydh-detail-info-content collapsible ">
				<div class="ydh-detail-c"><div class="ydh-detail-c" style="height: auto;"><div><div class="pspacer" style="color: rgb(102, 102, 102); line-height: 24px; padding-top: 5px; padding-bottom: 5px; font-family:;"><div class="floatleft"><div class="ydh-detail-c" style="height: auto;"><div style="color: rgb(102, 102, 102); line-height: 24px; font-family: " microsoft="" yahei",="" 寰蒋闆呴粦,="" 瀹嬩綋,="" simsun;="" font-size:="" 12px;="" background-color:="" rgb(255,="" 255,="" 255);"=""><div class="pspacer" style="padding-top: 5px; padding-bottom: 5px; border-bottom-color: rgb(158, 158, 158); border-bottom-width: 1px; border-bottom-style: dotted;"><div class="floatleft">营业时间：19：00--02：30</div></div><div class="pspacer" style="padding-top: 5px; padding-bottom: 5px; border-bottom-color: rgb(158, 158, 158); border-bottom-width: 1px; border-bottom-style: dotted;"><div class="floatleft">开业时间：2008年</div></div><div class="pspacer" style="padding-top: 5px; padding-bottom: 5px; border-bottom-color: rgb(158, 158, 158); border-bottom-width: 1px; border-bottom-style: dotted;"><div class="floatleft">第二次装修时间：2012年</div></div></div><br style="color: rgb(102, 102, 102); line-height: 24px; font-family: " microsoft="" yahei",="" 寰蒋闆呴粦,="" 瀹嬩綋,="" simsun;="" font-size:="" 12px;="" background-color:="" rgb(255,="" 255,="" 255);"=""><div style="color: rgb(102, 102, 102); line-height: 24px; font-family: " microsoft="" yahei",="" 寰蒋闆呴粦,="" 瀹嬩綋,="" simsun;="" font-size:="" 12px;="" background-color:="" rgb(255,="" 255,="" 255);"=""><div class="overflow children_exbeds" style="width: 710px; overflow: hidden; clear: both; border-bottom-color: rgb(255, 255, 255); border-bottom-width: 1px; border-bottom-style: solid; background-color: rgb(239, 239, 241);"><div class="pull-left children_exbeds_col1" style="width: 110.39px; float: left;"><div class="overflow children_exbeds" style="width: 710px; overflow: hidden; clear: both; border-bottom-color: rgb(255, 255, 255); border-bottom-width: 1px; border-bottom-style: solid;"><div class="pull-left children_exbeds_col1" style="padding: 6px; width: 110.39px; float: left;"><span class="service-icon part" style="height: 20px; margin-right: 10px; display: inline-block;"><img style="border: currentColor; border-image: none; width: 21px !important; height: 21px !important; margin-right: 3px; vertical-align: middle;" src="http://lib.yeduhui.cn/img/pc/icon-wifi.jpg">WIFI</span></div><div class="pull-left children_exbeds_col2" style="padding: 6px; width: 483px; border-left-color: rgb(255, 255, 255); border-left-width: 1px; border-left-style: solid; float: left;">不收费</div></div><div class="overflow children_exbeds" style="width: 710px; overflow: hidden; clear: both; border-bottom-color: rgb(255, 255, 255); border-bottom-width: 1px; border-bottom-style: solid;"><div class="pull-left children_exbeds_col1" style="padding: 6px; width: 110.39px; float: left;"><span class="service-icon part" style="height: 20px; margin-right: 10px; display: inline-block;"><img style="border: currentColor; border-image: none; width: 21px !important; height: 21px !important; margin-right: 3px; vertical-align: middle;" src="http://lib.yeduhui.cn/img/pc/icon-tingche.jpg">停车场</span></div><div class="pull-left children_exbeds_col2" style="padding: 6px; width: 483px; border-left-color: rgb(255, 255, 255); border-left-width: 1px; border-left-style: solid; float: left;">免费！可提供私人停车设施。</div></div><div class="overflow children_exbeds" style="width: 710px; overflow: hidden; clear: both; border-bottom-color: rgb(255, 255, 255); border-bottom-width: 1px; border-bottom-style: solid;"><div class="pull-left children_exbeds_col1" style="padding: 6px; width: 110.39px; float: left;"><span class="service-icon part" style="height: 20px; margin-right: 10px; display: inline-block;"><img style="border: currentColor; border-image: none; width: 21px !important; height: 21px !important; margin-right: 3px; vertical-align: middle;" src="http://lib.yeduhui.cn/img/pc/icon-wc.jpg">卫生间</span></div><div class="pull-left children_exbeds_col2" style="padding: 6px; width: 483px; border-left-color: rgb(255, 255, 255); border-left-width: 1px; border-left-style: solid; float: left;">包间配独立卫生间。</div></div><div class="overflow children_exbeds" style="width: 710px; overflow: hidden; clear: both; border-bottom-color: rgb(255, 255, 255); border-bottom-width: 1px; border-bottom-style: solid;"><div class="pull-left children_exbeds_col1" style="padding: 6px; width: 110.39px; float: left;"><span class="service-icon part" style="height: 20px; margin-right: 10px; display: inline-block;">支持银联刷卡：</span></div><div class="pull-left children_exbeds_col2" style="padding: 6px; width: 483px; border-left-color: rgb(255, 255, 255); border-left-width: 1px; border-left-style: solid; float: left;"><img style="border: currentColor; border-image: none; width: 21px; height: 21px; vertical-align: middle;" src="http://lib.yeduhui.cn/img/pc/yinlian.png"> <img style="border: currentColor; border-image: none; width: 21px; height: 21px; vertical-align: middle;" src="http://lib.yeduhui.cn/img/pc/yl-1.jpg"> <img style="border: currentColor; border-image: none; width: 21px; height: 21px; vertical-align: middle;" src="http://lib.yeduhui.cn/img/pc/yl-2.jpg"> <img style="border: currentColor; border-image: none; width: 21px; height: 21px; vertical-align: middle;" src="http://lib.yeduhui.cn/img/pc/yl-3.jpg"> <img style="border: currentColor; border-image: none; width: 21px; height: 21px; vertical-align: middle;" src="http://lib.yeduhui.cn/img/pc/yl-4.jpg"></div></div></div></div></div></div></div></div></div><div><div class="overflow children_exbeds" style="width: 690px; color: rgb(102, 102, 102); line-height: 24px; overflow: hidden; clear: both; font-family:;"></div></div></div></div>

				<div class="ydh-detail-btn text-right">
				</div>

			</div>
		</div>

		<div class="ydh-detail-comment clearfix"  id="j-info-ugc">
			<div class="ydh-detail-comment-title" id="comment">客户对这家夜店的点评</div>
			<div class="ydh-detail-comment-filter-left pull-left">
				<ul>
					<li class="f14 fwb title">
						<div>选择游客类型
						</li>	
						<li class="ydh-detail-comment-type cur"  onclick="commentCatalog(null,event)" ><div><input type="radio" checked="checked"  name="comment" id="" />全部点评- - - - - - - -- - - (11)</div></li><li class="ydh-detail-comment-type"   onclick="commentCatalog('76bLPAfaZWPip4k5zZuC7f',event)"><div><input type="radio" name="comment" id="" />出差- - - - - - - -- - - (1)</div></li><li class="ydh-detail-comment-type"   onclick="commentCatalog('E2LRFTw61WfbekNTrVBsMd',event)"><div><input type="radio" name="comment" id="" />旅游- - - - - - - -- - - (5)</div></li><li class="ydh-detail-comment-type"   onclick="commentCatalog('68cTXUzFuTzzPEBTFtYX4g',event)"><div><input type="radio" name="comment" id="" />聚会- - - - - - - -- - - (4)</div></li><li class="ydh-detail-comment-type"   onclick="commentCatalog('GJKWt9CHdBR7iQs7Jt1eLw',event)"><div><input type="radio" name="comment" id="" />业务来往- - - - - - - -- - - (1)</div></li>
					</ul>
				</div>
				<div class="ydh-detail-comment-filter-right pull-right">
					<div
					class="ydh-detail-comment-filter-right-l pull-left text-center">
					<p>很好</p>
					<div class="ydh-detail-comment-tot">98.18%</div>
					<p id="commentCount" >来自11份点评</p>
				</div>
				<div class="ydh-detail-comment-filter-right-r pull-left">

					<div class="ydh-detail-comment-dl"></div>
					<div class="ydh-detail-comment-list">
						<span class="ydh-detail-comment-type pull-left">服务</span>
						<div class="ydh-detail-comment-progess pull-left">
							<div class="ydh-detail-comment-progess-a" style="width: 77px;"></div>
						</div>
						<span class="ydh-detail-comment-score pull-left">98.18%</span>
					</div>
					<div class="ydh-detail-comment-list">
						<span class="ydh-detail-comment-type pull-left">环境和清洁度</span>
						<div class="ydh-detail-comment-progess pull-left">
							<div class="ydh-detail-comment-progess-a" style="width: 77px;"></div>
						</div>
						<span class="ydh-detail-comment-score pull-left">98.18%</span>
					</div>

				</div>
			</div>
			<div class="clearit"></div>
			<div class="ydh-detail-comment-list-title">全部点评（11条）</div>
			<div class="ydh-detail-comment-list-item clearfix"><div class="ydh-detail-comment-list-user pull-left"><div class="ydh-detail-comment-list-user-avatar avatar-icon-1 iepng"><p class="f14 fwb pt8">匿名</p><p>聚会</p></div><p class="ydh-detail-comment-time">2014年12月27日</p></div><div class="ydh-detail-comment-list-info"><h3><span class="ydh-detail-comment-list-score pull-right">10</span></h3><p>在阳光国会消费，朋友过生日还送香槟，挺好的！</p></div></div><div class="ydh-detail-comment-list-item clearfix"><div class="ydh-detail-comment-list-user pull-left"><div class="ydh-detail-comment-list-user-avatar avatar-icon-1 iepng"><p class="f14 fwb pt8">匿名</p><p>出差</p></div><p class="ydh-detail-comment-time">2014年12月27日</p></div><div class="ydh-detail-comment-list-info"><h3><span class="ydh-detail-comment-list-score pull-right">10</span></h3><p>门头大气，请客户的好去处，下次来西安我们还来，服务绝对是一流的！面子十足</p></div></div><div class="ydh-detail-comment-list-item clearfix"><div class="ydh-detail-comment-list-user pull-left"><div class="ydh-detail-comment-list-user-avatar avatar-icon-1 iepng"><p class="f14 fwb pt8">匿名</p><p>旅游</p></div><p class="ydh-detail-comment-time">2014年10月31日</p></div><div class="ydh-detail-comment-list-info"><h3><span class="ydh-detail-comment-list-score pull-right">10</span></h3><p>虽然消费有點贵,但物有所值,服务好,环境好,美女多,很高档的，陪客户是个好去处。</p></div></div><div class="ydh-detail-comment-list-item clearfix"><div class="ydh-detail-comment-list-user pull-left"><div class="ydh-detail-comment-list-user-avatar avatar-icon-1 iepng"><p class="f14 fwb pt8">匿名</p><p>旅游</p></div><p class="ydh-detail-comment-time">2014年10月31日</p></div><div class="ydh-detail-comment-list-info"><h3><span class="ydh-detail-comment-list-score pull-right">10</span></h3><p>包房的话，贵了点，其他的都还好，夜都汇网上预定的还打了折,为了订单，也值了.</p></div></div><div class="ydh-detail-comment-list-item clearfix"><div class="ydh-detail-comment-list-user pull-left"><div class="ydh-detail-comment-list-user-avatar avatar-icon-1 iepng"><p class="f14 fwb pt8">匿名</p><p>聚会</p></div><p class="ydh-detail-comment-time">2014年10月31日</p></div><div class="ydh-detail-comment-list-info"><h3><span class="ydh-detail-comment-list-score pull-right">10</span></h3><p>很大型的俱乐部,人也蛮多的,价格虽然贵一点,但服务质量不错..值得一贊..</p></div></div><div class="ydh-detail-comment-list-item clearfix"><div class="ydh-detail-comment-list-user pull-left"><div class="ydh-detail-comment-list-user-avatar avatar-icon-1 iepng"><p class="f14 fwb pt8">匿名</p><p>聚会</p></div><p class="ydh-detail-comment-time">2014年10月31日</p></div><div class="ydh-detail-comment-list-info"><h3><span class="ydh-detail-comment-list-score pull-right">10</span></h3><p>环境相当靓，服务也是很不错的，商务宴请的确很不错，哈哈！！</p></div></div>

			<!-- xxxxxxxxx -->
			<div class="comment-more hide">
				<!-- 点击全部评论 后显示 剩余 评论 -->
				<div class="ydh-detail-comment-list-item clearfix"><div class="ydh-detail-comment-list-user pull-left"><div class="ydh-detail-comment-list-user-avatar avatar-icon-1 iepng"><p class="f14 fwb pt8">匿名</p><p>聚会</p></div><p class="ydh-detail-comment-time">2014年10月31日</p></div><div class="ydh-detail-comment-list-info"><h3><span class="ydh-detail-comment-list-score pull-right">10</span></h3><p>贵,很贵,非常贵,有钱人潇洒的地方! 环境一流，是商务宴请的好地方</p></div></div><div class="ydh-detail-comment-list-item clearfix"><div class="ydh-detail-comment-list-user pull-left"><div class="ydh-detail-comment-list-user-avatar avatar-icon-1 iepng"><p class="f14 fwb pt8">匿名</p><p>业务来往</p></div><p class="ydh-detail-comment-time">2014年10月31日</p></div><div class="ydh-detail-comment-list-info"><h3><span class="ydh-detail-comment-list-score pull-right">10</span></h3><p>是朋友带着去的，当时一大帮人，不知道打哪去玩，在夜都汇上找的，地方空间大，说起来，这家店已经是我第二次去了，装修的格调蛮有艺术感的，觉得不错。</p></div></div><div class="ydh-detail-comment-list-item clearfix"><div class="ydh-detail-comment-list-user pull-left"><div class="ydh-detail-comment-list-user-avatar avatar-icon-1 iepng"><p class="f14 fwb pt8">匿名</p><p>旅游</p></div><p class="ydh-detail-comment-time">2014年10月31日</p></div><div class="ydh-detail-comment-list-info"><h3><span class="ydh-detail-comment-list-score pull-right">10</span></h3><p>很喜欢这里的环境，这里的美女。每次陪老板去这里，虽然要自己给小费，但是几百块花的很值</p></div></div><div class="ydh-detail-comment-list-item clearfix"><div class="ydh-detail-comment-list-user pull-left"><div class="ydh-detail-comment-list-user-avatar avatar-icon-1 iepng"><p class="f14 fwb pt8">匿名</p><p>旅游</p></div><p class="ydh-detail-comment-time">2014年10月31日</p></div><div class="ydh-detail-comment-list-info"><h3><span class="ydh-detail-comment-list-score pull-right">9</span></h3><p>总体感觉只有一个字“贵”。要不是公司聚会，我是无论如何也不会去这种地方的</p></div></div><div class="ydh-detail-comment-list-item clearfix"><div class="ydh-detail-comment-list-user pull-left"><div class="ydh-detail-comment-list-user-avatar avatar-icon-1 iepng"><p class="f14 fwb pt8">匿名</p><p>旅游</p></div><p class="ydh-detail-comment-time">2014年10月31日</p></div><div class="ydh-detail-comment-list-info"><h3><span class="ydh-detail-comment-list-score pull-right">9</span></h3><p>环境、氛围、音乐，暧昧，都市的灯红酒绿，不管抱着何种目的，或许只是放松、或许是寻找艳遇，或许是享受暧味，这些，在这里都能并存。</p></div></div>
			</div>
			<a href="javascrpit:;" class="view-all-comment f14 fwb" >浏览全部11条点评
				>></a>
			</div>

			<div class="comment-order pull-right">
				<a href="#order" class="detail-btn  text-left">立即预订</a>
			</div>

			<div class="clearit"></div>
		</div>


	</div>


	<div class="nei-right pull-right">
		<div class="p-index-right p-index-right-code">
			<div class="moblie-title">夜都汇手机版</div>
			<div class="pd15 text-center">
				<img src="http://lib.yeduhui.cn/img/pc/p-index-code.jpg">
				<p class="text-center pd5 cfff">扫描二维码关注微信公众号</p>
				<img src="http://lib.yeduhui.cn/img/pc/p-index-app.jpg">
			</div>
		</div>
		<div class="p-index-right"><!-- <img src="http://lib.yeduhui.cn/img/pc/p-index-tel.jpg" /> --> </div>
		<div class="p-index-right">
			<div class="right-tuijian"><img src="http://lib.yeduhui.cn/img/pc/right-good.jpg"></div>
			<div class="list-history">
				<h5 class="history-list">浏览记录<span class="pull-right fxw-clear hide">清空</span></h5>
				<div class="list-history-item text-center fxw-his-wu">暂无记录</div>
			</div>
		</div>
	</div>
@stop
@section('scripts')
@parent
 <script src="/js/slides.js"></script> 
    <script src="/js/tipsy.js"></script>
    <script src="/js/ydh-pc.js"></script>
    <script src="/js/jcarousel.js"></script>
    <script src="/js/collapse.js"></script>
    <script src="/js/modal.js"></script>
	<script src="http://api.map.baidu.com/api?v=2.0&amp;ak=354c1f4cf3410c901abd3b6d004ae7fc"></script>
     <!--切换标签-->
     <script type="text/javascript">
     	var city = 'xian4';
        $('#j-info-all').click(function(){
        	window.history.replaceState("",document.title,"#all");
            $('#j-info-all').addClass('specactive')   
			$('#j-info-about').removeClass('specactive')
			$('#j-info-user').removeClass('specactive')
			
			$('#j-info-map').removeClass('hide')
			$('#j-info-intro').removeClass('hide')
			$('#j-info-ugc').removeClass('hide')
        });
		
		$('#j-info-about').click(function(){
			window.history.replaceState("",document.title,"#about");
            $('#j-info-all').removeClass('specactive')   
			$('#j-info-about').addClass('specactive')
			$('#j-info-user').removeClass('specactive')
			
			$('#j-info-map').addClass('hide')
			$('#j-info-intro').removeClass('hide')
			$('.comment-more').addClass('hide')
			$('.view-all-comment').addClass('hide')			
			$('#j-info-ugc').addClass('hide')
			$('.comment-more').addClass('hide')
        });
		$('#j-info-user').click(function(){
			window.history.replaceState("",document.title,"#comment");
            $('#j-info-all').removeClass('specactive')   
			$('#j-info-about').removeClass('specactive')
			$('#j-info-user').addClass('specactive')
			
			$('#j-info-map').addClass('hide')
			$('#j-info-intro').addClass('hide')
			$('#j-info-ugc').removeClass('hide')
			$('.comment-more').removeClass('hide')
        });
	 </script>
    
    <script type="text/javascript">
    $(function() {
        $('#scl').jcarousel({
            scroll: 1,
            animation: "fast",
            easing: 'swing',
            wrap:"circular"
        });
        $('.detail-job-ablum').slides({
            effect: 'slide',
            slideSpeed: 350,
            fadeSpeed: 500,
            hoverPause: true,
            generateNextPrev: true,
            generatePagination: false

        });

    });
    </script>
   
   
    <!--[if IE 6]>
    
    <script src="/ydhc/js/IE6png.js"></script>
    <script>
        DD_belatedPNG.fix('.iepng');
    </script>
    <![endif]-->


<script src="/js/index.js"></script>
<script src="/js/list.js"></script>
<script src="/js/header.js"></script>
@stop
