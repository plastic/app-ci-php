<?php

abstract class ValidatorWrap {
	abstract public function setupValidator($pattern);
	abstract public function validate($value);
}

class Validator extends ValidatorWrap {
	
	protected $pattern = '';
	
	public function setupValidator($pattern) {
		$this->pattern = $pattern;
	}
	
	public function validate($value) {
		return preg_match($this->pattern, $value);
	}
}