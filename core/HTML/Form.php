<?php

namespace core\HTML;

/**
 *
 * Class form
 * permet de générer un formulaire rapidement et simplement
 */


class Form {
	
	/**
	 *
	 * @var array Données utilises par le formulaire
	 *
	 */
	protected $data;

	/**
	 *
	 * @var string Tag utilisé pour entourer les champs
	 *
	 */
	public $surround = 'p';

	/**
	 *
	 * @param array $data Données utilises par le formulaire
	 * 
	 */
	public function __construct($data = array()) {
		$this->data = $data;
	}

	/**
	 *
	 * @param $html string Code HTML à entourer
	 * @return string
	 */
	protected function surround($html) {
		return "<{$this->surround}>{$html}</{$this->surround}>";
	}

	/**
	 *
	 * @param $index string Index de la valeur à récuperer
	 * @return string
	 */
	protected function getValue($index) {

		if(is_object( $this->data )){

			return $this->data->$index;
		}

		return isset( $this->data[$index] ) ? $this->data[$index] : null;
	}

	/**
	 *
	 * @param $name
	 * @return string
	 */
	public function input($name, $label, $options = []) {

		$type = isset($options['type']) ? $options['type'] : 'text';
		
		return $this->surround(
			'<input type="' . $type . '" name="' . $name . '" value="' . $this->getValue($name) . '" placeholder="' . $label . '">'
		);			
	}

	/**
	 * 
	 * @param $name
	 * @return string
	 *
	 */

	public function submit() {
		return $this->surround('<button type="submit">Envoyer</button>');
	}

}