<?php

namespace application\controllers;

use application\core\Controller;
use application\interfaces\controllers\PostInterface;
use application\models\Post;

class PostController extends Controller implements PostInterface{

	public function indexAction() {
		$posts = Post::findAll();
		$this->view->render('Посты',['posts' => $posts]);
	}

}