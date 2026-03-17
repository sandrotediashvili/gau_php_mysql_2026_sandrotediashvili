<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Matrica</title>
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

$matrica = [];

for ($i = 0; $i < 6; $i++) {
    for ($j = 0; $j < 5; $j++) {
        $matrica[$i][$j] = $i + $j;
    }
}

echo "<table>";

for ($i = 0; $i < 6; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 5; $j++) {
        echo "<td>".$matrica[$i][$j]."</td>";
    }
    echo "</tr>";
}

echo "</table>";

?>

</body>
</html>