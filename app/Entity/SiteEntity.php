<?php

/**
 *
 * Les Entities représentent chaque enregistrement
 * Crées le lien URL
 *
 */

namespace app\Entity;

use \core\Entity\Entity;

class SiteEntity extends Entity{


	public function getUrl(){

		return BASE_URL .'sites/single/' . strtolower( urldecode($this->title) ) . '/';
	}

	public function getDetails(){
		
		$html = '<a href="' . $this->getUrl() . '">';
		$html .= 	'<img class="background" src="' . IMAGES . $this->img_desktop . '">';
		$html .=    '<h2>' . $this->title . '</h2>';
		$html .= '</a>';

		return $html;
	}
	
}