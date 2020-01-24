<?php

namespace app\Controller\Admin; // ADMIN

use core\HTML\BootstrapForm;

class SitesController extends AppController{

	protected $title;

	public function __construct(){

		parent::__construct();
		$this->loadModel('Site');
	}

	public function index(){

		$sites = $this->Site->last();
		$this->show( 'admin/sites/index', compact('sites') );
	}

	public function add(){

		if(isset($_FILES['img_desktop']['name']) && isset($_FILES['img_mobile']['name'])){

			$imgDeskName = $_FILES['img_desktop']['name'];
			$imgMobName = $_FILES['img_mobile']['name'];
			$media = ROOT . '/media/';
			$deskFile = basename($_FILES['img_desktop']['name']);
			$mobFile = basename($_FILES['img_mobile']['name']);

			$taille_maxi = 1048576;
			$taille = filesize($_FILES['img_desktop']['tmp_name']);
			$extensions = array('.png', '.gif', '.jpg', '.jpeg');
			$extension = strrchr($_FILES['img_desktop']['name'], '.'); 

			//Début des vérifications de sécurité...
			// if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
			// {
			//      $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc...';
			// }
			// if($taille>$taille_maxi)
			// {
			//      $erreur = 'Le fichier est trop gros...';
			// }
			// if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
			// {
			//      //On formate le nom du fichier ici...
			//      $file = strtr($file, 
			//           'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
			//           'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
			//      $file = preg_replace('/([^.a-z0-9]+)/i', '-', $file);

			//      if(move_uploaded_file($_FILES['img_desktop']['tmp_name'], $media . $file)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
			//      {
			//           echo '';
			//      }
			//      else //Sinon (la fonction renvoie FALSE).
			//      {
			//           echo 'Echec de l\'upload !';
			//      }
			// }
			// else
			// {
			//      echo $erreur;
			// }
			if(!empty($_POST)){
				
				$result = $this->Site->create([
					'title'			=> $_POST['title'],
					'img_desktop' 	=> $deskFile,
					'img_mobile' 	=> $mobFile,
					'web'			=> $_POST['web'],
					'experience'	=> $_POST['experience']
				]);

				if($result){
				
					return $this->index();
				}
			}
		}

		// $site = $this->Site->find($_POST);
		$form = new BootstrapForm($_POST);
		// affichage
		$this->show('admin/sites/edit', compact('form'));

	}


	public function edit(){

		$page = explode(SEPATOR, str_replace(BASE_PATH, '', $_SERVER['REQUEST_URI']));
		$id = $page[3];


		if( empty( $site->img_desktop ) || empty( $site->img_mobile ) ){

			if( isset($_FILES['img_desktop']['name']) && isset($_FILES['img_mobile']['name']) ){
	
				$imgDeskName = $_FILES['img_desktop']['name'];
				$imgMobName = $_FILES['img_mobile']['name'];
				$media = ROOT . '/media/';
				$deskFile = basename($_FILES['img_desktop']['name']);
				$mobFile = basename($_FILES['img_mobile']['name']);

				if(!empty($_POST)){			
					
					$result = $this->Site->update($id, [
						'title' 		=> $_POST['title'],
						'img_desktop' 	=> $deskFile,
						'img_mobile' 	=> $mobFile,
						'web'			=> $_POST['web'],
						'experience'	=> $_POST['experience']
					]);

					if($result){

						return $this->index();
					}
				}
			}
		}

		if ( ( !empty($site->img_desktop) || !empty($site->img_mobile) ) && ( empty($_FILES['img_desktop']['name']) && empty($_FILES['img_mobile']['name']) ) ){

			if(!empty($_POST)){			
				
				$result = $this->Site->update($id, [
					'title' 		=> $_POST['title'],
					'img_desktop' 	=> $_POST['img_desktop'],
					'img_mobile' 	=> $_POST['img_mobile'],
					'web'			=> $_POST['web'],
					'experience'	=> $_POST['experience']
				]);

				if($result){

					return $this->index();
				}
			}
		}

		if ( ( !empty($site->img_desktop) || !empty($site->img_mobile) ) && ( isset($_FILES['img_desktop']['name']) && isset($_FILES['img_mobile']['name']) ) ){

			$imgDeskName = $_FILES['img_desktop']['name'];
			$imgMobName = $_FILES['img_mobile']['name'];
			$media = ROOT . '/media/';
			$deskFile = basename($_FILES['img_desktop']['name']);
			$mobFile = basename($_FILES['img_mobile']['name']);

			if(!empty($_POST)){			
				
				$result = $this->Site->update($_GET['id'], [
					'title' 		=> $_POST['title'],
					'img_desktop' 	=> $deskFile,
					'img_mobile' 	=> $mobFile,
					'web'			=> $_POST['web'],
					'experience'	=> $_POST['experience']
				]);

				if($result){

					return $this->index();
				}
			}
		}

		$site = $this->Site->find($id);
		$form = new BootstrapForm($site);
		// affichage
		$this->show('admin/sites/edit', compact('form','site'));
	}

	public function delete(){

		if(!empty($_POST)){
											// ceci correspond au "name" d'où le id est le $_POST[«name=»] et obtient sa "value"
			$result = $this->Site->delete($_POST['id']);

			return $this->index();
		}
	}

}