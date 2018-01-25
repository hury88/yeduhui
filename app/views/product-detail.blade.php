@extends('layouts.public')
@section('wapper')
<div class="page_wrap">
    <div class="wrap_box">
        <div class="inmodel-title">
            <h2>DETAILS</h2>
            <p>产品详情</p>
        </div>
        <div class="newsDE-box">
            <div class="newsDE-title">
                <h1>{{$view->title}}</h1>
            </div>
            <div class="newsDE-content">
                {!! $view->content ? : config('other.nocontent') !!}
            </div>
            <div class="pager-turn">
                <a class="pager-select" href="{{str_replace('detail', 'products', $view->previousLink)}}"><span>上一个：</span>{{$view->previousTitle}}</a>
                <a href="{{str_replace('detail', 'products', $view->nextLink)}}"><span>下一个：</span>{{$view->nextTitle}}</a>
            </div>
        </div>
    </div>
</div>
@stop