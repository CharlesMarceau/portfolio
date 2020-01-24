<?php

namespace app\Controller;

use core\Controller\Controller;

/**
* 
*/
class InteretsController extends AppController{

	protected $title = 'Intérêts'; 
	protected $description = "Voici mes intérêts personnels qui permet d'en connaître un peu plus sur moi et ma personnalité";
	protected $keywords = 'sports, activités, passes-temps, hobby, hockey, jeux de société, croquet, pétanque, cinéma, film';

	
	public function __construct(){

		parent::__construct();

		$this->loadModel('Interet');
		$this->loadModel('Category');
	}

	public function index(){

		$interets = $this->Interet->lastByCat();

		$categories = $this->Category->getAll();

		$this->show('interets/index', compact('interets', 'categories'));
	}

}