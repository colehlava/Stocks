<!DOCTYPE html>
<html>
<body>
<div align="center" style="background-color:lightgreen">
<br>
<h1>Stock Prices</h1>
<?php
    $stocks_file = 'watchlist.txt';

    if (file_exists($stocks_file)) {
        $stockList = file($stocks_file);

        foreach ($stockList as $stock) {
            $stock = trim($stock);
            echo "\n<p>";
            echo $stock;
            echo ": $";
            $filename = $stock . ".price";
            if (file_exists($filename)) {
                $contents = file_get_contents($filename);
                $contents = trim($contents);
                echo $contents;
            }
            echo "</p>";
        }
    }
?>
<br>
<h2>Add Stocks</h2>
<form action="action_form.php" method="post">
    <label for="fname">Stock Symbol: </label>
    <input type="text" id="fname" name="fname">
    <br><br>
    <input type="submit" name="submit" value="Add Stock">
</form>
</div>
</body>
</html>
