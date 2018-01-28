<?php
namespace App\controller;
use App\helpers\vendor\Ktv as Ktv;
use Core\Page as Page;

class KtvController extends Controller
{

	public function index()
    {
        $ktv = new Ktv();
        $location = I('get.location', '', 'intval');
        $zone = I('get.zone', '', 'intval');

        $map = [
            'city_id' => $ktv->getCityId(),
            'pid' => 2,
            'ty' => 10,

        ];
        $order = [];

        /*区域或商圈*/$cate_id =   $location ?: $zone;if(!empty($cate_id))$map['cate_id'] = $cate_id;
        /*区域或商圈*/$cate_name =   $location ? 'location': ($zone?'zone':'');
        /*星级*/$star = I('get.star',0,'intval');if($star)$order['star'] = $star == 1 ? 'desc' : 'asc';
        /*价格*/$price = I('get.price',0,'intval');if($price)$order['xiaobao_p2'] = $price == 1 ? 'desc' : 'asc';
        /*评分*/$dotlike = I('get.dotlike',0,'intval');if($dotlike)$order['dotlike'] = $dotlike == 1 ? 'desc' : 'asc';

        $psize = I('get.psize',5,'intval');
        $order = $order + ['isgood' => 'desc', 'disorder' => 'desc', 'id' => 'desc'];

        $orderString = '';
        foreach ($order as $index => $item) {
            $orderString .= $index.' '.$item.',';
        }

        $pageConfig = array(
            /*条件*/'where' => $map,
            /*排序*/'order' => rtrim($orderString, ','),
            /*条数*/'psize' => $psize,
            /*字段*/'field' => 'id,img1,title,xiaobao_p1,xiaobao_p2,star,service',
            /*表  */'table' => 'ktv',
        );
        list($data, $pagestr, $totalRows) = Page::paging($pageConfig, 'show_front');

        $this->view('ktv', compact('ktv','location', 'zone', 'data', 'pagestr', 'totalRows', 'cate_id', 'cate_name','star', 'price', 'dotlike'));
    }

    public function club()
    {
        $ktv = new Ktv();

        $this->view('ktv-view   ', compact('ktv','location', 'zone', 'data', 'pagestr', 'totalRows', 'cate_id', 'cate_name','star', 'price', 'dotlike'));
    }

}
