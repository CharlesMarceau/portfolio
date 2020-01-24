<?php

namespace app\Controller\Admin;

use App;
use core\Auth\DbAuth;

class AppController extends \app\Controller\AppController{

	public function __construct(){

		parent::__construct();

		/*----------  AUTHENTICATE  ----------*/
		$app = App::getInstance();
		$auth = new DbAuth($app->getDb());

		if(!$auth->logged()){

			$this->forbidden();
		}
	}
}