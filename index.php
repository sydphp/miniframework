<?php
require 'autoload.php';

$controller = new Controller\Url();
$view = new View($controller);
$controller->index();

$view->render('url-list');
