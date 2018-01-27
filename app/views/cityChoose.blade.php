@extends('layouts.master')
@section('wapper')
    <!-- main start -->
    <div class="ydh-wapper">
        <div class="ydh-main clearfix">
            <div class="change-city f14">
                <h3>当前城市：</h3>
                <p style="line-height: 26px">
                    {{$ktv->getCityName()}}
                </p>
            </div>

            <div class="change-city f14">
                <h3>常用城市：</h3>
                <p>
                    {!! vv_data($ktv->getCity(), '<a href="/index/set/city/@$title@">@$title@</a>') !!}
                </p>
            </div>

            {{--<p class="city-subscription">如果以上没有您要找的城市，请<a href="javascript:void(0);" class="cc">点击&gt;&gt;</a>。当城市开通后，您可以第一时间收到最新信息！</p> --}}

        </div>

    </div>
    <!-- main end -->
@stop
@section('scripts')
@parent
<script src="/js/slides.js"></script>

<script src="/js/index.js"></script>
<script src="/js/header.js"></script>
@stop
