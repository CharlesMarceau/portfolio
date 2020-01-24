<?php

/**
 *
 * Permet de faire des requêtes et d'envoyer des résultats
 *
 */


namespace Core\Database;

use \PDO;

class MysqlDatabase extends Database{

	private $db_name;
	private $db_user;
	private $db_pass;
	private $db_host;
	private $pdo;

	public function __construct($db_name, $db_user = 'root', $db_pass = 'root', $db_host = 'localhost') {

		$this->db_name = $db_name;
		$this->db_user = $db_user;
		$this->db_pass = $db_pass;
		$this->db_host = $db_host;

	}

	// accesseur 
	private function getPDO(){
		// Empêche une deuxième ++ requête à la base de données
		if($this->pdo === NULL) {
			$pdo = new PDO('mysql:dbname=charlesmarceau.com_2018;host=localhost','root','root');
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->pdo = $pdo;			
		}

		return $this->pdo;
	}

	public function query($statement, $class_name = null, $one = false){

		$requete = $this->getPDO()->query($statement);


		if(
			strpos($statement, 'UPDATE') ||
			strpos($statement, 'INSERT') ||
			strpos($statement, 'DELETE')
		) {

			return $requete;
		}
		// on utilise fetch_class et on doit lui dire quelle est la classe à utiliser

		if( $class_name === null ){
			
			$requete->setFetchMode(PDO::FETCH_OBJ);
		} else {

			$requete->setFetchMode(PDO::FETCH_CLASS, $class_name);
		}


		 if( $one ) {
	
			$datas = $requete->fetch();
		} else {
	
			$datas = $requete->fetchAll();
		}

		return $datas;
	}

	public function prepare($statement, $attr, $class_name = null, $one = false){
		
		$requete = $this->getPDO()->prepare($statement);
		$result = $requete->execute($attr);

		if(
			strpos($statement, 'UPDATE') ||
			strpos($statement, 'INSERT') ||
			strpos($statement, 'DELETE') 		
		) {

			return $result;
		}

		// $requete->setFetchMode(PDO::FETCH_CLASS, $class_name);

		if( $class_name === null ){
			
			$requete->setFetchMode(PDO::FETCH_OBJ);
		} else {

			$requete->setFetchMode(PDO::FETCH_CLASS, $class_name);
		}

		if( $one ) {
	
			$datas = $requete->fetch();
		} else {
	
			$datas = $requete->fetchAll();
		}

		return $datas;
	}

	public function lastInsertId(){

		return $this->getPDO()->lastInsertId();
	}
}