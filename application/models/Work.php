<?php

namespace application\models;

use application\core\Model;

class Work extends Model {
    
    protected function getAxC($codeAuto=[]){
        $result=$this->db->row('select clients.name, clients.phone, clients.codeClient, auto.codeAuto, auto.mark, auto.model, auto.engine, auto.vinCode, auto.year, auto.number, auto.description from clients, auto where clients.codeClient=auto.codeClient and auto.codeAuto=:codeAuto; ', $codeAuto);
        return $result;
    }
    protected function getAxP($codeAuto=[]){
        $result=$this->db->row('select  prices.codeWork, prices.actualDate, prices.name, prices.description, prices.price from prices, auto, countryMark where auto.codeAuto=:codeAuto and prices.codeCountry=countryMark.codeCountry and countryMark.mark=auto.mark ; ', $codeAuto);
        return $result;
    }
    protected function getAxS($codeAuto=[]){
        $result=$this->db->row('select spares.codeSpare, spares.actualDate, spares.name, spares.description, spares.price from spares, auto, countryMark where auto.codeAuto=:codeAuto and spares.codeCountry=countryMark.codeCountry and countryMark.mark=auto.mark ; ', $codeAuto);
        return $result;
    }
    protected function getMxW() {
		$result = $this->db->row('SELECT masters.name, masters.specialization,masters.codeMaster FROM masters');
		return $result;
	}
	public function getWork($searchArr) {
		$result = $this->db->row('SELECT clients.name , clients.codeClient, clients.phone FROM clients;',$searchArr);
		return $result;
	}
    
   public function addWork($searchArr) {
       if(!empty($searchArr)){
           if(array_key_exists('codeAuto',$searchArr)){
               //debug($searchArr);
               $result = $this->db->row('SELECT auto.codeAuto FROM clients,auto where clients.codeClient=:codeClient and auto.codeAuto=:codeAuto;', $searchArr);
               $temp=$result[0];
               $resultAxC=$this->getAxC($temp);
               $resultAxP=$this->getAxP($temp);
               $resultAxS=$this->getAxS($temp);
               $resultMxW=$this->getMxW();
               unset($result);
               $result = [$resultAxC,$resultAxP,$resultAxS,$resultMxW];
           }
       }
       else{
		$result = $this->db->row(';', $searchArr);
       }
       
		return $result;
	}
   
}
