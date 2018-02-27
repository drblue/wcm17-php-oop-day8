<?php

namespace App\Models;

class Track extends BaseModel{
	protected $trackLength;
	protected $album_id;

	// @todo: improve to return minutes:seconds instead of just seconds
	function getTrackLength() {
		return $this->trackLength;
	}

	function getAlbumId() {
		return $this->album_id;
	}
}
