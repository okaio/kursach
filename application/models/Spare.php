<?php

namespace application\models;

use application\core\Model;

class Spare extends Model {

	public function getSpare($searchArr) {
		$result = $this->db->row('SELECT name, description, codeCountry, price FROM spares where codeCountry = :codeCountry', $searchArr);
		return $result;
	}

}
