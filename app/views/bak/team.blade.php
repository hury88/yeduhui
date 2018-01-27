@extends('layouts.master')
@section('wapper')
<div class="page_wrap">
    <div class="wrap_box">
        <div class="inmodel-title">
            <h2>member</h2>
            <p>团队成员</p>
        </div>
    </div>
    @foreach(v_data(5,12,'id,title,ftitle,img1') as $key=>$row)
    <div class="team">
        <a href="{{v_url($row['id'],'team')}}">
            <img alt="{{$row['title']}}" src="{{src($row['img1'])}}"/>
        </a>
        <div class="wrap_box team-mess">
            <p>{{$row['title']}}</p>
            <h3>{{$row['ftitle']}}</h3>
            <p class="team-link">
                <a href="javascript:;"><img src="/img/right.png"/></a>
                <a href="{{v_url($row['id'],'team')}}">了解更多</a>
                <a href="javascript:;"><img src="/img/left.png"/></a>
            </p>
        </div>
    </div>
    @endforeach
</div>
@stop
@section('scripts')
@parent
@stop
