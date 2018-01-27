<?php
if ( defined('WEB') ) {

function show_tab($pid,$ty, $ids)
{
	$m = M('news')->where(m_gWhere($pid,$ty))->order('disorder desc, isgood desc, id asc')->getField('id,title');
	$ids = explode(',', $ids);
	$tabs =  [];
	foreach ($ids as $id) {
		array_push($tabs, $m[$id]);
	}
	return implode('<em>/</em>', $tabs);
	// return $tabs;
}

function returnJson($status,$msg,$dom=false){
    $arr = [
    	'status' => $status,
    	'msg'    => $msg,
    ];
    $dom && $arr['dom'] = $dom;
    unset($status,$msg,$dom);
    die( json_encode($arr) );
}

function dieJson($error,$message,$redirect=false){
    $arr = [
    	'error' => $error,
    	'message'    => $message,
    ];
    $redirect && $arr['redirect'] = $redirect;
    unset($error,$message,$redirect);
    die( json_encode($arr) );
}
// 用法 <li><a style="background-image: url(__IMG__);" href="@$linkurl@"></a></li>
function v_data($pid,$ty,$field='*',$limit=0)
{
	$m = M('news')->field($field)->where(m_gWhere($pid,$ty))->order(config('other.order'));
	if ($limit) {
	    $m = $m->limit($limit);
	}
	$data = $m->select();
	return $data;
}
function vv($pid,$ty,$tpl,$limit=0)
{
	global $key;
	list($field, $flag) = App\Helpers\V::parse($tpl);
	$m = M('news')->field($field)->where(m_gWhere($pid,$ty))->order(config('other.order'));
	if ($limit) {
	    $m = $m->limit($limit);
	}
	$data = $m->select();

	$list = '';
	foreach ($data as $key => $value) {
		extract($value);
		if ($flag) {
			$URL = U($pid.'/detail', ['id'=>$id]);
		}
		eval(" \$list .= '$tpl';");
	}
	return $list;
}

function vv_data($data,$tpl)
{
	list($field) = App\Helpers\V::parse($tpl);

	$list = '';
	foreach ($data as $key => $value) {
		extract($value);
		eval(" \$list .= '$tpl';");
	}
	return $list;
}

function vvpro($set,$tpl,$limit=0)
{
	$pid=$ty=$tty = null;
	$where = [];
	list($field) = App\Helpers\V::parse($tpl);

	list($pid, $ty, $tty) = $set;
	if ($pid) $where['pid'] = $pid;
	if ($ty) $where['ty'] = $ty;
	if ($tty) $where['tty'] = $tty;

	$m = M('news')->field($field)->where((array) $where)->order(config('other.order'));
	if ($limit) {
	    $m = $m->limit($limit);
	}
	$data = $m->select();

	$list = '';
	foreach ($data as $key => $value) {
		extract($value);
		eval(" \$list .= '$tpl';");
	}
	return $list;
}

function pc_lefts()
{
	global $q,$pid,$ty;

	if ($q) {
		// echo '<li class="zong"><a href="javascript:;" style="background: url(img/6_03.png)no-repeat right center;line-height: 20px;padding-top: 5px;">搜索页面<br/>SEARCH</a></li><li class="on"><a style="background: url(img/6_03.png)no-repeat right center;">搜索结果</a></li>';
		// return ;
	}
	$tpl = '<li%s><a href="%s" class="s1">%s</a></li>';
	$data = M('news_cats')->field('id as ty,catname')->where(array('pid'=>$pid,'isstate'=>1))->order('disorder desc,id asc')->select();
	$pidURL = m_url($pid);
	$tmp='';
	foreach ($data as $key => $row) {
		$cur = $ty == $row['ty'] ? ' class="on"' : '';
		$url = m_url($pid,$row['ty']);
		// $tmp .= sprintf($tpl,$cur,$url,$row['catname']);
		$tmp .= sprintf($tpl,$cur,$url,$row['catname']);
	}
	UNSET($tpl,$data,$key,$pidURL,$row,$url,$cur);
	return $tmp;
}


#常用小函数 统一前缀 m

	function m_url($pid,$ty=0, $route = 'web/index')
	{
		$args = ['pid' => $pid];
		if (!empty($ty)) $args['ty'] = $ty;
		return U($route, $args);
	}//传入pid=>list.php?pid=n

	function htmldecode($html) {return htmlspecialchars_decode($html);}

	function v_url($id, $detail = 'detail')
	{
		return '/web/'.$detail.'/id/'.$id;
	}//传入pid=>list.php?pid=n

	function pc_bread($sp = ' &nbsp;&nbsp;&nbsp;&nbsp;> ')
	{//面包屑导航
		global $q,$tty,$ty,$pid,$id_title,$id,$pid_catname,$ty_catname,$ty_catname2;
		  //面包屑导航
		  //$bread = $tty ? : $ty ? : $pid ;
		if ($q) {
			// ECHO '搜索"'.$q.'"的结果';
			// echo '搜索';
			return;
		}
		$array = [];
		$breadTemp = '';


		$array[] = ['首页', '/'];
		// $breadTemp = '<a href="/" style="font-style:italic">'.config('translator.home').'</a>' .$sp;
		if($pid){
			$array[] = [$pid_catname, m_url($pid)];
		}
		if($ty && $pid_catname != $ty_catname){
			if (empty($ty)) {$separtor='';}
			$array[] = [$ty_catname, m_url($pid, $ty)];
		}

		if ($id){
			global $id_title;
			$array[] = [$id_title, 'javascript:;'];
			// $breadTempId='<a href="javascript:;" style="color: #4a81c1;">'.$id_title.'</a>';
		}
		$count = count($array)-1;
		foreach ($array as $key => $value) {
			if ($count==$key) {
				$breadTemp .= '<span>'.$value[0].'</span>';
			} else {
				$breadTemp .= sprintf('<a href="%s" class="text-line">%s</a>'.$sp, $value[1], $value[0]);
			}
		}
		unset($url,$catname,$bread);
		return '<p class="pt15 f14">'.$breadTemp.'</p>';
	}

} //END WEB