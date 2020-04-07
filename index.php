<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Use Method</title>

</head>
<body>
<h2>Use Method</h2>
<form action="" method="get" name="inputLength">
    Enter length of array:
    <input type="number" name="length">
    <button type="submit">Enter</button>
</form>
<form action="action/save.php" method="post" name="inputValue">
    Enter value of array:
    <button type="submit">Enter</button>
    <br>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $length = (int)$_REQUEST["length"];
        echo '<tr>';
        for ($i = 0; $i < $length; $i++) {
            echo '<td><input type="text" name="array1[]"> </td>';
        }
        echo '</tr>';
    }
    ?>
    <br>
</form>

<?php
include 'function.php';
$data = getData('data.json');
if (isset($data)) {
    echo 'Array is: ';
    foreach ($data as $value) {
        foreach ($value as $item) {
            echo $item." ";
        }
    }
}
?>
<form action="action/delete.php" method="get">
    <br> Delete value:
    <input type="text" name="delete">
    <button type="submit" onclick="confirm('Are you sure?')"> Delete</button>
</form>

</body>
</html>