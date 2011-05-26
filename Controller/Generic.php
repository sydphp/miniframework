<?php
namespace Controller;

class Generic {
	public $viewVars = array();
	public $name;
	
	public function __construct() {
		$this->_constructModel();
	}
	
	protected function set($name, $value) {
		$this->viewVars[$name] = $value;
	}

	protected function _constructModel() {
		if ($this->name === false) {
			return;
		}
		if (empty($this->name)) {
			$class = array_reverse(explode('\\', get_class($this)));
			$class = array_shift($class);
			$this->name = $class;
		}
		$namespaced = '\\Model\\' . $class;
		$this->{$class} = new $namespaced();
	}


}