@extends('layouts.master')
@section('wapper')
<div class="page_wrap pager-bg">
    <div class="wrap_box case-style">
        <a href="{{m_url(3)}}" style="margin:0"><span>风  格</span></a>
        @foreach($cate_data as $cate_id=>$cate_title)
        <a{!! $cate == $cate_id?' class="case-style-on"':'' !!} href="{{u('web/index', ['pid'=>3, 'ty'=> $ty, 'cate'=>$cate_id])}}">{{$cate_title}}</a>
        @endforeach
    </div>
    @foreach($data as $row)
    <div class="case-wrap">
        <div class="case-wrap-box" style="background: url({{$row['img2']?src($row['img2']):'/img/case-bg_02.jpg'}}) no-repeat center top;background-size: 100% auto;">
           <a href="{{v_url($row['id'],'cases')}}"><div class="case-small">
               <div class="case-content">
                   <img src="{{src($row['img1'])}}"/>
                   <h3> {{$row['title']}}</h3>
                   <p>【风 格： {{$row['content']}}】</p>
               </div>
               <div class="case-small-bg">
                   <img src="/img/case-bg.png"/>
               </div>
           </div></a>
        </div>
    </div>
    @endforeach
</div>
@stop
@section('scripts')
@parent
<script type="text/javascript" src="/js/jquery.SuperSlide.2.1.1.js"></script>
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
