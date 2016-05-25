<?php
App::uses('AppController', 'Controller');
App::uses('QuanModel', 'Model');

class QuanController extends AppController 
{
	
	public function index()
	{
		$quanModel = new QuanModel();
		$list = $quanModel->getAllUser();
		$this->set('listUser', $list);
// 		var_dump($list);die;
	}
}