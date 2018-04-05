<?php

namespace application\controllers;

use application\core\Controller;

class PriceController extends Controller {

	public function getPriceAction() {
		$searchArr=$_GET;
		array_shift($searchArr);
		$result = $this->model->getPrice($searchArr);
		$vars = [
			'price' => $result,
		];
		$this->view->render('Прайс', $vars);
	}
	public function indexPriceAction() {

		$this->view->render('Прайс');
	}
}
