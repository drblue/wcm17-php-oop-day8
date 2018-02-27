<?php

require("core/init.php");
require("templates/header.php");

use App\Controllers\ArtistController;
use App\Controllers\AlbumController;

$artistController = new ArtistController($dbh);
$artists = $artistController->getArtists();

$albumController = new AlbumController($dbh);
// $albums = $albumController->getAlbums();

?>
<h1>Artists</h1>

<?php
	foreach ($artists as $artist) {
		echo "<h2>{$artist->getName()}</h2>";
		$albums = $albumController->getAlbumsForArtist($artist->getId());
		foreach ($albums as $album) {
			echo "<h3>{$album->getName()} ({$album->getReleaseYear()})</h3>";
		}
	}
?>

<?php
require("templates/footer.php");
