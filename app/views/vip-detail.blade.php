@extends('layouts.public')
@section('wapper')
<div class="page_wrap pager-bg">
    <div class="wrap_box">
        <div class="caseDE-title">
            <h2>{{$view->title}}</h2>
            <!-- <h3>{{$view->ftitle}}</h3> -->
        </div>
        <div class="caseDE-show">
            {!! htmldecode($view->content) !!}
        </div>
    </div>
</div>
@stop
