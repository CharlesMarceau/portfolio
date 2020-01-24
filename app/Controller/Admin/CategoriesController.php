<?php

namespace app\Controller\Admin; // ADMIN

use core\HTML\BootstrapForm;

class CategoriesController extends AppController{


	public function __construct(){

		parent::__construct();
		$this->loadModel('Category');
	}


	public function index(){

		$categories = $this->Category->getAll();
		$this->show( 'admin/categories/index', compact('categories') );
	}


	public function add(){

		if(!empty($_POST)){
			
			$result = $this->Category->create([
				'title' => $_POST['title']
			]);
			
			return $this->index();
		}

		$form = new BootstrapForm();
		$this->show('admin/categories/edit', compact('form'));

	}


	public function edit(){

		if(!empty($_POST)){
			
			$result = $this->Category->update( $_GET['id'], [
				'title' => $_POST['title']
				]
			);

			return $this->index();
		}

		$category = $this->Category->find($_GET['id']);

		$form = new BootstrapForm($category);
		$this->show('admin/categories/edit', compact('form'));
	}


	public function delete(){

		if(!empty($_POST)){
			
			$result = $this->Category->delete($_POST['id']);

			return $this->index();
		}

	}
}