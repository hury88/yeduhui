@extends('layouts.public')
@section("css")
<style>
    /*
    新闻详情*/
    .news-detials{padding-top: 10px; }
    .news-detials-title{text-align: center; }
    .news-detials-title h3{color: #161514; font-size:24px; padding: 0 0 20px 0; width: 674px; margin: 0 auto; border-bottom: 1px dashed #8f816a; }
    .news-detials-title p{color: #999999; font-size: 12px; margin: 8px 0; }
    .news-detials-title p span{color: #999999; font-size: 12px; margin-right: 20px; }
    .news-detials-content{padding: 26px 0 38px 0; }
    .news-pager a{color: #747474; font-size: 14px; margin-bottom: 14px; }
    .news-pager a span{color: #aa7f45; font-size:14px; }
</style>
@stop
@section('right')
<div class="comintro-content">
 <div class="news-detials">
     <div class="news-detials-title">
         <h3>{{$view->title}}</h3>
         <p><span>来源：{{$view->name}}</span>发布时间：{{$view->time}} </p>
     </div>
     <div class="news-detials-content">
        {!! $view->content !!}
    </div>
<div class="news-pager">
    <a href="{{$view->previousLink}}"><span>上一篇：</span>{{$view->previousTitle}}</a>
    <a href="{{$view->nextLink}}"><span>下一篇：</span>{{$view->nextTitle}}</a>
</div>
</div>
</div>
@stop
@section('scripts')
@parent
<script src="/js/plugins/jquery.js"></script>
@stop

