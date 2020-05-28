<?php

namespace application\core;

use application\core\View;
use application\interfaces\core\ControllerInterface;

abstract class Controller implements ControllerInterface{

	public $route;
	public $view;

	public function __construct($route) {
		$this->route = $route;
		$this->view = new View($route);
		$this->model = $this->loadModel($route['controller']);
	}

	public function loadModel($name) {
		$path = 'application\models\\'.ucfirst($name);
		if (class_exists($path)) {
			return new $path;
		}
	}
}