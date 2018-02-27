<?php

namespace App\Models;

class Artist extends BaseModel {
	protected $birthdate;

	function getBirthdate() {
		return $this->birthdate;
	}
}
