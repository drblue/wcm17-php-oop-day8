<?php

namespace App\Controllers;

use \PDO;

class AlbumController {
	protected $dbh;

	function __construct($dbh) {
		$this->dbh = $dbh;
	}

	function getAlbums() {
		// SELECT * FROM albums
		$query = $this->dbh->prepare("SELECT * FROM albums");
		$query->execute();
		$albums = $query->fetchAll(PDO::FETCH_CLASS, 'Album');

		return $albums;
	}

	function getAlbumsForArtist($artist_id) {
		// SELECT * FROM albums WHERE artist_id = $artist_id
		$query = $this->dbh->prepare("SELECT * FROM albums WHERE artist_id=:artist_id");
		$query->execute(['artist_id' => $artist_id]);
		$albums = $query->fetchAll(PDO::FETCH_CLASS, 'App\Models\Album');

		return $albums;
	}
}
