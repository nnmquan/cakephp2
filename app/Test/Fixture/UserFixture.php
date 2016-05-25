<?php
App::uses('QuanModel', 'Model');

class UserFixture extends CakeTestFixture {
	public $useDbConfig = 'test';
	public $table = 'user';
	
	public $fields = array(
			'id' => array(
					'type' => 'integer', 
					'key' => 'primary'
			),
			'name' => array(
					'type' => 'string',
					'length' => 255,
					'null' => false
			),
			'birthday' => 'date',
			'address' => array(
					'type' => 'string',
					'length' => 500,
					'null' => true
			),
			'del_flg' => array(
					'type' => 'integer',
					'null' => false
			)
	);
	
	public $records = array(
			array(
					'id' => 1,
					'name' => 'Quân',
					'birthday' => '1990-10-10',
					'address' => 'Bình thạnh, TPHCM',
					'del_flg' => 0
			),
			array(
					'id' => 2,
					'name' => 'Lãm',
					'birthday' => '1990-02-03',
					'address' => 'Quận 4, TPHCM',
					'del_flg' => 0
			),
			array(
					'id' => 3,
					'name' => 'Deleted user',
					'birthday' => '1990-10-11',
					'address' => 'Không có',
					'del_flg' => 1
			),
	);
}