<?php

include_once __DIR__ . '/vendor/autoload.php';

$connection = new MongoDB\Client('mongodb://localhost:27017');
$goods = $connection->lb2->goods;
