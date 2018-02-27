<?php

namespace App\Models;

abstract class BaseModel {
	protected $id;
	protected $name;

	function getId() {
		return $this->id;
	}

	function getName() {
		return $this->name;
	}
}
