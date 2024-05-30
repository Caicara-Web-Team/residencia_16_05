<?php
require __DIR__ . '/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory = (new Factory())->withDatabaseUri('https://caicara-9aecb-default-rtdb.firebaseio.com/');

$database = $factory->createDatabase();

?>