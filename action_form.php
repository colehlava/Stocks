<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Submit new Stock</title>
</head>
<body>
<div align="center">
    <h1>Add New Stock</h1>
    <p>Added stock: <?php
        if (isset($_POST['fname'])) {
            $name = $_POST['fname'];
            echo $name;
            $name .= "\n";
            $file = '/home/pi/Documents/Apps/Stocks/Stocks/watchlist.txt';
            $old = file_get_contents($file);
            file_put_contents($file, $name . $old);
        }
        ?>
    </p>
    <p><a href="index.html">Return to Stocklist</a></p>
</div>
</body>
</html>
