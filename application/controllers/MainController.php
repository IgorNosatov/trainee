<?php

namespace application\controllers;

use application\core\Controller;
use application\models\Post;
use application\interfaces\controllers\MainInterface;

class MainController extends Controller implements MainInterface{

	public function indexAction() {
		
		$posts = Post::findAll();
		$this->view->render('Главная страница',  ['posts' => $posts]);
	}

}