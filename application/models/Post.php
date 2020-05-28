<?php

namespace application\models;

use application\core\Model;

class Post extends Model {

	public function showPost() {
		$result = $this->db->row('SELECT name, description FROM posts');
		return $result;
    }
    

}