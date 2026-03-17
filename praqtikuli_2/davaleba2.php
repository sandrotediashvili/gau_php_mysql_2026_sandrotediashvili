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

<form method="POST">
    Sheiyvane X: <input type="number" name="x" required>
    <button type="submit">Gamotvla</button>
</form>

<?php

$matrica = [];
for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 4; $j++) {
        $matrica[$i][$j] = rand(10, 100);
    }
}

echo "<h3>Matrica</h3>";
echo "<table>";
foreach ($matrica as $row) {
    echo "<tr>";
    foreach ($row as $val) {
        echo "<td>$val</td>";
    }
    echo "</tr>";
}
echo "</table>";

echo "<h3>Diagonalis zemot elementebi</h3>";
echo "<table>";
for ($i = 0; $i < 4; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 4; $j++) {
        if ($j > $i) {
            echo "<td>{$matrica[$i][$j]}</td>";
        } else {
            echo "<td></td>";
        }
    }
    echo "</tr>";
}
echo "</table>";

if (isset($_POST['x'])) {
    $x = $_POST['x'];
    echo "<h3>X-is ($x) jeradebi</h3>";
    echo "<table>";
    foreach ($matrica as $row) {
        echo "<tr>";
        foreach ($row as $val) {
            if ($val % $x == 0) {
                echo "<td>$val</td>";
            } else {
                echo "<td></td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
}

$jami = 0;
$namravli = 1;
$max = $matrica[0][0];
$min = $matrica[0][0];
$count = 0;

foreach ($matrica as $row) {
    foreach ($row as $val) {
        $jami += $val;
        $namravli *= $val;
        $count++;

        if ($val > $max) $max = $val;
        if ($val < $min) $min = $val;
    }
}

$sashualo = $jami / $count;
$gani = $max - $min;

echo "<h3>Statistika</h3>";
echo "Jami: $jami <br>";
echo "Namravli: $namravli <br>";
echo "Sashualo: $sashualo <br>";
echo "Gani: $gani <br>";

echo "<h3>Cifrta jami</h3>";
echo "<table>";
foreach ($matrica as $row) {
    echo "<tr>";
    foreach ($row as $val) {
        $cifrtaJami = array_sum(str_split($val));
        echo "<td>$cifrtaJami</td>";
    }
    echo "</tr>";
}
echo "</table>";

?>

</body>
</html>