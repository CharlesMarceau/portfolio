<?php

namespace app\Model;

use core\Model\Model;

/**
* 
*/
class InteretModel extends Model{
	
	protected $table = "interets";

	public function last(){

		return $this->query('
			SELECT interets.id, interets.name, categories.title as category
			FROM interets
			LEFT JOIN categories ON category_id = categories.id
			ORDER BY interets.name ASC
		');
	}

	public function lastByCat(){

		return $this->query('
			SELECT interets.id, interets.name, categories.title as category
			FROM interets
			LEFT JOIN categories ON category_id = categories.id
			ORDER BY interets.category_id ASC, interets.name ASC
		');
	}
}