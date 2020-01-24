<?php

namespace app\Controller;

use core\Controller\Controller;

/**
* 
*/
class HomeController extends AppController{

	protected $title = 'Introduction';

	public function __construct(){

		parent::__construct();

		$this->loadModel('Site');
	}

	public function index(){

		$sites = $this->Site->random();

		$this->show('home/index' , compact('sites') );
	}

}