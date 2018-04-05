<?php

namespace application\controllers;

use application\core\Controller;

class ClientController extends Controller {

	public function getClientAction() {
			$searchArr=$_GET;
		array_shift($searchArr);
		$result = $this->model->getClient();
		$vars = [
			'client' => $result,
		];
		$this->view->render('Клиенты', $vars);
	}

public function indexClientAction() {
		
		$this->view->render('Клиенты');
	}
    public function addClientAction() {
			$searchArr=$_GET;
		array_shift($searchArr);
		$result = $this->model->addClient();
        $vars = [
			'client' => $result,
		];
		$this->view->render('Добавить клиента', $vars);
        if(strstr($result, 'clientADD')){
            $vars=['client'=>$result];
            $this->view->render('Добавить клиента', $vars);
        }
	}
public function permClientAction() {
			$searchArr=$_GET;
		array_shift($searchArr);
		$result = $this->model->permClient();
		$vars = [
			'client' => $result,
		];
		$this->view->render('Постоянные клиенты', $vars);
	}
public function  lostClientAction() {
			$searchArr=$_GET;
		array_shift($searchArr);
		$result = $this->model->lostClient();
		$vars = [
			'client' => $result,
		];
		$this->view->render('Последние клиенты', $vars);
	}

}
