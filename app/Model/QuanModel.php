<?php
App::uses('AppModel', 'Model');

class QuanModel extends AppModel 
{
	public $name = "Quan";
	public $useTable = "user";
	
	public function getAllUser()
	{
		return $this->find('all');
	}
	
	public function getAllActiveUser()
	{
		$condition = array(
				'conditions' => array(
					'del_flg' => 0)
				);
		
		return $this->find('all', $condition);
	}
}