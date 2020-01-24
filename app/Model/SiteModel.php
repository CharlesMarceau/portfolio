<?php

namespace app\Model;

use core\Model\Model;

class SiteModel extends Model{

	protected $table = "sites";

	public function last(){

		return $this->query('
			SELECT sites.id, sites.title, sites.img_desktop, sites.img_mobile, sites.web, sites.experience
			FROM sites
			ORDER BY sites.title ASC
		');
	}

	public function singleSite($title){

		return $this->query('
			SELECT sites.id, sites.title, sites.img_desktop, sites.img_mobile, sites.web, sites.experience
			FROM sites
			WHERE sites.title = ?',
			[$title],
			true
		);
	}

	public function random(){

		return $this->query('
			SELECT sites.id, sites.title, sites.img_desktop, sites.web
			FROM sites
			ORDER BY rand()
			LIMIT 3
		');
	}

}