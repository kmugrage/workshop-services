<?php

class HelloWorld {

	public $name = 'foo';

	function sayHi() {
		print "Hello " . $this->getName();
	}

	function getName() {
		return $this->name;
	}

	function setName($name) {
		$this->name = $name;
	}
	
}
