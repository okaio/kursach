<?php

namespace application\controllers;

use application\core\Controller;

class MoneyController extends Controller {

	public function getMoneyAction() {
		$result = $this->model->getMoney();
		$vars = [
			'money' => $result,
		];
		$this->view->render('монеточки');
	}
	public function indexMoneyAction() {

		$this->view->render('Бухгалтерия');
	}
}
