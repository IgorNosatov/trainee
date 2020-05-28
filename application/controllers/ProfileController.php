<?php

namespace application\controllers;

use application\core\Controller;
use application\models\Post;
use application\interfaces\controllers\ProfileInterface;

class ProfileController extends Controller implements ProfileInterface{

	public function indexAction() {
		$posts1 = new Post;
		$array = $posts1->showPost();
		$vars = [
			'news' => $array,
		];
		$this->view->render('Профиль', $vars);
	}

}