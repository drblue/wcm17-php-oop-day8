<?php

require("vendor/autoload.php");
require("config.php");

// connect to database via PDO
$dbh = new PDO("mysql:host=localhost;dbname=" . $config['database']['name'] . ";port=3306;charset=utf8mb4", $config['database']['user'], $config['database']['password']);
