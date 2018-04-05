<?php

namespace application\models;

use application\core\Model;

class Price extends Model {

	public function getPrice($searchArr) {
		$result = $this->db->row('SELECT name, description, codeCountry, price FROM prices where codeCountry = :codeCountry', $searchArr);
		return $result;
	}


}
