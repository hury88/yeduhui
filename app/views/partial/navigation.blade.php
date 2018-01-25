<div class="page_wrap wap-header">
  <div class="wrap_box">
    <a class="wap-logo fl" href="javascript:;"> <img src="/img/logo.png"> </a>
    <a class="wap-nav fr" href="javascript:;"> <img src="/img/nav.png"> </a>
</div>
</div>
<div class="page_wrap banner">
    @if(IS_INDEX)
    <div class="indexBanner-team">
     <div class="slideBanner">
       <div class="bd">
         <ul>
            {!! vv(7, 15, '<li><a title="@$title@" href="@$linkurl@" target="_blank"><img src="__IMG__"></a></li>'); !!}
        </ul>
    </div>
    <div class="hd">
     <ul>
        {!! vv(7, 15, '<li></li>'); !!}
    </ul>
</div>
<div class="clearfix"></div>
<a class="prev" href="javascript:void(0)"></a>
<a class="next" href="javascript:void(0)"></a>
</div>
</div>
@else
<img src="{{$pid_img1}}">
@endif
<div class="nav-box">
   <div class="wrap_box nav-box-warp">
     <ul>
       <li class="nav-li">
         <a href="/web/index/pid/1">我要装修</a>
     </li>
     <li class="nav-li">
         <a href="/web/index/pid/2">关于精微</a>
     </li>
     <li class="nav-li">
         <a href="/web/index/pid/3">精微案例</a>
     </li>
     <li class="logo">
        <a href="/"><img src="{{$system_logo1}}"></a>
     </li>
     <li class="nav-li">
         <a href="/web/index/pid/4">产品中心</a>
     </li>
     <li class="nav-li">
         <a href="/web/index/pid/5">精微团队</a>
     </li>
     <li class="nav-li">
         <a href="/web/index/pid/6">VIP订制</a>
     </li>
 </ul>
</div>
</div>
@if($pid==1)
<div class="install">
  <div class="wrap_box install-type">
    <ul class="install-ul">
      @foreach($cate_data as $cate_id=>$cate_title)
      <li><a{!! $cate == $cate_id?' style="background: rgba(117,17,1,.80);"':'' !!} href="{{u('web/index', ['pid'=>$pid, 'ty'=> 8, 'cate'=>$cate_id])}}#pos">{{$cate_title}}</a></li>
      @endforeach
      <li>
        <a href="{{$system_link1}}" target="_blank">在线报价</a>
      </li>
    </ul>
  </div>
</div>
@endif
</div>
