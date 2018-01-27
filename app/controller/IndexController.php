<?php
namespace App\controller;
use App\helpers\vendor\Ktv as Ktv;

class IndexController extends Controller
{

	public function index()
	{
		$ktv = new Ktv();
		// print_r($ktv->getQuYu());
		// $caseCateData = M('news')->where('pid=3 and ty=21 and isstate=1')->order('disorder desc, isgood desc, id asc')->getField('id,title');
		// $data = v_news(8, -16, '*');

		$this->view('index', compact('ktv'));
	}

	public function cityChoose()
	{
		$ktv = new Ktv();
		$this->view('cityChoose', compact('ktv'));
	}

	public function set()
	{
		$city = I('get.city', '', 'urldecode');
		$ktv = new Ktv($city);
		$this->redirect('index');
	}

}
