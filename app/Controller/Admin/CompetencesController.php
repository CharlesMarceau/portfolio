<?php

namespace app\Controller\Admin;

use core\HTML\BootstrapForm;

class CompetencesController extends AppController{

	protected $title;
	
	public function __construct(){
		
		parent::__construct();

		$this->loadModel('Category');
		$this->loadModel('Competence');
	}

	public function index(){

		$competences = $this->Competence->last();

		$this->show('admin/competences/index', compact('competences'));
	}

	public function add(){

		if(!empty($_POST)){

			$result = $this->Competence->create([
				'title'		=> $_POST['title'],
				'text'		=> $_POST['text'],
				'icon'		=> $_POST['icon']
			]);

			if($result){
				return $this->index();
			}
		}

		$form = new BootstrapForm($_POST);

		$this->show('admin/competences/edit', compact('form'));
	}

	public function edit(){

		$page = explode(SEPATOR, str_replace(BASE_PATH, '', $_SERVER['REQUEST_URI']));
		$id = $page[3];

		if(!empty($_POST)){

			$result = $this->Competence->update($id,[
				'title'		=> $_POST['title'],
				'text'		=> $_POST['text'],
				'icon'		=> $_POST['icon']
			]);

			if($result){
				return $this->index();
			}
		}

		$competence = $this->Competence->find($id);
		$form = new BootstrapForm($competence);

		$this->show('admin/competences/edit', compact('competence', 'form'));
	}

	public function delete(){

		if(!empty($_POST)){

			$result = $this->Competence->delete($_POST['id']);

			return $this->index();
		}

	}
}