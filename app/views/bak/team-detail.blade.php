@extends('layouts.public')
@section('wapper')
<div class="page_wrap">
    <div class="wrap_box">
        <div class="inmodel-title">
            <h2>{{$view->ftitle}}：{{$view->title}}</h2>
        </div>
    </div>
    <div class="team">
        <a href="javascript:;">
            <img src="{{$view->img1}}"/>
        </a>
        <div class="wrap_box member-intro">
            <p>{{$view->title}}</p>
            <h3><span>职 位 ：</span>{{$view->ftitle}}</h3>
            <h4>{{$view->source}}</h4>
            <h5><span>擅长风格：</span>{{$view->introduce}}</h5>
           <div class="intro-text clearfix">
               <div class="intro-text-left fl">
                   主 要 作 品 ：
               </div>
               <div class="intro-text-right fl">
                   <p>{{$view->content}}</p>
               </div>
           </div>
        </div>
    </div>
    <div class="index-case">
        <div class="inmodel-title">
            <h2>WORKS case</h2>
            <p>作品案例</p>
        </div>
        <div id="slideBox" class="slideBox">
            <div class="bd">
                <ul>
                    @foreach(M('news')->field('id,title,ftitle,img1')->where('id in('.$view->relative.')')->order(config('other.order'))->select() as $row)
                    <li>
                        <a class="organise-img" href="{{v_url($row['id'], 'cases')}}">
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
<div class="page_wrap">
    <div class="inmodel-title">
        <h2>Honor</h2>
        <p>荣誉奖励</p>
    </div>
    <div class="wrap_box culture-content">
        <div class="carousel-container">
            <div id="honor">
                @foreach(M('pic')->field('title,img1')->where('ti='.$view->id.' and ci=4')->order('disorder desc, id asc')->select() as $row)
                <div class="carousel-feature">
                    <a href="javascript:;" title="{{$row['title']}}"><img class="carousel-image" src="{{src($row['img1'])}}" alt="{{$row['title']}}"></a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
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
        var carousel = $("#honor").featureCarousel({
            //smallFeatureOffset:0
            sidePadding:0,
            smallFeatureWidth:0.45,
            smallFeatureHeight:0.45,
            startingFeature:1,
        });
    });
</script>

@stop