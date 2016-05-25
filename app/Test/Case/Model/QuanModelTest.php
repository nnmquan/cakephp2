<?php
App::uses('QuanModel', 'Model');
App::uses('QuanController', 'Controller');
App::uses('UserFixture', 'Test/Fixture');

class QuanModelTest extends CakeTestCase {
	private $quanController;
	private $quanModel;
	
	public $fixtures = array('User');
	public $autoFixtures = false;
	
	public function setUp() {
		parent::setUp();
		$this->quanController = new QuanController();
		$this->quanModel = ClassRegistry::init('QuanModel');
		$this->loadFixtures('User');
	}
	
	public function tearDown() {
		parent::tearDown();
	}
	
	public function testGetAllUser() {
		$result = $this->quanModel->getAllUser();
		
		$this->assertEqual(count($result), 3);
	}
	
	public function testGetAllActiveUser() {
		$result = $this->quanModel->getAllActiveUser();
		
		$this->assertEqual(count($result), 2);
	}
}