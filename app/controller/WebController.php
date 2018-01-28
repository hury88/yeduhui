<?php
namespace App\controller;
use App\helpers\Lister as Lister;
use Core\response\Redirect as Redirect;
class WebController extends Controller
{
    public function __construct()
    {
    	parent::__construct();
    }

	public function into()
	{
		global $pid,$ty,$showtype;

		$lister = new Lister();

		$data = $lister->s2('content,img1,introduce');
		$data['content'] = isset($data['content']) && $data['content'] ? htmlspecialchars_decode($data['content']) : config('other.nocontent');
		return $this->view('danyi', compact('data'));

	}

	public function index()
	{
		global $pid,$ty,$showtype;
		$lister = new Lister();
		switch ($pid) {
			case 1: // 我要装修
				$field = 'id,img1,title,ftitle';
				$cate = I('get.cate', 0, 'intval');
				$where = m_gWhere(1,8);
				$cate > 0 && $where['istop2'] = $cate;
				$data = M('news')->field($field)->where($where)->order(config('other.order'))->select();
			    $cate_data = M('news')->where('pid=1 and ty=23 and isstate=1')->order('disorder desc, isgood desc, id asc')->getField('id,title');
				return $this->view('decoration', compact('data', 'cate', 'cate_data'));
				break;
			case 2: // 关于精微
				$news_data = v_data(17,19,'id,img1,title,content,sendtime');
				$data = $lister->s2('img1,img2,img3,content');
				return $this->view('ktv', compact('data', 'news_data'));
				break;
			case 3: // 服务
				$data = $lister->s2('content');
			    return $this->view('service', compact('data'));
			case 100: // 服务
				// $lister->s1(1000);
				$field = 'id,img1,img2,title,content';
				$cate = I('get.cate', 0, 'intval');
				$where = m_gWhere(3,10);
				$cate > 0 && $where['istop2'] = $cate;
				$data = M('news')->field($field)->where($where)->order(config('other.order'))->select();
				$cate_data = M('news')->where('pid=3 and ty=21 and isstate=1')->order('disorder desc, isgood desc, id asc')->getField('id,title');
				return $this->view('case', compact('data', 'cate', 'cate_data'));
				break;
			case 4: // 产品中心
				$lister->s1(6, 's2');
				$display = $lister->display;
				$paging = $lister->paging;
				return $this->view('product', compact('display', 'paging'));
				break;
			case 5: // about
				// $news_data = v_data(17,19,'id,img1,title,content,sendtime');
				$data = $lister->s2('content');
				return $this->view('about', compact('data'));
			case 6: // VIP订制
				return $this->view('vip');
				break;
			default:
				return $this->view('index');
				break;
		}
	}

	public function cases()
	{
		return $this->view('case-detail');
	}
	public function vip()
	{
		return $this->view('vip-detail');
	}

	public function team()
	{
		return $this->view('team-detail');
	}

	public function products()
	{
		return $this->view('product-detail');
	}
	public function detail()
	{
		return $this->view('news-detail');
	}

}
