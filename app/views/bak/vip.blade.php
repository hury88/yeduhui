@extends('layouts.master')
@section('wapper')
<div class="page_wrap vip-design">
    <div class="wrap_box">
        <div class="inmodel-title">
            <h2>VIP DESIGN</h2>
            <p>VIP设计</p>
        </div>
    </div>
    <div class="index-case">
        <div id="slideBox" class="slideBox">
            <div class="bd">
                <ul>
                    @foreach(v_data(6,13,'img1,title,ftitle,id') as $row)
                    <li>
                        <a class="organise-img" href="{{v_url($row['id'],'cases')}}">
                            <img src="{{src($row['img1'])}}" />
                            <div class="case-cover"></div>
                        </a>
                        <div class="organise-mess">
                            <p>{{$row['title']}}</p>
                            <span>{{$row['ftitle']}}</span>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="clearfix"></div>
            <div class="case-zhishi">
                <a class="prev" href="javascript:void(0)"></a>
                <a class="case-middle" href="javascript:;"></a>
                <a class="next" href="javascript:void(0)"></a>
            </div>
        </div>
    </div>
</div>
<div class="page_wrap vip-bg">
    <div class="wrap_box free">
        <ul>
            <li>
                <a href="javascript:;">
                    <img src="/img/vip-img_01.jpg"/>
                    <div class="free-box">
                        <p>免费</p>
                        <h3>上门量尺寸</h3>
                        <span>Free door size</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    <img src="/img/vip-img_02.jpg"/>
                    <div class="free-box">
                        <p>优先</p>
                        <h3>VIP定制方案</h3>
                        <span>Free customization scheme</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    <img src="/img/vip-img_03.png"/>
                    <div class="free-box">
                        <p>免费</p>
                        <h3>全程方案沟通</h3>
                        <span>Whole scheme communication</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    <img src="/img/vip-img_04.jpg"/>
                    <div class="free-box">
                        <p>免费咨询</p>
                        <h3>风水大师</h3>
                        <span>Feng Shui Master</span>
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <div class="wrap_box steps-box">
        @foreach(v_data(6,29,'title,ftitle,img1,id') as $key=>$row)
        @if($key%2==0)
        <div class="inmodel-title">
            <h2>{{$row['ftitle']}}</h2>
            <p>{{$row['title']}}</p>
        </div>
        <div class="steps">
            <div class="step-text">
                <ul class="step-text-ul">
                    @foreach(M('news')->field('id,title,content')->where('istop2='.$row['id'])->order(config('other.disorder'))->limit(3)->select() as $row2)
                    <li>
                       <a href="{{v_url($row2['id'],'vip')}}/pid/6">
                           <h4>{{$row2['title']}}</h4>
                           <p>{{cutstr($row2['content'],90)}}<span>more +</span></p>
                       </a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="step-img fr">
                <img src="{{src($row['img1'])}}"/>
            </div>
        </div>
        @else
        <div class="inmodel-title">
            <h2>{{$row['ftitle']}}</h2>
            <p>{{$row['title']}}</p>
        </div>
        <div class="step-differ">
            <div class="step-img fl">
                <img src="{{src($row['img1'])}}"/>
            </div>
            <div class="step-differ-text">
                <ul class="step-text-ul">
                    @foreach(M('news')->field('id,title,content')->where('istop2='.$row['id'])->order(config('other.disorder'))->limit(3)->select() as $row2)
                    <li>
                       <a href="{{v_url($row2['id'],'vip')}}/pid/6">
                           <h4>{{$row2['title']}}</h4>
                           <p>{{cutstr($row2['content'],90)}}<span>more +</span></p>
                       </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endif
    @endforeach
</div>
@stop
@section('scripts')
@parent
<script type="text/javascript" src="/js/jquery.SuperSlide.2.1.1.js"></script>
<script type="text/javascript" src="/js/jquery.featureCarousel.min.js"></script>
<script type="text/javascript" src="/js/common.js"></script>
<script>
  jQuery(".slideBox").slide({mainCell:".bd ul",effect:"leftLoop", vis:3,autoPlay:true});
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
