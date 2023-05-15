<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LB2</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th, table td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        table th {
            background-color: #f2f2f2;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        table tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <h2>Active manufacturers: </h2>
    <?php include_once __DIR__ . '/manufacturers.php' ?>
    <br>
    <hr>
    <br>
    <h2>Required goods:</h2>
    <?php include_once __DIR__ . '/empty.php' ?>
    <h2>Get a goods in a price range:</h2>
    <?php include_once __DIR__ . '/range.php' ?>
    <form method="POST">
        <label for="min_price">Min price:</label>
        <input type="input" id="min_price" name="min_price" required>
        <br>
        <label for="max_price">Max price:</label>
        <input type="max_price" id="max_price" name="max_price" required>
        <br>
    <button type="submit">Get items</button>
</form>
</body>
</html>
