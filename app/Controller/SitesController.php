<?php

namespace app\Controller;

use core\Controller\Controller;
use App;

class SitesController extends AppController{

	protected $title = 'Sites';
	protected $description = "Je vous présente les sites sur lesquels j'ai pu mettre en pratique tel ou tel type de langage, ce que j'ai aimé ou ce dont je suis fier.";
	protected $keywords = 'site, web, animation, expérience, apprentissage, améliorer, liens';

	public function __construct(){

		parent::__construct();

		$this->loadModel('Site');	
	}

	public function index(){

		$sites = $this->Site->last();

		$this->show('sites/index', compact('sites'));
	}

	public function single(){

		$page = substr( $_SERVER['REQUEST_URI'], 1, -1 );
		$page = explode( SEPATOR, $page );

		$single_site = $this->Site->singleSite(urldecode($page[2]));

		if( $single_site === false ){

			return $this->notFound();
		}

		// set le nouveau titre ( balise title ) pour un site en "single"
		$singleTitle = $this->title . ' - ' . $single_site->title;
		// renvoi le nouveau titre ( balise title )
		$this->title = App::getInstance()->setTitle($singleTitle);

		$this->show('sites/single', compact('single_site'));
	}

}