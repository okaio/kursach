<?php

namespace application\controllers;

use application\core\Controller;

class MasterController extends Controller {

	public function getMasterAction() {
			$searchArr=$_GET;
		array_shift($searchArr);
		$result = $this->model->getMaster();
		$vars = [
			'master' => $result,
		];
		$this->view->render('Мастера', $vars);
	}
}
