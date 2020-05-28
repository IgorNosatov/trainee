<?php

namespace application\controllers;

use application\core\Controller;
use application\models\Post;
use application\interfaces\controllers\MainInterface;

class MainController extends Controller implements MainInterface{

	public function indexAction() {
		$posts1 = new Post;
		$array = $posts1->showPost();
		$vars = [
			'news' => $array,
		];
		$this->view->render('Главная страница', $vars);
	}

}