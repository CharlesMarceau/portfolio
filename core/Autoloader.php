<?php

namespace core;

/**
 *
 * Class Autoloader
 * @package Tutoriel
 *
 */


class Autoloader {

	/**
	 *
	 * Enregistre notre autoloader
	 *
	 */
	
	static function register() {
		// la constante __CLASS__ contient le nom de la classe courante
		spl_autoload_register(array(__CLASS__,'autoload'));
	}

	/**
	 *
	 * Inclut le fichier correspondant à notre classe
	 * @param $class string le nom de la classe à charger
	 *
	 */
	
	static function autoload($class) {

		$class = str_replace( __NAMESPACE__ . '\\', '', $class);
		$class = str_replace('\\', '/', $class);

		if( is_file(__DIR__ . '/' . $class . '.php')  ){
			require __DIR__ . '/' . $class . '.php';
		}

	}
}