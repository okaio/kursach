<?php

namespace application\models;

use application\core\Model;

class Money extends Model {

	public function getMoney() {
		$result = $this->db->row('SELECT name, specialization, phone FROM masters');
		return $result;
	}

}
