<?php
namespace Model;

class Url extends Generic {
	public function find() {
		return array(
			'http://sydphp.org',
			'http://php.net');
	}
}
