<!DOCTYPE html>
<html>
<body>
<div align="center" style="background-color:lightgreen">
<h1>Stock Prices</h1>
<?php
    $stockList = file('watchlist.txt');
    foreach ($stockList as $stock) {
        $stock = trim($stock);
        echo "\n<p>";
        echo $stock;
        echo ": $";
        $filename = $stock . ".price";
        $filename = trim($filename);
        $contents = file_get_contents($filename);
        $contents = trim($contents);
        echo $contents;
        echo "</p>";
    }
?>
<br>
</div>
</body>
</html>
