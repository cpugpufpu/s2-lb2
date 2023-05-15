<?php

include_once __DIR__ . '/mongodb.php';

if (isset($_POST['min_price']) && isset($_POST['max_price'])) {
    $cursor = $goods->find(
        ['price' => ['$gt' => (int) $_POST['min_price'], '$lt' => (int) $_POST['max_price']]],
        ['projection' => ['_id' => false]],
    );

    echo "<table>";
    echo "<tr><th>Name</th><th>Manufacturer</th><th>Price</th><th>Amount</th></tr>";
    foreach ($cursor as $item) {
        echo "<tr>";

        echo "<td>" . $item->name . "</td>";
        echo "<td>" . $item->manufacturer . "</td>";
        echo "<td>" . $item->price . "</td>";
        echo "<td>" . $item->amount . "</td>";

        echo "</tr>";
    }
    echo "</table>";

    echo "In a range " . $_POST['min_price'] . ' - ' . $_POST['max_price'];
}