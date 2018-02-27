<?php

namespace App\Controllers;

use \PDO;
use \App\Models\Artist;

class ArtistController {
	protected $dbh;

	function __construct($dbh) {
		$this->dbh = $dbh;
	}

	function getArtists() {
		// SELECT * FROM artists
		$query = $this->dbh->prepare("SELECT * FROM artists");
		$query->execute();
		$artists = $query->fetchAll(PDO::FETCH_CLASS, 'App\Models\Artist');

		return $artists;
	}
}
