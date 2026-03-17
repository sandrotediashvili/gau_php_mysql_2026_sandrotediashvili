<!DOCTYPE html>
<html lang="ka">
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
        input { width: 50px; }
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
function randomMatrica($m, $n, $a, $b) {
    $matrica = [];
    for ($i = 0; $i < $m; $i++) {
        $row = [];
        for ($j = 0; $j < $n; $j++) {
            $row[] = rand($a, $b);
        }
        $matrica[] = $row;
    }
    return $matrica;
}

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
        $matrica = randomMatrica($m, $n, $a, $b);

        echo "<table>";
        foreach ($matrica as $row) {
            echo "<tr>";
            foreach ($row as $val) {
                echo "<td>$val</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
}
?>

</body>
</html>