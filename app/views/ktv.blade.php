@extends('layouts.master')
@section('css')
<style>
@media screen and (min-width: 1024px) and (max-width: 1920px) {
	.wrap {
		width: 1180px !important;
	}

	.search-area {
		width: 213px !important;
	}

	.catg-header-inner {
		width: 235px !important;
	}

	.p-index-good {
		width: 695px !important;
	}

	.main-list-box {
		width: 965px !important;
	}

	.goods-item {
		width: 304px !important;
	}

	.goods-item img {
		width: 304px;
		position: absolute;
	}
}
</style>
@stop

@section('wapper')
<div class="nei-main">
	<div class="filter">

		<div class="ydh-list-area">
			<span class="p10 pull-left"><strong>区域</strong></span>
			<ul>
				<li><a {!! empty($location) && empty($zone) ? 'class="active" ' : '' !!}href="/ktv/">全部</a></li>
				@foreach($ktv->getQuYu() as $item)
				<li><a {!! $location == $item['id'] ? 'class="active" ' : '' !!}href="/ktv/index/location/{{$item['id']}}">{{$item['title']}}</a></li>
				@endforeach
			</ul>
		</div>


		<div class="ydh-list-businesscircle">
			<span class="p10  pull-left"><strong>商圈</strong></span>
			<ul>
				<li><a {!! empty($zone) && empty($location) ? 'class="active"' : '' !!}href="/ktv/">全部</a></li>
				@foreach($ktv->getShangQuan() as $item)
				<li><a {!! $zone == $item['id'] ? 'class="active" ' : '' !!}href="/ktv/index/zone/{{$item['id']}}">{{$item['title']}}</a></li>
				@endforeach
			</ul>
		</div>

		<div class="ydh-list-filter ie6css3 mt10">
			<ul class="clearfix">
				<!--                         <li class="ydh-list-filter-title">排序方式:</li> -->
				<li class="ydh-list-filter-content">
					<dl>
						<dd class="ydh-list-filter-type pull-left active bp75"><p>默认排序</p></dd>
						<a href="{{$ktv->condition('star', $star, $cate_id, $cate_name)}}"><dd class="ydh-list-filter-type sortBy iepng desc{{$star == 1 ?' desc-cur':($star == 2?' asc-cur':'')}}" title="按照星级排序">
							<span id="sortST"class="sortBy">星级</span>
						</dd></a>

						<a href="{{$ktv->condition('price', $price, $cate_id, $cate_name)}}"><dd class="ydh-list-filter-type sortBy iepng desc{{$price == 1 ?' desc-cur':($price == 2?' asc-cur':'')}}" title="按照价格排序">
							<span id="sortP"class="sortBy">价格</span>
						</dd></a>
						<a href="{{$ktv->condition('dotlike', $dotlike, $cate_id, $cate_name)}}"><dd class="ydh-list-filter-type sortBy iepng desc{{$dotlike == 1 ?' desc-cur':($dotlike == 2?' asc-cur':'')}}" title="按照用户评分排序">
							<span id="sortS"class="sortBy">评分</span>
						</dd></a>
						<dd class="ydh-list-title pull-right mr10">为您搜索到<span id="companyCount">{{$totalRows}}</span>家夜店</dd>
					</dl>
				</li>


			</ul>

		</div>
		<div class="ydh-list-content">
			@foreach($data as $index => $item)
			<div class="ydh-list-item clearfix">
				<div class="ydh-list-item-pic pull-left">
					<div class="list-ablum-yd list-ablum">
						<div class="slides_container-yd slides_container">
							<img src="{{src($item['img1'])}}" alt="{{$item['title']}}">
						</div>
					</div>
				</div>
				<div class="ydh-list-item-info pull-right">
					<h2>
						<span class="ydh-index-comment pull-right iepng"> <a href="/ktv/club/id/{{$item['id']}}#comment">好评率 98.18%</a> </span>
						<span class="title-num">{{$index+1}}</span><a href="/ktv/club/id/{{$item['id']}}" target="_blank">{{$item['title']}}</a>
						<span class="ydu-fg">[{{config('webarr.star')[$item['star']]}}]</span>
					</h2>
					<p class="ydh-list-item-place-yd">
						<a href="/ktv/club/id/{{$item['id']}}" target="_blank">碑林区 雁塔北路17号(李家村万达广场对面)</a>
						<a href="../club/../detail/map/S3GGcfvvsSz5tdocU6CEQF.html" data-trigger="modal" data-title="{{$item['title']}}"> <span class="ydh-view-map iepng">查看地图</span></a>
					</p>
					<div class="ydh-list-item-detailpc">
						<div class="ydh-list-item-room-type pull-left iepng">普通小包</div>
						<div class="ydh-list-item-room-people pull-left">适合{{$item['xiaobao_p1']}}人</div>
						<div class="ydh-list-item-room-is pull-left">有房</div>
						<div class="ydh-list-item-room-price pull-left text-right">最低消费<span> <i class="f14">¥</i>{{$item['xiaobao_p2']}}</span>
						</div>
					</div>
					<p class="ydh-list-item-place-yd"><a href="/ktv/club/id/{{$item['id']}}#order" target="_blank">其他包间类型 &gt;&gt;</a></p>
					<p class="ydh-list-item-service">
						{!! vv_data(M('news')->where('pid=8 and ty=28 and id in('.$item['service'].') and isstate=1')->order('id desc')->field('title')->select(), '<span class="part">@$title@</span>&nbsp;&nbsp;') !!}
					</p>
					<div class="ydh-list-item-btn-wapper text-right"><a href="/ktv/club/id/{{$item['id']}}" class="list-btn pull-right text-left" target="_blank">立即预订</a> </div>
				</div>
			</div>
			@endforeach



			<div class="list-pages text-left">
				{!!$pagestr!!}
			</div>

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
<!-- footer end -->
<script src="/js/slides.js"></script>
<script src="/js/modal.js"></script>
<script>
var url = "/";
var city = "xian4";
var requestPath = "/xian4/";
</script>

<script src="/js/index.js"></script>
<script src="/js/list.js"></script>
<script src="/js/header.js"></script>
@stop
