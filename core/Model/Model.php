<?php

/**
 *
 * Permet de faire des requêtes par rapport aux différents types de contenu
 * Essentielle pour la PostModel, SiteModel et CategoryModel
 *
 */

namespace Core\Model;

use Core\Database\Database;

class Model {

	protected $table;

	protected $db;

	public function __construct(Database $db){

		$this->db = $db;

		if(is_null($this->table)){
			
			$parts = explode('\\', get_class($this));
			$class_name = end($parts);
			$this->table = strtolower(str_replace('Model', '', $class_name)) . 's';	
		}		
	}

	public function create($fields){

		$sql_parts = [];
		$attr = [];

		foreach($fields as $k => $v){

			$sql_parts[] = "$k = ?";
			$attr[] = $v;
		}

		$sql_part = implode(', ', $sql_parts);

		return $this->query("
			INSERT INTO {$this->table}
			SET $sql_part",
			$attr,
			true 
		);
	}

	public function update($id, $fields){

		$sql_parts = [];
		$attr = [];

		foreach($fields as $k => $v){

			$sql_parts[] = "$k = ?";
			$attr[] = $v;
		}

		$sql_part = implode(', ', $sql_parts);
		$attr[] = $id;

		return $this->query("
			UPDATE {$this->table}
			SET $sql_part WHERE id = ?",
			$attr,
			true 
		);
	}

	public function delete($id){

		return $this->query("
			DELETE FROM {$this->table}
			WHERE id = ?",
			[$id],
			true 
		);
	}

	public function query($statement, $attr = null, $one = false){

		if($attr){

			return $this->db->prepare(
				$statement,
				$attr,
				str_replace('Model', 'Entity', get_class($this)),
				$one
			);
		} else {

			return $this->db->query(
				$statement,
				str_replace('Model', 'Entity', get_class($this)),
				$one
			);
		}
	}

	public function getAll(){

		return $this->query('
			SELECT * 
			FROM ' . $this->table
		);
	}

	public function find($id){

		return $this->query("
			SELECT *
			FROM {$this->table}
			WHERE id = ?",
			[$id],
			true 
		);
	}

	public function extract($key, $value){

		$records = $this->getAll();
		$return = [];

		foreach($records as $k => $v){

			$return[$v->$key] = $v->$value;
		}

		return $return;
	}

}