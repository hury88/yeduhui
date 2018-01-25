@extends('layouts.master')
@section('wapper')
 <div class="page_wrap">
   <div class="wrap_box">
     <div class="model-title">
       <p class="title-top">Service process</p>
       <h2>服务流程</h2>
       <p class="title-bottom">设计为灵魂 匠心做工艺 材料重品质 服务心贴心</p>
     </div>
     <div class="flow-nav">
       <ul>
         <li class="flow-on">
           <a href="javascript:;">
             <div class="flow-img flow1">
               <p></p>
             </div>
             <p class="flow-p1">01</p>
             <p class="flow-p1">在线预约</p>
             <span>Online booking</span>
           </a>
         </li>
         <li>
           <a href="javascript:;">
             <div class="flow-img flow2">
               <p></p>
             </div>
             <p class="flow-p1">02</p>
             <p class="flow-p1">验房量房</p>
             <span>amount of Rome</span>
           </a>
         </li>
         <li>
           <a href="javascript:;">
             <div class="flow-img flow3">
               <p></p>
             </div>
             <p class="flow-p1">03</p>
             <p class="flow-p1">方案设计</p>
             <span>conceptual design</span>
           </a>
         </li>
         <li>
           <a href="javascript:;">
             <div class="flow-img flow4">
               <p></p>
             </div>
             <p class="flow-p1">04</p>
             <p class="flow-p1">预算报价</p>
             <span>quoted price</span>
           </a>
         </li>
         <li>
           <a href="javascript:;">
             <div class="flow-img flow5">
               <p></p>
             </div>
             <p class="flow-p1">05</p>
             <p class="flow-p1">签订合同</p>
             <span>Sign a contracte</span>
           </a>
         </li>
         <li>
           <a href="javascript:;">
             <div class="flow-img flow6">
               <p></p>
             </div>
             <p class="flow-p1">06</p>
             <p class="flow-p1">工地施工</p>
             <span>Site constructione</span>
           </a>
         </li>
         <li>
           <a href="javascript:;">
             <div class="flow-img flow7">
               <p></p>
             </div>
             <p class="flow-p1">07</p>
             <p class="flow-p1">验收结算</p>
             <span>Settlemente</span>
           </a>
         </li>
         <li>
           <a href="javascript:;">
             <div class="flow-img flow8">
               <p></p>
             </div>
             <p class="flow-p1">08</p>
             <p class="flow-p1">售后服务</p>
             <span>Customer service</span>
           </a>
         </li>
       </ul>
     </div>
   </div>
 </div>
 <div class="page_wrap">
  <div class="model-title">
    <p class="title-top">ABOUT GINVDESIGN</p>
    <h2>关于精微</h2>
    <p class="title-bottom">设计为灵魂 匠心做工艺 材料重品质 服务心贴心</p>
  </div>
  <div class="in-about" style="background: url(/img/index-bg.jpg) no-repeat center;background-size: cover">
    <div class="wrap_box">
      <div class="index-about">
        <h3>尽精微 致广大</h3>
        <p class="from"> <b></b>出自<<中庸>> </p>
        <div class="text">
          <p>安徽精微设计装饰有限公司，专精于空间设计规划，致力于别墅洋房、平层豪宅、精品府邸、
            宾馆会所、办公空间的设计、施工、智能家居为一体的装饰装修服务。
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="page_wrap">
  <div class="model-title">
    <p class="title-top">GINVDESIGN  case</p>
    <h2>精微案例</h2>
    <p class="title-bottom">设计为灵魂 匠心做工艺 材料重品质 服务心贴心</p>
  </div>
  <div class="wrap_box nav-case">
    @foreach($caseCateData as $cid=>$ctitle)
    <a class="nav-case-on" href="{{u('web/index', ['pid'=>3, 'ty'=> 10, 'cate'=>$cid])}}">{{$ctitle}}</a>
        @if(!$loop->last)
    <span>/</span>
        @endif
    @endforeach
  </div>
  <div class="index-case">
    <div id="slideBox" class="slideBox">
      <div class="bd">
        <ul>
          @foreach(v_data(3,10,'img1,title,ftitle') as $row)
          <li>
              <a class="organise-img" href="{{v_url($row['id'],'cases')}}">
                  <img src="{{src($row['img1'])}}" />
                  <div class="case-cover"></div>
              </a>
              <div class="organise-mess">
                  <p>{{$row['title']}}</p>
                  <span>{{$row['ftitle']}}</span>
              </div>
          </li>
          @endforeach
        </ul>
      </div>
      <div class="clearfix"></div>
      <div class="case-zhishi">
        <a class="prev" href="javascript:void(0)"></a>
        <a class="case-middle" href="{{m_url(3)}}"></a>
        <a class="next" href="javascript:void(0)"></a>
      </div>
    </div>
  </div>
</div>
<div class="page_wrap">
  <div class="model-title">
    <p class="title-top">Intellectualization</p>
    <h2>智能化</h2>
    <p class="title-bottom">设计为灵魂 匠心做工艺 材料重品质 服务心贴心</p>
  </div>
  <div class="Intelle">
    <img src="/img/img2.jpg"/>
  </div>
</div>
<div class="page_wrap">
  <div class="model-title">
    <p class="title-top">GINVDESIGN team</p>
    <h2>精微团队</h2>
    <p class="title-bottom">设计为灵魂 匠心做工艺 材料重品质 服务心贴心</p>
  </div>
  <div class="index-team">
    <div class="slideTeam">
      <div class="bd">
        <ul>
          @foreach(v_data(5,12,'id,title,img1',10) as $key=>$row)
          <li>
            <a title="{{$row['title']}}" href="{{v_url($row['id'],'team')}}">
              <img alt="{{$row['title']}}" src="{{src($row['img1'])}}"/>
            </a>
          </li>
          @endforeach
        </ul>
      </div>
      <div class="hd">
        <ul>
          @foreach(range(0,$key) as $value)
          <li></li>
          @endforeach
        </ul>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</div>
<div class="page_wrap">
  <div class="model-title">
    <p class="title-top">News information</p>
    <h2>新闻资讯</h2>
    <p class="title-bottom">设计为灵魂 匠心做工艺 材料重品质 服务心贴心</p>
  </div>
  <div class="wrap_box nav-case">
    <a class="nav-case-on" href="javascript:;">精微动态</a>
    <span>/</span>
    <a href="{{m_url(2)}}#pos">行业新闻</a>
  </div>
  <div class="index-news">
    <div class="slideNews">
      <div class="bd">
        <ul>
          @foreach(v_data(17,18,'id,title,img1',10) as $key=>$row)
          <li>
            <a title="{{$row['title']}}" href="{{v_url($row['id'])}}">
              <img alt="{{$row['title']}}" src="{{src($row['img1'])}}"/>
              <p style="text-align: center;">{{$row['title']}}</p>
            </a>
          </li>
          @endforeach
        </ul>
      </div>
      <div class="clearfix"></div>
      <a class="prev" href="javascript:void(0)"></a>
      <a class="next" href="javascript:void(0)"></a>
    </div>
  </div>
</div>
<div class="page_wrap index-contact">
  <div class="model-title">
    <p class="title-top">CONTACT US</p>
    <h2>联系我们</h2>
    <p class="title-bottom">设计为灵魂 匠心做工艺 材料重品质 服务心贴心</p>
  </div>
  <div class="wrap_box index-contact-box">
    <div class="contact-box-left fl">
      <h3>免费预约设计师量房</h3>
      <p class="box-left-com">{{$system_sitename}}</p>
      <p class="box-left-address">
        <span>地址：</span>
        <b>{{$system_address}}</b>
      </p>
      <p class="box-left-tel"><img src="/img/tel.png"/>{{$system_phone}}</p>
    </div>
    <div class="contact-box-right fr">
      <form class="form">
        <h3>在线预约</h3>
        <div class="form">
          <div class="form-dv">
            <span>业主姓名</span>
            <input name="name" type="text"/>
            <i>*</i>
          </div>
          <div class="form-dv">
            <span>联系电话</span>
            <input name="phone" type="text"/>
            <i>*</i>
          </div>
          <div class="form-dv">
            <span>楼盘地址</span>
            <input name="address" type="text"/>
          </div>
          <div class="form-dv">
            <span>微信号</span>
            <input name="wx" type="text"/>
          </div>
          <div class="form-dv">
            <span>留言</span>
            <textarea name="word"></textarea>
          </div>
          <div class="form-sub-dv">
            <input type="submit" onclick="model(this, '{{u('form/index')}}'); return false" value="提交"/>
          </div>
        </div>
      </form>
    </div>
    <div class="clearfix"></div>
  </div>
</div>
@stop
@section('scripts')
@parent
<script type="text/javascript" src="/js/jquery.SuperSlide.2.1.1.js"></script>
<script>
jQuery(".slideBox").slide({mainCell:".bd ul",effect:"leftLoop", vis:3,autoPlay:true});
jQuery(".slideTeam").slide({mainCell:".bd ul",effect:"leftLoop", vis:1,autoPlay:true});
jQuery(".slideNews").slide({mainCell:".bd ul",effect:"leftLoop", vis:3,autoPlay:true});
jQuery(".slideBanner").slide({mainCell:".bd ul",effect:"leftLoop", vis:1,autoPlay:true});
</script>
@stop
