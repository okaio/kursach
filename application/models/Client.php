<?php

namespace application\models;

use application\core\Model;

class Client extends Model {
    
    

	public function getClient($searchArr) {
		$result = $this->db->row('SELECT clients.name , clients.codeClient, clients.phone FROM clients;',$searchArr);
		return $result;
	}
   public function addClient() {
		$result=true;
       if(!empty($_POST)){
          $ClientArr=['name'=>$_POST['name'],
                      'phone'=>$_POST['phone']];
          // debug($ClientArr);
           $result = $this->db->row('insert into clients set name= :name, phone= :phone; ',$ClientArr);
           $codeClient=$this->db->row('SELECT LAST_INSERT_ID()');
           $codeClient=$codeClient[0]["LAST_INSERT_ID()"];
           $AutoArr=['codeClient'=>$codeClient,
                     'mark'=>$_POST['mark']
                     ,'model'=>$_POST['model'],
                     'engine'=>$_POST['engine'],
                     'year'=>$_POST['year'],
                     'vinCode'=>$_POST['vinCode'],
                     'number'=>$_POST['number'],
                     'description'=>$_POST['description'],
                    ];
           //debug($AutoArr);
           $result = $this->db->row('insert into auto set codeClient= :codeClient ,mark= :mark, model= :model, engine= :engine, year= :year, vinCode= :vinCode, number= :number, description= :description; ',$AutoArr);
        
           return 'clientADD';
       }
       return $result;
	}
   
public function permClient() {
		$temp = $this->db->row('SELECT count(executedWorks.codeAuto)>=2, codeAuto from executedWorks;');
      foreach ($temp as  $val){  
          array_shift($val);
    $result = $this->db->row('SELECT clients.name, clients.phone, clients.codeClient from clients, auto where auto.codeAuto= :codeAuto and clients.codeClient=auto.codeClient;',$val);
      }
		return $result;
	}
  public function lostClient() {
		$result = $this->db->row('SELECT clients.name , clients.codeClient, clients.phone FROM clients order by codeClient desc;');
		return $result;
	}
    
}
