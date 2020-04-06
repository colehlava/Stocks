<!DOCTYPE html>
<html>
<body>
<div align="center" style="background-color:lightgreen">
<br>
<h1>Stock Prices</h1>
<?php
    $stockList = file('watchlist.txt');
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
        else {
            continue;
        }
        echo "</p>";
    }
?>
<br>
<form action="action_form.php" method="post">
    <label for="fname">Add new stock:</label>
    <input type="text" id="fname" name="fname"><br><br>
    <input type="submit" name="submit" value="submit">
</form>
</div>
</body>
</html>
