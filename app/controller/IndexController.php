<?php
namespace App\controller;

class IndexController extends Controller
{

	public function index()
	{
		$caseCateData = M('news')->where('pid=3 and ty=21 and isstate=1')->order('disorder desc, isgood desc, id asc')->getField('id,title');
		$data = v_news(8, -16, '*');
		$this->view('index', compact('data', 'caseCateData'));
	}

}
