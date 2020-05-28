<?php

namespace application\controllers;

use application\core\Controller;
use application\models\Post;
use application\interfaces\controllers\ProfileInterface;

class ProfileController extends Controller implements ProfileInterface{

	public function indexAction() {
		$posts = Post::findAll();
		$this->view->render('Профиль', ['posts' => $posts]);
	}

}