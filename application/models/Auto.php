<?php

namespace application\models;

use application\core\Model;

class Auto extends Model {

	public function indexAuto($searchArr) {
		$result = $this->db->row('SELECT auto.codeAuto, auto.mark, auto.model, clients.name, clients.phone from clients, auto where clients.codeClient = :codeClient and auto.codeClient= :codeClient;',$searchArr);
		return $result;
	}
public function getAuto($searchArr) {
		$result = $this->db->row('SELECT auto.mark, auto.model, auto.year, auto.engine, auto.description  from auto where auto.codeAuto = :codeAuto;',$searchArr);
		return $result;
	}
public function addAuto($searchArr) {
    $AutoArr=['codeClient'=>$_GET["codeClient"],
                     'mark'=>$_POST['mark']
                     ,'model'=>$_POST['model'],
                     'engine'=>$_POST['engine'],
                     'year'=>$_POST['year'],
                     'vinCode'=>$_POST['vinCode'],
                     'number'=>$_POST['number'],
                     'description'=>$_POST['description'],
                    ];
   // var_dump($AutoArr);
    $result = $this->db->row('insert into auto set codeClient= :codeClient, mark= :mark, model= :model,  engine= :engine, year= :year,  vinCode= :vinCode, number= :number, description= :description;', $AutoArr);
		return $result;
	}
}
