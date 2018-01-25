<?php
namespace Admin;
require './include/common.inc.php';
define('TABLE_NEWS',1);
require WEB_ROOT.'./include/chkuser.inc.php';
$table = 'news';
$showname = 'master';
$istop2 = I('get.istop2',0,'intval');
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
				<div class="xuanhuan clr">
					<a href="javascript:void()" class="zai" style="margin-left:30px;"><?=v_news_cats($zid,'catname')?></a>
				</div>

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

	if ($ty==8) {
		$d2 = M('news')->where('pid=1 and ty=23')->order('disorder desc, isgood desc, id asc')->getField('id,title');Output::select($d2,'装修','istop2');
	} elseif ($ty==10) {
		$d2 = M('news')->where('pid=3 and ty=21')->order('disorder desc, isgood desc, id asc')->getField('id,title');Output::select($d2,'风格','istop2');
	} elseif ($ty==26) {//chanpin
		$d2 = M('news')->where('pid=4 and ty=27')->order('disorder desc, isgood desc, id asc')->getField('id,title');Output::select($d2,'品牌','istop2');
	}

	switch ($showtype) {
		case 1://＜＞＜＞新闻＜＞＜＞

			(!isset($name) || ! $name ) && $name = $system_sitename;
		    $opt
				->img('配图','img1')
				// ->ifs($istop==1)->img('配图','img2','387*253')->endifs()
				->input('标题','title')
				->cache()->input('来源','name')/*->input('点击量','hits')*/->flur()
				// ->word('非隐藏部分')->textarea('介绍','introduce')
				// ->cache()->input('点赞数','dotlike')->input('分享数','share')->flur()
				// ->textarea('简介','introduce')
				->editor('信息内容')
			;
			break;
		case 5://＜＞＜＞单条＜＞＜＞
			$opt
				// ->img('配图','img1')
				// ->input('标题','title')
			;
				/*if ($ty==11 && (empty($content) || !isset($content))) {
					$content = '<div class="jiarxial1"><h4>岗位职责：</h4></div>'
					.'<div class="jiarxial1"><h4>任职资格：</h4></div>'
					.'<div class="jiarxial1"><h4>工作地址：</h4></div>'
					;
				}*/
			$opt
				// ->choose('标签','relative')->checkboxSet($opt->data(6, 18))->flur()
				->ifs($ty==12)
				->img('配图','img1')
				->input('名称','title')
				->input('职位','ftitle')
				->input('介绍','source')
				->input('擅长风格','introduce')
				->textarea('主要作品','content')
				->choose('作品案例','relative')->checkboxSet($opt->data(3, 10))->flur()
				// ->editor('职位介绍')
				->endifs()
				->ifs($ty==29)
				->img('配图','img1')
				->input('英文标题','ftitle')
				->input('标题','title')
				->editor('详细')
				->endifs()
				->ifs($ty==47)
					->cache()
						->input('客服','title')
						->input('qq','ftitle')
					->flur()
				->endifs();
				// ->ifs($ty==7)->textarea('内容', 'content')->endifs()
				// ->ifs($ty==28)->input('QQ','ftitle')->endifs()
			;
			break;
		case 9://＜＞＜＞产品＜＞＜＞
				// $d = M('news')->where('pid=1 and ty=23')->order(config('other.order'))->getField('id,title');Output::select($d,'小游戏','istop');
			//复选框
			// $d = M('news')->where(m_gWhere(14,19))->getField('id,title');
			(!isset($name) || ! $name ) && $name = '';
			$opt
				//单选框
				// ->choose('类型','istop')->radio('木纹',1,2)->radio('石纹',2)->flur()
				//复选框
				// ->choose('标签','relative')->checkboxSet($d)->flur()
				// ->img('列表图','img1',$ty)
				->img('列表图','img1')
				// ->img('首页图','img2', '295*183')
				// ->ifs($ty<>14)->img('二维码','img1')->endifs()
				// ->ifs($ty==14)->img('二维码','img2','165*165')->endifs()
				// ->cache()->input('标题','title')->input('副标题','ftitle')->verify('')->input('浏览次数','hits')->flur()
				->input('标题', 'title')
				->input('简介', 'introduce')
				// ->input('购买链接', 'source')
				// ->display('inline')->input('价格', 'price')
				// ->textarea('介绍', 'introduce')
				->editor('内容详情')
				// ->time('项目名','sendtime')
				// ->input('售价','price')->input('电话','name')->flur()
			;

			break;
		case 10://＜＞＜＞产品分类＜＞＜＞
			$opt
				->cache()->input('名称','title')->flur()
				// ->img('配图','img1')
			;
			break;
		case 11://＜＞＜＞图文列表＜＞＜＞
			// if (empty($content) || !isset($content))
			$opt
				->img('配图', 'img1')
				->ifs($ty<>8&&$ty<>10&&$ty<>13) ->input('信息标题', 'title') ->endifs()
				->ifs($ty==10)
				->img('背景模糊图', 'img2', '1361X888')
				->input('信息标题', 'title')
				->input('英文标题', 'ftitle')
				->input('风格', 'content')
				->editor('说明', 'content2')
				// ->display('inline')->input('职位', 'ftitle')
				->endifs()
				->ifs($ty==8) ->input('信息标题', 'title') ->input('英文标题', 'ftitle') ->input('风格', 'content') ->editor('说明', 'content2') ->endifs()
				->ifs($ty==13) ->input('信息标题', 'title') ->input('英文标题', 'ftitle') ->input('风格', 'content') ->editor('说明', 'content2') ->endifs()
				// ->ifs($ty==7 && $istop)
				// ->img('首页配图', 'img2', '297*466')
				// ->endifs()
				// ->input('信息摘要', 'ftitle')
				// ->textarea('介绍', 'introduce')
					// ->textarea('特点', 'content2')
				// ->editor('信息内容')

				// ->word('一行一个:之间用换行隔开即可')->textarea('介绍', 'content')
				// ->cache()->ifs($ty==11)->input('名称','title')->input('职务','ftitle')->endifs()->flur()
			;
			break;
	}


include('js/foot');

?>
