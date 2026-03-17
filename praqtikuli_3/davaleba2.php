<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Random MxN Matrica</title>
    <style>
        table, td {
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
    <button type="submit">Gamotvale Matrica</button>
</form>

<?php

function randomMatrica($m, $n, $a, $b) {
    echo "<table>";
    for ($i = 0; $i < $m; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $n; $j++) {
            $randNum = rand($a, $b);
            echo "<td>$randNum</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $m = intval($_POST['m']);
    $n = intval($_POST['n']);
    $a = intval($_POST['a']);
    $b = intval($_POST['b']);

    $errors = [];

    if ($m < 1) $errors[] = "M must be at least 1";
    if ($n < 1) $errors[] = "N must be at least 1";
    if ($a > $b) $errors[] = "a da b  shesadzlebelia";

    if (!empty($errors)) {
        foreach ($errors as $err) {
            echo "<p style='color:red;'>$err</p>";
        }
    } else {
        randomMatrica($m, $n, $a, $b);
    }
}

?>
</body>
</html>