<?php

/**
 *
 * "Core" de la création du $_GET[''] dans l'URL
 * Extends aux entités du dossier "app"
 *
 */

namespace Core\Entity;

class Entity{

	public function __get($key){

		// pour faire getMajuscule() pour reconnaitre la method
		$method = 'get' . ucfirst($key);
		$this->$key = $this->$method();
		
		return $this->$key;
	}
}