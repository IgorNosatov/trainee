<?php

namespace application\controllers;

use application\core\Controller;
use application\interfaces\controllers\PostInterface;

class PostController extends Controller implements PostInterface{

	public function indexAction() {
		$vars = [
			'news' => $this->model->showPost(),
		];
		$this->view->render('Главная страница', $vars);
	}

}