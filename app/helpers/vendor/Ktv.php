<?php
namespace App\helpers\vendor;
class Ktv
{
	/*选择或定位的城市*/
	private $city = '';
	private $cityId = '';

	public function __construct($cityName = null)
	{
		if (is_null($cityName)) {// 默认操作
			#a.直接获取
			$cityName = $this->getCityName();
			if (is_null($cityName)) {
				#b.定位获取
				$cityName = GetIpLookup();
			}
		}
		$this->initialCity($cityName);
	}

	//获取区域
	public function getQuYu()
	{

		$res = M('news')
		            ->field('id,title')
		            ->where('isstate=1 and istop='.$this->getCityId())
		            ->select();
		return $res ? : [];
	}

	//获取商圈
	public function getShangQuan()
	{

		$res = M('news')
		            ->field('id,title')
		            ->where('isstate=1 and istop2='.$this->getCityId())
		            ->select();
		return $res ? : [];
	}

	//获取搜索
	public function getSoSuo()
	{

		$res = M('news')
		            ->field('id,title')
		            ->where('isstate=1 and (istop2='.$this->getCityId().' or istop='.$this->getCityId().')')
		            ->select();
		return $res ? : [];
	}

	public function getCity()
	{

		$res = M('news')
		            ->field('id,title')
		            ->where('pid=1 and ty=9 and isstate=1')
		            ->order(config('other.order'))
		            ->select();
		return $res ? : [];
	}


	/*城市*/
	public function getCityName() {return session('cityName'); }
	public function setCityName($cityName) {session('cityName', $cityName); }

	/*城市Id*/
	public function getCityId() {return session('cityId'); }
	public function setCityId($cityId) {session('cityId', $cityId); }

	//根据cityName初始化城市数据
	public function initialCity($cityName)
	{
		$res = M('news')
		            ->field('id,title')
		            ->where('pid=1 and ty=9 and isstate=1 and title = "'.$cityName.'"')
		            ->order(config('other.order'))
		            ->find();
		if (!$res) {
			$res = M('news')
			            ->field('id,title')
			            ->where('pid=1 and ty=9 and isstate=1')
			            ->order(config('other.order'))
			            ->find();
		}

		$this->setCityId($res['id']);
		$this->setCityName($res['title']);

		unset($res);
	}
}