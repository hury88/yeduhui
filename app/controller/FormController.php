<?php
namespace App\controller;
use App\helpers\VerifyForm as VerifyForm;
class FormController extends Controller
{



	public function medical()
	{
		$verify = [
		    'fullname' => ['required', lang('name')],
			'phone' => ['telphone', lang('phone')],
			'budget' => ['required', lang('medical_budget')],
			'bookMedicalId' => ['required', lang('medical_bookMedicalId')],
			'symptoms' => ['required', lang('medical_symptoms')],
			'problem' => ['required', lang('medical_problem')],
			'genre' => ['inted', lang('genre')],
		];

		$form = new VerifyForm($verify, 'post');
		#验证不通过
		if ($form->result()) {
			returnJson(-100, $form->error, $form->field);
		}

		$insert = M('message')->insert([
		    'realname' => $form->fullname,
			'phone'  => $form->phone,
			'email' => $form->budget,
			'relation_id'  => $form->bookMedicalId,
			'm1' => cutstr($form->symptoms, 500),
			'm2' => cutstr($form->problem, 500),
			'genre' => $form->genre,
			'ip' => $form->ip(),
			'sendtime' => $form->time(),
		]);

		if ($insert) {
			returnJson(200, lang('message_success'));
		} else {
			returnJson(-100, lang('message_failed'));
		}

	}

	public function index()
	{
		$verify = [
			'name' => ['required', lang('name')],
			'phone'  => ['telphone', lang('phone')],
			'address' => ['required', '请填写 楼盘地址'],
			'wx' => ['required', '请填写 微信号'],
			'word' => ['required', lang('message')],
		];

		$form = new VerifyForm($verify, 'post');
		#验证不通过
		if ($form->result()) {
			returnJson(-100, $form->error, $form->field);
		}
		#更新密码
		// $file = uppro_file('file', lang('pic.document'));

		$insert = M('message')->insert([
		    'realname' => $form->name,
			'phone'  => $form->phone,
			'address'  => $form->address,
			'qq'  => $form->wx,
			'message' => cutstr($form->word, 500),
			'ip' => $form->ip(),
			'type' => 14,
			'sendtime' => $form->time(),
		]);

		if ($insert) {
			returnJson(200, lang('message_success'));
		} else {
			returnJson(-100, lang('message_failed'));
		}

	}

}
