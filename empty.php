<?php

include_once __DIR__ . '/mongodb.php';

$cursor = $goods->find(
    ['amount' => 0],
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