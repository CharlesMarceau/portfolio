<?php

namespace app\Model;

use core\Model\Model;

/**
* 
*/
class CompetenceModel extends Model{

	protected $table = "competences";

	public function last(){

		return $this->query('
			SELECT competences.id, competences.title, competences.text, competences.icon
			FROM competences
			ORDER BY competences.title ASC
		');
	}

}