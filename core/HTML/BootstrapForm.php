<?php

namespace core\HTML;

class BootstrapForm extends Form{
	

	/**
	*
	* @param $html string Code HTML à entourer
	* @return string
	*/
	protected function surround($html) {
		return "<div class=\"form-field\">{$html}</div>";
	}

	/**
	*
	* @param $name
	* @param $label
	* @param array $options
	* @return string
	*/
	public function input($name, $label, $type = null) {

		$type = isset($type) ? $type : 'text';
		
		if($type === 'textarea'){

			$input = '<textarea name="' . $name . '" class="form-input" rows="8" placeholder="' . $label . '">' . $this->getValue( 
			 urlencode( $name ) ) . '</textarea>';

		} else {
			
			$input = '<input type="' . $type . '" name="' . $name . '" value="' . $this->getValue( 
			 urlencode( $name ) ) . '" class="form-input" placeholder="' . $label . '">';
		}

		return $this->surround($input);

	}

	public function inputImg($name){

		$input = 	'<input type="file" name="' . $name . '" />';

		return $this->surround( $input );
	}

	/**
	*
	* @param $name
	* @param $label
	* @param array $options
	* @return string
	*/
	public function password($name, $label, $options = []) {

		return $this->surround(
			'<input type="password" name="' . $name . '" value="' . $this->getValue( 
			 urlencode( $name ) ) . '" class="form-input" placeholder="' . $label . '">'
		);

	}

	/**
	*
	* @param $name
	* @param $label
	* @param array $options
	* @return string
	*/
	public function select($name, $label, $options = []) {

		$input = '<select class="form-input" name="' . $name . '" placeholder="' . $label . ' à sélectionner">';
		$options = $options['type'];

	
		// $input .= '<option disabled>Sélectionner une catégorie</option>';

		foreach($options as $k => $v){
		
			$attr = '';

			if( $k == $this->getValue( 
			 urlencode( $name ) )){
				$attr = ' selected';
			}

			$input .= '<option value="' . $k .'" ' . $attr . '>' . $v . '</option>';

		}

		$input .= '</select>';

		$label = $this->surround('<p>' . $label . '</p>');

		return $this->surround($label . $input);

	}

	/**
	 *
	 * @return string
	 *
	 */
	public function submit() {
		return $this->surround('<button type="submit" class="button">Envoyer</button>');
	}
	
}