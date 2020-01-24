<?php

namespace app\Controller;

use core\Controller\Controller;

class CompetencesController extends AppController{

	protected $title = 'Compétences';
	protected $description = "J'ai de l'expérience en développement Web plus spécifiquement en développement Front-End. J'ai appliqué concrètement le HTML, le CSS, PHP et jQuery et la mise en place pour du référencement.";
	protected $keywords = 'PHP, CSS, HTML, jQuery, Google Map, Google Analytics, PayPal, SEO, référencement, fonctions, MySQL, requête, animation, Web';

	public function __construct(){
		
		parent::__construct();

		$this->loadModel('Competence');
	}

	public function index(){

		$competences = $this->Competence->last();

		$this->show('competences/index', compact('competences'));
	}
}