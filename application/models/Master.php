<?php

namespace application\models;

use application\core\Model;

class Master extends Model {

	public function getMaster() {
		$result = $this->db->row('SELECT name, specialization, phone FROM masters');
		return $result;
	}

}
