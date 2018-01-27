@extends('layouts.master')
@section('css') <link rel="stylesheet" type="text/css" href="/css/jiameng.css" />@stop

@section('wapper')
<div class="ydh-wapper wapper-bg">
    <div class="ydh-main clearfix">
        <div class="ydh-crumbs ">
            {!! pc_bread() !!}
        </div>
        <div class="ydh-list-left pull-left">
            <div class="ydh-about ie6css3">
                <div class="ydh-why-title">关于我们</div>
                <ul class="ydh-about-content">
                    {!!about_nav(5)!!}
                </ul>
            </div>
        </div>

        <div class="ydh-about-right pull-right">
            <div class="ydh-about-wapper mb20 clearfix ie6css3 " id='order'>
               <div class="ydh-about-title f14">{{$ty_catname}}</div>
               <div class="banquan">
                    {!! htmlspecialchars_decode($data['content']) !!}
                </div>
            </div>
        </div>
    </div>
</div>

</div>
@stop
@section('scripts')
@parent
<script type="text/javascript" src="/js/jquery.featureCarousel.min.js"></script>
<script type="text/javascript" src="/js/common.js"></script>
<script>
$(document).ready(function() {
  var carousel = $("#carousel").featureCarousel({
      //smallFeatureOffset:0
      sidePadding:0,
      smallFeatureWidth:0.65,
      smallFeatureHeight:0.65,
      startingFeature:1,
    });
});
</script>
@stop
