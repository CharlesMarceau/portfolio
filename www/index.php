<?php

if (isset($_SERVER['HTTP_HOST'])) {
	$base_url = (empty($_SERVER['HTTPS']) OR strtolower($_SERVER['HTTPS']) === 'off') ? 'http' : 'https';
	$base_url .= '://'. $_SERVER['HTTP_HOST'];
	$base_url .= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
} else {
	$base_url = 'http://localhost/charlesmarceau.com';
}

define('BASE_URL', $base_url);
define('BASE_PATH', '/charlesmarceau.com/');
define('SEPATOR', '/'); // AJOUTER POUR TOUS LES SÉPARATEURS
define('ROOT', dirname(__DIR__));
define('TEMPLATES', "/app/views/templates/");
define('IMAGES', BASE_URL . 'media/');

require ROOT . '/app/App.php';

App::load();
$page = explode( SEPATOR, str_replace( BASE_PATH, '', $_SERVER['REQUEST_URI'] ) );

if($page[0] == 'admin'){

	// premier élément de l'URL
	$controller = '\app\Controller\Admin\\' . ucfirst($page[1]) . 'Controller';

	if( isset($page[2]) && $page[2] != "" ) {

		$action = $page[2];
	} else {

		$action = 'index';
	}
	// deuxième élément de l'URL
} else {

	// permet de séparer notre URL en 2 parties ->  1 - controller, 2 - action à appeler
	if( !is_file('app/Controller/' . ucfirst($page[0]) . 'Controller.php') ){

		$page = 'home/index';
		$page = explode('/', $page);
	}

	$controller = '\app\Controller\\' . ucfirst($page[0]) . 'Controller';
	if( isset($page[1]) && $page[1] != "" ) {

		$action = $page[1];
	} else {

		$action = 'index';
	}
	
}

define('PAGE', $page[0]);

$controller = new $controller();
if (method_exists($controller, $action)) {

	$controller->$action();
}
