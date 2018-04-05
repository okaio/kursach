<?php

namespace application\controllers;

use application\core\Controller;

class SpareController extends Controller {

	public function getSpareAction() {
		
		$searchArr=$_GET;
		array_shift($searchArr);
		$result = $this->model->getSpare($searchArr);
		$vars = [
			'spare' => $result,
		];
		$this->view->render('Запчасти', $vars);
	}
	public function indexSpareAction() {

		$this->view->render('Запчасти');
	}
}
