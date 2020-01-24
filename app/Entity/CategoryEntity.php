<?php

/**
 *
 * Les Entities représentent chaque enregistrement
 * Crées le lien URL
 *
 */


namespace app\Entity;

use \core\Entity\Entity;

class CategoryEntity extends Entity{

	public function getUrl(){

		return '?p=interets/category&id=' . $this->id;
	}
}