<?php

namespace application\controllers;

use application\core\Controller;
use application\interfaces\controllers\AccountInterface;


class AccountController extends Controller implements AccountInterface{

	public function registerAction() {

		$this->view->render('Главная страница');
	}

	public function loginAction() {

		$this->view->render('Главная страница');
	}

}