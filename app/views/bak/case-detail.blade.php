@extends('layouts.public')
@section('wapper')
<div class="page_wrap pager-bg">
    <div class="wrap_box">
        <div class="caseDE-title">
            <h2>{{$view->title}}</h2>
            <h3>{{$view->ftitle}}</h3>
            <p>【风 格：{{$view->content}}】</p>
        </div>
        <div class="caseDE-intro">
            <h4>设计说明</h4>
            {!! htmldecode($view->content2) !!}
        </div>
        <div class="caseDE-show">
            <?php
                $p1 = M('pic')->field('title,img1')->where('ti='.$view->id.' and ci=1 and isstate=1')->order('disorder desc, id asc')->select();
                $p2 = M('pic')->field('title,img1')->where('ti='.$view->id.' and ci=2')->order('disorder desc, id asc')->select();
                $p3 = M('pic')->field('title,img1')->where('ti='.$view->id.' and ci=3')->order('disorder desc, id asc')->select();
             ?>
             @if($p1)
            <div class="case-one clearfix">
                <div class="fl case-one-title">
                    <p>平面户型图</p>
                </div>
                <div class="fr case-one-map">
                    @foreach($p1 as $row)
                    <img src="{{src($row['img1'])}}" alt="{{$row['title']}}">
                    @endforeach
                </div>
            </div>
             @endif
             @if($p2)
            <div class="case-one clearfix">
                <div class="fl case-one-map">
                    @foreach($p2 as $row)
                    <img src="{{src($row['img1'])}}" alt="{{$row['title']}}">
                    @endforeach
                </div>
                <div class="fr case-one-title">
                    <p>三维户型图</p>
                </div>
            </div>
             @endif
             @if($p3)
            <div class="case-two clearfix">
                <h3 class="casede-show-title">效果图</h3>
                <div class="casede-conten">
                    @foreach($p3 as $row)
                    <img src="{{src($row['img1'])}}" alt="{{$row['title']}}" style="margin-bottom: 24px;">
                    @endforeach
                </div>
            </div>
             @endif
        </div>
    </div>
</div>
@stop
