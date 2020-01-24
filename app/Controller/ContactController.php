<?php

namespace app\Controller;

use core\HTML\BootstrapForm;

/**
* 
*/
class ContactController extends AppController{

	protected $title = 'Contact';
	protected $description = "Communiquez avec moi en m'écrivant directement via le formulaire ou à mon adresse info@charlesmarceau.com";
	protected $keywords = 'communication, écrire, courriel, échanger, message, nom, prénom';

	function __construct()
	{
		parent::__construct();

		$this->loadModel('Contact');
	}

	public function index(){

		$form = new BootstrapForm($_POST);

		$this->show('contact/index', compact('form'));
	}
}