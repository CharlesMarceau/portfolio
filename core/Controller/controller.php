<?php

namespace core\Controller;

class Controller{

	protected $viewPath;
	protected $template;

	// variable qui permet d'afficher la partie Controller
	protected function show( $view, $variables = [] ){

		ob_start();

		// suite à la fonction "compact()" de PHP, on extrait en faisant "extract()"
		extract($variables);

		require( $this->viewPath . str_replace('.', '/', $view) . '.php' );
		
		$content = ob_get_clean();

		require( $this->viewPath . 'templates/' . $this->template . '.php' );
	}


	protected function notFound(){

		header("HTTP/1.0 404 Not Found");
		die("Page introuvable !");
	}


	protected function forbidden(){

		header("HTTP/1.0 403 Forbidden");
		die("Accès interdit !");
	}
}