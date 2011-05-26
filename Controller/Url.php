<?php
namespace Controller;

class Url extends Generic {
	
	public function index() {
		$urls = $this->Url->find();
		$this->set('myUrls', $urls);
	}
}
