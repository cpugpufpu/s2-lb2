<?php

include_once __DIR__ . '/mongodb.php';

$cursor = $goods->distinct('manufacturer');

foreach ($cursor as $name) {
    $result = "<p>$name</p>";

    echo $result;
}
