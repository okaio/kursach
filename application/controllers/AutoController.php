<?php

namespace application\controllers;

use application\core\Controller;

class AutoController extends Controller {

	public function indexAutoAction() {
        
			$searchArr=$_GET;
		array_shift($searchArr);
        if(empty($_POST)){
		$result = $this->model->indexAuto($searchArr);
		$vars = [
			'auto' => $result,
		];
		$this->view->render('Автомобили клиента', $vars);
        }
         if(!empty($_POST)){
             $result = $this->model->addAuto($searchArr);
            $vars=['auto'=>$result];
            $this->view->render('Автомобили клиента', $vars);
        }
	}
    public function getAutoAction() {
        
			$searchArr=$_GET;
		array_shift($searchArr);
		$result = $this->model->getAuto($searchArr);
		$vars = [
			'auto' => $result,
		];
		$this->view->render('Автомобиль клиента', $vars);
	}

public function addAutoAction() {
        
			$searchArr=$_GET;
		array_shift($searchArr);
		$result = $this->model->addAuto($searchArr);
		$vars = [
			'auto' => $result,
		];
		$this->view->render('Автомобили клиента', $vars);
         if(strstr($result, 'autoADD')){
            $vars=['auto'=>$result];
            $this->view->render('Автомобили клиента', $vars);
        }
	}
}