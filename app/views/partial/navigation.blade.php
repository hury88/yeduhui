@if(in_array($pid, [3,5])) {{-- 不带搜索的导航 --}}
<div class="wrap pd30"></div>
<div class="menu mb20">
 <div class="wrap clearfix max-wrap">
  <div class="catg-header-inner">
    <div class="catg-header-title">
      <img src="/images/logo-menu.png" height="40px;" />
    </div>
  </div>
  <div class="nav">
   <a href="/" class="nav-item active">首页</a>
   <a href="javascript:void(0);" class="nav-item">商务KTV会所</a>
   <a href="javascript:void(0);" class="nav-item">酒吧/演艺</a>
   <a href="javascript:void(0);" class="nav-item">求职</a>
 </div>
</div>
</div>
@else
<!-- top start -->
<div class="new-top-content">
  <!-- banner -->
  <div class="wrap ydh-index-focus">
    <div id="slides_banner_container"  class="slides_container">
    {!! vv(7, 16, '<a title="@$title@" href="@$linkurl@" target="_blank"> <img class="slider-img" src="__IMG__" /> </a>') !!}
  </div>
</div>
<!-- banner -->
</div>
<div class="top-my">
  <div class="wrap">
    <div class="city-area pull-left">
      <span class="city-name">{{$ktv->getCityName()}}</span>
      <a href="/index/cityChoose" class="city-info-toggle">[切换城市]</a>
    </div>
   {{-- <ul class="uc-login-list clearfix pull-right">
      <li>
        <a id="header_my" href="/uc/init" class="link mm-link">我的订单</a>
        <span class="line-sprite"></span>
      </li>
      <li class="login">
        <a id="header_login" href="/uc/login?u=http://www.yeduhui.cn" id="j-barLoginBtn" class="link mm-link">登录</a>
        <span class="line-sprite"></span>
      </li>
      <li class="reg">
        <a id="header_logout" href="/uc/reg" class="link mm-link" id="j-barRegBtn">注册</a>
      </li>
    </ul>
    --}}
  </div>
</div>

<div class="wrap new-top">
  <div class="new-top-content">
    <h1 class="new-logo pull-left">
      <a href="/" title="夜都汇">夜都汇</a>
    </h1>
    <h6 style="font-weight: 100;position: absolute;top: 180px;">{{$system_sitename}}</h6>
    <div class="search-box">
      <form>
        <input type="text" class="search-box-input search-keyword-input"
        value="" placeholder="请输入会所名称" /> <input type="button"
        class="search-box-button search-enter-button"
        value="搜&nbsp;&nbsp;索" />
      </form>

      <div class="search-suggest keyword-panel hide">
        <p>
          若需缩小范围，请输入更多条件。<span class="pull-right close-keyword-panel">X</span>
        </p>
        <ul class='suggest-companys'>
        </ul>
        <ul class='suggest-county'>
        </ul>
        <ul class='suggest-business'>
        </ul>
      </div>

      @if($method<>'cityChoose')
      <div class="search-box-hot">
        <div class='s-hot'><a class='hot-link' href='/xian4/location41/'>碑林区</a><a class='hot-link' href='/xian4/location42/'>莲湖区</a><a class='hot-link' href='/xian4/location45/'>雁塔区</a><a class='hot-link' href='/xian4/location233/'>高新区</a><a class='hot-link' href='/xian4/zone136/'>高新路</a><a class='hot-link' href='/xian4/zone141/'>经开区</a><a class='hot-link' href='/xian4/zone132/'>解放路</a><a class='hot-link' href='/xian4/zone133/'>钟楼</a></div>
      </div>
      @endif
    </div>

    <a class="site-commitment" href="/joins.html" target="_blank"> <span
      class="commitment-item">免费申请加盟合作</span>
    </a>

  </div>

</div>
<script>
var city="xian4";
</script>

<!-- top end -->
@if($method<>'cityChoose')
<div class="menu">
  <div class="wrap clearfix   max-wrap">

    <div class="catg-header-inner">
      <div class="catg-header-title">全部商家</div>
    </div>

    <div class="nav" >
      <a href="/" class="nav-item active" >首页</a>
      <a href="/ktv" class="nav-item">{{v_news_cats(2, 'catname')}}</a>
    </div>
  </div>
</div>
@endif {{-- 排除 选择城市页 --}}

@endif
