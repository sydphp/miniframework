<?php


class View {
	
	public $controller;
	
	public function __construct(Controller\Generic $controller) {
		$this->controller = $controller;
	}
	
	public function render($viewName) {
		extract($this->controller->viewVars);
		// $myUrls
		include 'views/' . $viewName . '.php';
	}
}