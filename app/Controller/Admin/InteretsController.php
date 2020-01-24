<?php 

namespace app\Controller\Admin; // ADMIN

use core\HTML\BootstrapForm;

class InteretsController extends AppController{

	protected $title;

	public function __construct(){

		parent::__construct();
		$this->loadModel('Interet');
		$this->loadModel('Category');
	}

	public function index(){

		$interets = $this->Interet->lastByCat();
		$this->show('admin/interets/index', compact('interets'));
	}

	public function add(){
		
		if(!empty($_POST)){
			
			$result = $this->Interet->create([
				'name'			=> $_POST['name'],
				'category_id' 	=> $_POST['category_id']
			]);

			if($result){
			
				return $this->index();
			}
		}

		$categories = $this->Category->extract('id', 'title');
		$form = new BootstrapForm($_POST);

		$this->show( 'admin/interets/edit', compact( 'categories', 'form' ) );
	}

	public function edit(){

		$page = explode(SEPATOR, str_replace(BASE_PATH, '', $_SERVER['REQUEST_URI']));
		$id = $page[3];

		if(!empty($_POST)){
			
			$result = $this->Interet->update($id, [
				'name'	=> $_POST['name'],
				'category_id' 	=> $_POST['category_id']
			]);

			if($result){
			
				return $this->index();
			}
		}

		$interet = $this->Interet->find($id);
		$categories = $this->Category->extract('id', 'title');
		$form = new BootstrapForm($interet);

		$this->show('admin/interets/edit', compact('categories', 'form', 'interet'));

	}

	public function delete(){

		if(!empty($_POST)){
			
			$result = $this->Interet->delete($_POST['id']);
			
			return $this->index();
		}

	}

}
