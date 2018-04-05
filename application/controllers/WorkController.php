<?php

namespace application\controllers;

use application\core\Controller;

class WorkController extends Controller {

	public function getWorkAction() {
			$searchArr=$_GET;
		array_shift($searchArr);
		$result = $this->model->getWork($searchArr);
		$vars = [
			'client' => $result,
		];
		$this->view->render('Клиенты', $vars);
	}


public function indexWorkAction() {
		
		$this->view->render('Работы');
	}
    public function addWorkAction() {
			$searchArr=$_GET;
		array_shift($searchArr);
		$result = $this->model->addWork($searchArr);
		//debug($result);
		$vars = [
			'work' => $result,
		];
		$this->view->render('Добавить заказ на работу', $vars);
        $userData=$_POST;
        
	}
  
}
