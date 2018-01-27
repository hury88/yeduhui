@extends('layouts.master')
@section('css')
<style>
@media screen and (min-width: 1024px) and (max-width: 1920px) {
  .wrap{ width:1180px !important;}
  .search-area{ width:213px !important;}
  .catg-header-inner{ width:235px !important;}
  .p-index-good{ width:695px !important;}
  .main-list-box {width:965px  !important;}
  .goods-item{width:304px !important;}
  .goods-item img{width:304px; position:absolute; }
  .search-suggest{ width:549px;}
  .goods-item:last-child{ display:block;}
  .img-area{ display:block}
}
</style>
@stop

@section('wapper')
<!-- p-index start -->
<div class="p-index">
  <div class="wrap" style="height:380px;">
    <div class="search-area">
      <div class="search-area-add">
        <h5>全部区域:</h5>
        {!! vv_data($ktv->getQuYu(), '<a href="/web/ktv/quyu/@$title@">@$title@</a>') !!}
      </div>
      <div class="search-area-hot">
        <h5>热门商圈:</h5>
        {!! vv_data($ktv->getShangQuan(), '<a href="/web/ktv/quyu/@$title@">@$title@</a>') !!}
      </div>

    </div>
    <div class="p-index-good">
      <h5 class="f16">本周推荐</h5>
      <div><img src="images/hot-1.jpg" /></div>
    </div>
    <div class="p-index-right p-index-right-code">
      <div class="moblie-title">夜都汇手机版</div>
      <div class="pd15 text-center">
        <img src="images/p-index-code.jpg" />
        <p class="text-center pd5 cfff">扫描二维码关注微信公众号</p>
        <img src="images/p-index-app.jpg" />
      </div>
    </div>
    <div  class="p-index-right"><!--<img src="images/p-index-tel.jpg" />--></div>

  </div>
</div>

<!-- p-index end -->

<!-- main start -->
<div class="wrap main-container">
  <div class="main-list-box">
    <div class="main-list-title"><h4 class="index-list-title-bgkyv pull-left">商务KTV会所</h4><a href="/xian4" class="f12 pull-right mr20">更多</a></div>
    <div class="main-items mb20 clearfix">
      <a class='goods-item' href='/club/S3GGcfvvsSz5tdocU6CEQF.html' target='_blank'><img src='images/6bc63179-5fb6-4256-ab33-49124f048d18img_1739.jpg!m376x211.jpg'/><span class='img-area'><span class='img-area-con hide'>商圈：李家村</span></span><span class='good-item-content'><h4>西安丽都国会<small>[豪华型]</small></h4><p>果盘免费送，酒水全单8.5折。</p><span class='color-main'>好评率98.18%</span><span class='pull-right'>最低消费<b class='color-main f22'> ¥1480</b>起</span></span><span class='good-item-top'><span class='item-top-bg item-top-zhekou'>8.5折</span><span class='item-top-bg item-top-song'></span></span></a><a class='goods-item' href='/club/LpYVacxcauoGHeVGz8S4KX.html' target='_blank'><img src='images/a6210590-02e5-44a0-b39d-10c9e6ff7eec34r34r.jpg!m376x211.jpg'/><span class='img-area'><span class='img-area-con hide'>商圈：高新路</span></span><span class='good-item-content'><h4>西安阳光星辉国际俱乐部<small>[豪华型]</small></h4><p>果盘免费送，酒水全单8.5折。</p><span class='color-main'>好评率97.77%</span><span class='pull-right'>最低消费<b class='color-main f22'> ¥2640</b>起</span></span><span class='good-item-top'><span class='item-top-bg item-top-zhekou'>8.5折</span><span class='item-top-bg item-top-song'></span></span></a><a class='goods-item' href='/club/3UrLpQsDP6RfShwNgm1yqu.html' target='_blank'><img src='images/fb9be7c4-bcc5-4a58-a045-c08ef3f188d8qq截图20150111114053.jpg!m376x211.jpg'/><span class='img-area'><span class='img-area-con hide'>商圈：小雁塔</span></span><span class='good-item-content'><h4>西安悦尚层国际俱乐部<small>[豪华型]</small></h4><p>果盘免费送，酒水全单8.5折。</p><span class='color-main'>好评率0.00%</span><span class='pull-right'>最低消费<b class='color-main f22'> ¥2660</b>起</span></span><span class='good-item-top'><span class='item-top-bg item-top-zhekou'>8.5折</span><span class='item-top-bg item-top-song'></span></span></a><a class='goods-item' href='/club/Abupz5nvkkLjqiGZx5ttuF.html' target='_blank'><img src='images/7c189e13-f302-490c-9fc7-cf4b534098608.jpg!m376x211.jpg'/><span class='img-area'><span class='img-area-con hide'>商圈：钟楼</span></span><span class='good-item-content'><h4>西安阳光豪门私属会所<small>[豪华型]</small></h4><p>果盘免费送，酒水全单8.5折。</p><span class='color-main'>好评率98.00%</span><span class='pull-right'>最低消费<b class='color-main f22'> ¥2480</b>起</span></span><span class='good-item-top'><span class='item-top-bg item-top-zhekou'>8.5折</span><span class='item-top-bg item-top-song'></span></span></a><a class='goods-item' href='/club/YK9PZ9koVvS5dFcxfxTgVn.html' target='_blank'><img src='images/ffe1c573-c680-4768-9184-9e8b3a6135081.jpg!m376x211.jpg'/><span class='img-area'><span class='img-area-con hide'>商圈：高新路</span></span><span class='good-item-content'><h4>西安银河国际会所<small>[高端型]</small></h4><p>果盘免费送，酒水全单8.5折。</p><span class='color-main'>好评率97.77%</span><span class='pull-right'>最低消费<b class='color-main f22'> ¥2600</b>起</span></span><span class='good-item-top'><span class='item-top-bg item-top-zhekou'>8.5折</span><span class='item-top-bg item-top-song'></span></span></a><a class='goods-item' href='/club/BnzaF73wrwcmtfYNx87qjn.html' target='_blank'><img src='images/f1fd72b9-b220-4128-9be6-f17eb984bcada0fd065f05a851874ed29db14ab7c2cd.jpg!m376x211.jpg'/><span class='img-area'><span class='img-area-con hide'>商圈：南门</span></span><span class='good-item-content'><h4>西安皇家会客厅<small>[豪华型]</small></h4><p>果盘免费送，酒水全单8.5折。</p><span class='color-main'>好评率98.00%</span><span class='pull-right'>最低消费<b class='color-main f22'> ¥1820</b>起</span></span><span class='good-item-top'><span class='item-top-bg item-top-zhekou'>8.5折</span><span class='item-top-bg item-top-song'></span></span></a><a class='goods-item' href='/club/26coWWfVjUemmjUSAVzBeG.html' target='_blank'><img src='images/c8b5360f-60ba-415c-994e-e69ab9e6feed22.jpg!m376x211.jpg'/><span class='img-area'><span class='img-area-con hide'>商圈：解放路</span></span><span class='good-item-content'><h4>西安东方魅力（高新店）<small>[高端型]</small></h4><p>果盘免费送，酒水全单8.5折。</p><span class='color-main'>好评率97.77%</span><span class='pull-right'>最低消费<b class='color-main f22'> ¥2860</b>起</span></span><span class='good-item-top'><span class='item-top-bg item-top-zhekou'>8.5折</span><span class='item-top-bg item-top-song'></span></span></a><a class='goods-item' href='/club/2XL3g43Lgsyqy55aPmxopd.html' target='_blank'><img src='images/f3b1144f-0ac9-4918-9eb7-9e091389e3c2mmexport1434425302234.jpg!m376x211.jpg'/><span class='img-area'><span class='img-area-con hide'>商圈：高新路</span></span><span class='good-item-content'><h4>西安至尊国际娱乐会所<small>[高端型]</small></h4><p>果盘免费送，酒水全单8.5折。</p><span class='color-main'>好评率0.00%</span><span class='pull-right'>最低消费<b class='color-main f22'> ¥2960</b>起</span></span><span class='good-item-top'><span class='item-top-bg item-top-zhekou'>8.5折</span><span class='item-top-bg item-top-song'></span></span></a><a class='goods-item' href='/club/KQqd9H8cZvjyRuLfPkv36i.html' target='_blank'><img src='images/f33b08c6-0831-4c54-b9b0-d6f686f064f92.jpg!m376x211.jpg'/><span class='img-area'><span class='img-area-con hide'>商圈：电子商城</span></span><span class='good-item-content'><h4>西安东方汇KTV<small>[经济型]</small></h4><p>果盘免费送</p><span class='color-main'>好评率0.00%</span><span class='pull-right'>最低消费<b class='color-main f22'> ¥1140</b>起</span></span><span class='good-item-top'><span class='item-top-bg item-top-song'></span></span></a>
    </div>


  </div>

  <div class="p-index-right">
    <div class="right-tuijian"><img src="images/right-good.jpg" /></div>
    <div class="list-history">
      <h5 class='history-list'>浏览记录<span class="pull-right fxw-clear hide">清空</span></h5>
      <div class="list-history-item text-center fxw-his-wu">暂无记录</div>
    </div>
  </div>
</div>
@stop
@section('scripts')
@parent
    <!-- footer end -->
  <script type="text/javascript" src="/js/collapse.js"></script>
  <script src="/js/inputdefault.js"></script>
  <script src="/js/slides.js"></script>
  <script src="/js/tipsy.js"></script>
  <script src="/js/panes.js"></script>
  <script src="/js/tab.js"></script>
  <script src="/js/ydh-pc.js"></script>
    <script src="/js/imagepreview.js"></script>
  <!-- 搜索  框    -->
   <script type="text/javascript" src="/js/areasearch.js"></script>
    <!-- 首页选中  城市  获取  城市下的  企业   -->
   <script type="text/javascript" src="/js/hotcity.js"></script>
<script>
      var url="/";
      var city="xian4";
</script>
<script src="/js/index.js"></script>
<script src="/js/header.js"></script>
@stop
