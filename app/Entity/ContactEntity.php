<?php

namespace app\Entity;

use \core\Entity\Entity;

/**
* @return string pour URL
*/
class ContactEntity extends Entity{
	
	public function getUrl(){

		return '?p=contact/index';
	}
}