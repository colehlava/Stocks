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
        $contents = file_get_contents($filename);
        $contents = trim($contents);
        echo $contents;
        echo "</p>";
    }
?>
<br>
<form action="/action_page.php">
    <label for="fname">First name:</label>
    <input type="text" id="fname" name="fname"><br><br>
    <label for="lname">Last name:</label>
    <input type="text" id="lname" name="lname"><br><br>
    <input type="submit" value="Submit">
</form>
</div>
</body>
</html>
