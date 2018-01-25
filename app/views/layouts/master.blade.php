<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" name="viewport">
	<title>@section('title') {{$system_seotitle}} @show</title>
	<meta name="keywords" content="{{$system_keywords}}">
	<meta name="description" content="{{$system_description}}">
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
	<link rel="stylesheet" href="/css/common.css"/>
	<link rel="stylesheet" href="/css/style.css"/>
	<link rel="stylesheet" href="/css/media.css"/>
	@yield('css')
</head>
<body>
	<div class="boxblack clearfix"></div>
	<div class="left_menu clearfix">
	    <dl>
	        <dd class="dd_title{{IS_INDEX?' cur':''}}"> <a href="/">首页</a> </dd>
	        {!! nav_danceng('<dd class="dd_title%s"> <a title="@$catname@" href="__URL__">@$catname@</a> </dd>') !!}
	    </dl>
	</div>
    <div class="wrap">
	{{-- Navigation bar section --}}
	@section('navigation')
		@include('partial.navigation')
	@show

	{{-- Breadcrumbs section --}}
	@section('breadcrumbs')
	@show

	{{-- Content page --}}
	@yield('wapper')

	@section('footer') {{-- 底部开始 --}}
	  @include('partial.footer')
	@show {{-- 底部结束 --}}
	</div>
</body>
@section('scripts')
<script type="text/javascript" src="/js/jquery-1.8.3.min.js"></script>
<script>
	//移动端左侧菜单
	$(".wap-nav").click(function(){
	  $(".boxblack").show();
	  $(".wrap").toggleClass("cur");
	  $(".left_menu").toggleClass("cur");

	});

	$(".boxblack").click(function(){
	  $(".boxblack").hide();
	  $(".wrap").removeClass("cur");
	  $(".left_menu").removeClass("cur");
	});

   $(window).scroll(function(){
   		var $this = $(this);
   		var targetTop = $(this).scrollTop();
   		var height = $(window).height();
   		if(targetTop >0){
   			if($(".nav-box").hasClass("cur-nav")){
   			}else{
   				$(".nav-box").addClass("cur-nav");
   			}
   		}else{
   			if($(".nav-box").hasClass("cur-nav")){

   				$(".nav-box").removeClass("cur-nav");
   			
   			}else{}
   		}
   	})
</script>
@show
</html>