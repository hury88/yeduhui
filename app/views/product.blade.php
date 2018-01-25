@extends('layouts.master')
@section('wapper')
<div class="page_wrap">
    <div class="wrap_box">
        <div class="delever">
            <div class="inmodel-title">
                <h2>process</h2>
                <p>产品配送流程</p>
            </div>
            <ul>
                <li class="pro-item">
                    <a href="javascript:;">
                        <div class="proimg-wrap">
                            <img src="/img/pro-icon1.png"/>
                        </div>
                        <p>工程部下单</p>
                    </a>
                </li>
                <li class="pro-jiantou">
                    <div class="jiantou">
                        <img src="/img/pro-icon2.png"/>
                    </div>
                </li>
                <li class="pro-item">
                    <a href="javascript:;">
                        <div class="proimg-wrap">
                            <img src="/img/pro-icon3.png"/>
                        </div>
                        <p>物流中心发货</p>
                    </a>
                </li>
                <li class="pro-jiantou">
                    <div class="jiantou">
                        <img src="/img/pro-icon2.png"/>
                    </div>
                </li>
                <li class="pro-item">
                    <a href="javascript:;">
                        <div class="proimg-wrap">
                            <img src="/img/pro-icon4.png"/>
                        </div>
                        <p>质检员审核</p>
                    </a>
                </li>
                <li class="pro-jiantou">
                    <div class="jiantou">
                        <img src="/img/pro-icon2.png"/>
                    </div>
                </li>
                <li class="pro-item">
                    <a href="javascript:;">
                        <div class="proimg-wrap">
                            <img src="/img/pro-icon5.png"/>
                        </div>
                        <p>工程部签字确认</p>
                    </a>
                </li>
                <li class="pro-jiantou">
                    <div class="jiantou">
                        <img src="/img/pro-icon2.png"/>
                    </div>
                </li>
                <li class="pro-item">
                    <a href="javascript:;">
                        <div class="proimg-wrap">
                            <img src="/img/pro-icon6.png"/>
                        </div>
                        <p>拍照发业主</p>
                    </a>
                </li>
                <li class="pro-jiantou">
                    <div class="jiantou">
                        <img src="/img/pro-icon2.png"/>
                    </div>
                </li>
                <li class="pro-item">
                    <a href="javascript:;">
                        <div class="proimg-wrap">
                            <img src="/img/pro-icon7.png"/>
                        </div>
                        <p>配送施工场地</p>
                    </a>
                </li>
            </ul>
        </div>
        <div class="advantage">
            <div class="inmodel-title">
                <h2>advantage</h2>
                <p>产品配送优势</p>
            </div>
            <ul>
                @foreach(v_data(4,11,'title,img1', 4) as $key=>$row)
                <li>
                    <a href="javascript:;">
                        <img src="{{src($row['img1'])}}"/>
                        <p>{{$row['title']}}</p>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
<div class="page_wrap pro-alliance">
    <a href="javascript:;">
        <img src="/img/pro-bg_01.jpg"/>
    </a>
</div>
<div class="wrap_box pro-brand">
    @foreach(M('news')->where('pid=4 and ty=27')->order('disorder desc, isgood desc, id asc')->getField('id,title') as $bid=>$btitle)
    <div class="probrand-title">
        <h3>{{$btitle}}</h3>
    </div>
    <ul class="brand-list">
        @foreach(M('news')->field('id,title,img1,introduce')->where('pid=4 and ty=26 and istop2='.$bid)->order(config('other.order'))->select() as $row)
        <li>
            <a href="{{v_url($row['id'],'products')}}" title="{{$row['title']}}">
                <div class="brand-img">
                    <img alt="{{$row['title']}}" src="{{src($row['img1'])}}"/>
                </div>
                <h4>{{$row['title']}}</h4>
                <p>{{$row['introduce']}}</p>
            </a>
        </li>
        @endforeach
    </ul>
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
