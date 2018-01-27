@extends('layouts.public')
@section('wapper')
<div class="page_wrap">
    <div class="wrap_box">
        <div class="inmodel-title">
            <h2>DETAILS</h2>
            <p>动态详情</p>
        </div>
        <div class="newsDE-box">
            <div class="newsDE-title">
                <h1>{{$view->title}}</h1>
                <p><span>来源：{{$view->name}}</span><span>时间：{{$view->time}}</span></p>
            </div>
            <div class="newsDE-content">
                {!! $view->content !!}
            </div>
            <div class="pager-turn">
                <a class="pager-select" href="{{$view->previousLink}}"><span>上一篇：</span>{{$view->previousTitle}}</a>
                <a href="{{$view->nextLink}}"><span>下一篇：</span>{{$view->nextTitle}}</a>
            </div>
        </div>
    </div>
</div>
@stop