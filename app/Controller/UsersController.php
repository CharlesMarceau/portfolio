<?php

namespace app\Controller;

use core\HTML\BootstrapForm;
use core\Auth\DbAuth;
use App;

class UsersController extends AppController{

	public function login(){

		$errors = false;

		if( !empty($_POST) ){

			$auth = new DbAuth(App::getInstance()->getDb());

			if($auth->login( $_POST['username'], $_POST['password']) ){
				
				header('Location: ../admin/sites/index');
			} else {

				$errors = true;
			}
		}

		$form = new BootstrapForm($_POST);

		$this->show('users/login', compact('form', 'errors'));

	}
}