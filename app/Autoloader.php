<?php

namespace app;

class Autoloader {

	static function register() {
		// la constante __CLASS__ contient le nom de la classe courante
		spl_autoload_register(array(__CLASS__,'autoload'));
	}

	static function autoload($class) {

		$class = str_replace( ROOT . '\\', '', $class);
		$class = str_replace('\\', '/', $class);

		if( is_file( ROOT . '/' . $class . '.php') ){
			require ROOT . '/' . $class . '.php';
		}
	}
}