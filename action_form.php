<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Submit new Stock</title>
</head>
<body>
    <h1>Add New Stock</h1>
    <p>Added stock: <?php
        if (isset($_POST['fname'])) {
            $name = $_POST['fname'];
            echo $name;
            $name .= "\n";
            $file = '/home/pi/Documents/Apps/Stocks/Stocks/watchlist.txt';
            file_put_contents($file, $name, FILE_APPEND | LOCK_EX);
        }
        ?>
    </p>
    <p><a href="index.html">Return to Homepage</a></p>
</body>
</html>
