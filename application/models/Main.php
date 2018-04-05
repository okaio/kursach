<?php

namespace application\models;

use application\core\Model;

class Main extends Model {

	public function getNews() {
		$result = $this->db->row('SELECT name, description, actualDate FROM news');
		return $result;
	}

}
