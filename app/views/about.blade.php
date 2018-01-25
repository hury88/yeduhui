@extends('layouts.master')
@section('wapper')
<div class="page_wrap">
  <div class="wrap_box">
    <div class="inmodel-title">
      <h2>INTRODUCTION</h2>
      <p>精微介绍</p>
    </div>
    <div class="introduce clearfix">
      <div class="introduce-left fl">
        <img src="{{src($data['img1'])}}"/>
      </div>
      <div class="introduce-right fr">
        <h3>{{$system_sitename}}</h3>
        <div class="intro-text">
          {!! htmlspecialchars_decode($data['content']) !!}
        </div>
      </div>
    </div>
  </div>
</div>
<div class="page_wrap culture" style="background: url({{src($data['img2'])}}) no-repeat center;background-size: cover">
  <div class="wrap_box">
    <div class="inmodel-title">
      <h2>CULTURE</h2>
      <p>精微文化</p>
    </div>
    <div class="culture-txt">
      <p>《礼记•中庸》篇：“尊德性而道问学，致广大而尽精微，极高明而道中庸。”</p>
      <span>经营理念: 设计为灵魂，匠心做工艺，材料重品质，服务心贴心管理理念: 诚实守信 德助匠心 知行合一 品质至上</span>
    </div>
  </div>
</div>
<div class="page_wrap">
  <div class="inmodel-title">
    <h2>environment</h2>
    <p>精微环境</p>
  </div>
  <div class="wrap_box culture-content">
    <div class="carousel-container">
      <div id="carousel">
        @foreach(M('pic')->where('ti=20')->field('img1,title')->select() as $row)
        <div class="carousel-feature">
          <img title="{{$row['title']}}" class="carousel-image" alt="{{$row['title']}}" src="{{src($row['img1'])}}">
        </div>
        @endforeach
      </div>
      <div id="carousel-left"><img src="/img/prev.png" height="30"/></div>
      <div id="carousel-right"><img  src="/img/next.png" height="30"/></div>
    </div>
  </div>
</div>
<div class="page_wrap join" style="background: url({{src($data['img3'])}}) no-repeat center;background-size: cover">
  <div class="inmodel-title">
    <h2>join  US</h2>
    <p>人才招聘</p>
  </div>
  <div class="wrap_box join-lists">
    <ul>
      <li>
        <a href="javascript:;">
          <img src="/img/about-icon1.png"/>
          <p>项目经理</p>
        </a>
      </li>
      <li>
        <a href="javascript:;">
          <img src="/img/about-icon2.png"/>
          <p>人事经理</p>
        </a>
      </li>
      <li>
        <a href="javascript:;">
          <img src="/img/about-icon3.png"/>
          <p>设计师</p>
        </a>
      </li>
      <li>
        <a href="javascript:;">
          <img src="/img/about-icon4.png"/>
          <p>推广专员</p>
        </a>
      </li>
      <li>
        <a href="javascript:;">
          <img src="/img/about-icon5.png"/>
          <p>产品经理</p>
        </a>
      </li>
      <li>
        <a href="javascript:;">
          <img src="/img/about-icon6.png"/>
          <p>市场专员</p>
        </a>
      </li>
      <li>
        <a href="javascript:;">
          <img src="/img/about-icon7.png"/>
          <p>采购员</p>
        </a>
      </li>
      <li>
        <a href="javascript:;">
          <img src="/img/about-icon8.png"/>
          <p>出纳专员</p>
        </a>
      </li>
    </ul>
  </div>
</div>
<div class="page_wrap news" id="pos">
  <div class="inmodel-title">
    <h2>INFORMATION</h2>
    <p>行业资讯</p>
  </div>
  <div class="wrap_box">
    <div class="scrolltab">
      <div class="new-jt aniview" av-animation="fadeInLeft">
        <span id="sLeftBtnA" class="sLeftBtnABan"><img src="/img/in-prev.png"></span>
        <span id="sRightBtnA" class="sRightBtnA"><img src="/img/in-next.png"></span>
      </div>
      <ul class="new-big-all aniview" av-animation="fadeInLeft">
        @foreach($news_data as $key=>$row)
        <li{!! $key==0?' class="liSelected"':'' !!}>
        <dl>
          <dt>
            <a href="{{v_url($row['id'])}}">
              <img src="{{src($row['img1'])}}" />
            </a>
          </dt>
          <dd>
            <h3><a href="javascript:;">{{$row['title']}}</a></h3>
            <p>
              {{cutstr($row['content'], 100)}}
            </p>
            <span><a href="{{v_url($row['id'])}}">more +</a></span>
          </dd>
        </dl>
      </li>
      @endforeach
    </ul>
    <!--new-big-all end-->
    <div class="new-small-all aniview" av-animation="fadeInRight">
      <div class="new-small">
        <ul class="new-ul" style="height:2646px;top:0px" rel="stop">
          @foreach($news_data as $key=>$row)
          <li{!! $key==0?' class="liSelected"':'' !!}>
          <dl>
            <dt><a href="javascript:;">
              <img src="{{src($row['img1'])}}"/>
            </a></dt>
            <dd>
              <a href="javascript:;">
                <p>{{$row['title']}}</p>
                <span>{{date('Y-m-d', $row['sendtime'])}}</span>
              </a>
            </dd>
          </dl>
          @endforeach
        </li>
      </ul>
    </div>
  </div>
  <!--new-small-all end-->
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
