<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Random 10x10 Table</title>
    <style>
        table, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
            text-align: center;
        }
    </style>
</head>
<body>

<?php

function randomTable() {
    echo "<table>";
    for ($i = 0; $i < 10; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 10; $j++) {
            $randNum = rand(10, 99);
            echo "<td>$randNum</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}


randomTable();

?>

</body>
</html>