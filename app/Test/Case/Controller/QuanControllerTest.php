<?php

class QuanControllerTest extends ControllerTestCase {
	public $fixtures = array('User');
	
	public function setUp() {
		parent::setUp();
		$this->loadFixtures('User');
	}
	
	public function tearDown() {
		parent::tearDown();
	}
	
	public function testIndex() {
		$result = $this->testAction('/quan');
		var_dump($result);die;
	}
}