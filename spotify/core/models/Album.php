<?php

namespace App\Models;

class Album extends BaseModel {
	protected $releaseyear;
	protected $artist_id;

	function getReleaseYear() {
		return $this->releaseyear;
	}

	function getArtistId() {
		return $this->artist_id;
	}
}
