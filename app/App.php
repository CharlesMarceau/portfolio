<?php

/**
 *
 * Classe permettant de faire un "factory"
 * Permet d'initialiser nos instances
 * Objet de "singleton"
 * Sert à créer et récupérer des propriétés ( carrefour pour l'application )
 *
 */

use core\Config;
use core\Database\MysqlDatabase;

class App{

	public $title = "Blog incroyable!";

	private $db_instance;

	private static $_instance;

	public static function getInstance(){

		if(is_null(self::$_instance)) {
			self::$_instance = new App();
		}

		return self::$_instance;
	}
	

	public static function load(){
		
		session_start();
		
		require ROOT . '/app/Autoloader.php';
		app\Autoloader::register();

		require ROOT . '/core/Autoloader.php';
		core\Autoloader::register();
	}


	public function getModel($name){

		$class_name = '\\app\\Model\\' . ucfirst($name) . 'Model';

		return new $class_name($this->getDb());
	}


	public function getDb(){

		$config = Config::getInstance(ROOT . '/config/config.php');

		if(is_null($this->db_instance)){
	
			$this->db_instance = new MysqlDatabase($config->get('db_name'),$config->get('db_user'),$config->get('db_pass'),$config->get('db_host'));
		}

		return $this->db_instance;
	}

	public function getTitle(){

		return $this->title;
	}

	public function setTitle($title){

		return $this->title = $title;
	}

}