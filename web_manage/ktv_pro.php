<?php
namespace Admin;
require './include/common.inc.php';
define('TABLE_NEWS',1);
require WEB_ROOT.'./include/chkuser.inc.php';
$table = $showname = 'ktv';
$city_id = I('get.city_id',0,'intval');
if (!empty($id) ) { //显示页面 点击修改  只传了id
	$row = M($table)->find($id);
	extract($row);
}
$opt = new Output;//输出流  输出表单元素
if (isset($_GET['action']) && $_GET['action']=='delImg') {
	$id = I('get.id',0,'intval');
	$img = I('get.img');
	$path = ROOT_PATH.I('get.path');
	M($table)->where("id=$id")->setField($img,'');
	@unlink($path);
	JsError('删除成功!');
}
?>
<!DOCTYPE html>
<html lang="en" ng-app="app">
<head>
	<meta charset="UTF-8" />
	<title>新闻,产品,单条</title>
	<?php define('IN_PRO',1);include('js/head'); ?>
</head>

<body>


	<div class="content clr">
		<?php Style::weizhi() ?>
		<div class="right clr">
			<div class="zhengwen clr">
                <?php if (v_news_cats($zid,'catname')): ?>
                    <div class="xuanhuan clr">
                        <a href="javascript:void()" class="zai" style="margin-left:30px;"><?=v_news_cats($zid,'catname')?></a>
                    </div>
                <?php endif ?>

				<div class="miaoshu clr">
					<div id="tab1" class="tabson">
						<div class="formtext">Hi，<b><?=$_SESSION['Admin_UserName']?></b>，欢迎您使用信息发布功能！</div>
						<!-- 表单提交 --><form id="dataForm" class="layui-form" method="post" enctype="multipart/form-data">
						<?php Style::output();Style::submitButton() ?>
						<input type="hidden" name="pid" value="<?php echo $pid?>" />
						<input type="hidden" name="ty"  value="<?php echo $ty?>"  />
						<input type="hidden" name="tty" value="<?php echo $tty?>" />
<?php

/*$opt->verify('')->input('页面标题','seotitle')->input('页面关键字','keywords')->textarea('页面描述','description');*/

    $d2 = M('news')->where('pid=1 and ty=9')->order('disorder desc, isgood desc, id asc')->getField('id,title');Output::select($d2,'城市','city_id');

    (!isset($service) || ! $service ) && $service = '30,41,42';
    (!isset($ontime) || ! $ontime ) && $ontime = '19:00-02:00';
    (!isset($xiaobao) || ! $xiaobao ) && $xiaobao = '1-6|';
    (!isset($zhongbao) || ! $zhongbao ) && $zhongbao = '6-10|';
    (!isset($dabao) || ! $dabao ) && $dabao = '10-15|';
    list($xiao_p1, $xiao_p2) = explode('|', $xiaobao);
    list($zhong_p1, $zhong_p2) = explode('|', $zhongbao);
    list($da_p1, $da_p2) = explode('|', $dabao);
    (!isset($content2) || ! $content2 ) && $content2 = '<div style="color: rgb(102, 102, 102); font-family: \'Microsoft YaHei\', 微软雅黑, 宋体, SimSun; font-size: 12px; line-height: 24px; background-color: rgb(255, 255, 255);"><div class="pspacer" style="padding-top: 5px; padding-bottom: 5px; border-bottom-style: dotted; border-bottom-width: 1px; border-bottom-color: rgb(158, 158, 158);"><div class="floatleft">营业时间：19：00--02：30</div></div><div class="pspacer" style="padding-top: 5px; padding-bottom: 5px; border-bottom-style: dotted; border-bottom-width: 1px; border-bottom-color: rgb(158, 158, 158);"><div class="floatleft">开业时间：2012年</div></div></div>';

    $opt
        ->input('名称','title')
        ->input('英文名称','ftitle')
        ->choose('星级','star')->radioSet(config('webarr.star'))->flur()
        //->choose('星级','star')->radioSet($opt->data(8, 29))->flur()
        ->choose('服务','service')->checkboxSet($opt->data(8, 28))->flur()
        ->img('普通小包','img2', '140*140')
        ->img('普通中包','img3', '140*140')
        ->img('普通大包','img4', '140*140')
        ->cache()->echoString('<div style="clear:both"></div><b style="color:mediumvioletred">普通小包</b>')->input('人数','xiao_p1')->input('最低消费', 'xiao_p2')->flur()
        ->cache()->echoString('<b style="color:mediumvioletred">普通中包</b>')->input('人数','zhong_p1')->input('最低消费', 'zhong_p2')->flur()
        ->cache()->echoString('<b style="color:mediumvioletred">普通大包</b>')->input('人数','da_p1')->input('最低消费', 'da_p2')->flur()
        ->cache()->input('预订热线','hotline')->input('营业时间','ontime')->flur()
        ->textarea('夜店简介','content')
        ->echoString('<b>点击下方图片查看如何添加新内容</b>')->editor('有用信息<img style="border:1px solid;cursor:pointer" class="img" width="100" src="images/ktv_pro_content.gif">','content2')
        // ->editor('职位介绍')
        ->img('配图','img1', '140*140')
    ;
				// $d = M('news')->where('pid=1 and ty=23')->order(config('other.order'))->getField('id,title');Output::select($d,'小游戏','istop');
			//复选框
			// $d = M('news')->where(m_gWhere(14,19))->getField('id,title');
			(!isset($name) || ! $name ) && $name = '';
				//单选框
				// ->choose('类型','istop')->radio('木纹',1,2)->radio('石纹',2)->flur()
				//复选框


include('js/foot');

?>
