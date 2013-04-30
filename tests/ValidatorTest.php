<?php

class ValidatorTest extends PHPUnit_Framework_TestCase {
	public function setUp() {
		$this->Validator = new Validator;
	}
	
	public function testValidatorMacth() {
		$this->Validator->setupValidator('/^\d+$/');
		$this->assertTrue($this->Validator->validate('123123') == 1);
		$this->assertFalse($this->Validator->validate('123abc') == 1);
		$this->assertEquals($this->Validator->validate('1'), 1);
		$this->assertEquals($this->Validator->validate(1), 1);
	}
}