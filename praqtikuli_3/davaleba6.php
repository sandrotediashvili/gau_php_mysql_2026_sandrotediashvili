<!DOCTYPE html>
<html lang="ka">
<head>
    <meta charset="UTF-8">
    <title>MxN Matrica</title>
    <style>
        table, td, th {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
            text-align: center;
        }
        input {
            width: 50px;
        }
    </style>
</head>
<body>

<form method="POST">
    M: <input type="number" name="m" required min="1">
    N: <input type="number" name="n" required min="1">
    a: <input type="number" name="a" required>
    b: <input type="number" name="b" required>
    <button type="submit">Generate Matrica</button>
</form>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $m = intval($_POST['m']);
    $n = intval($_POST['n']);
    $a = intval($_POST['a']);
    $b = intval($_POST['b']);

    $errors = [];

    if ($m < 1) $errors[] = "M must be >= 1";
    if ($n < 1) $errors[] = "N must be >= 1";
    if ($a > $b) $errors[] = "a must be <= b";

    if (!empty($errors)) {
        foreach ($errors as $err) {
            echo "<p style='color:red;'>$err</p>";
        }
    } else {
        
        $matrica = [];
        for ($i = 0; $i < $m; $i++) {
            for ($j = 0; $j < $n; $j++) {
                $matrica[$i][$j] = rand($a, $b);
            }
        }

        $colSums = array_fill(0, $n, 0);

        echo "<table>";

        for ($i = 0; $i < $m; $i++) {
            echo "<tr>";
            $rowSum = 0;
            for ($j = 0; $j < $n; $j++) {
                echo "<td>".$matrica[$i][$j]."</td>";
                $rowSum += $matrica[$i][$j];
                $colSums[$j] += $matrica[$i][$j];
            }
            echo "<td><b>$rowSum</b></td>"; 
            echo "</tr>";
        }

      
        echo "<tr>";
        for ($j = 0; $j < $n; $j++) {
            echo "<td><b>".$colSums[$j]."</b></td>";
        }
        echo "<td></td>"; 
        echo "</tr>";

        echo "</table>";
    }
}

?>
</body>
</html>