<!DOCTYPE html>
<html lang="ka">
<head>
    <meta charset="UTF-8">
    <title>Random M-Dimensional Vector</title>
</head>
<body>

<form method="POST">
    M: <input type="number" name="m" required min="1">
    a: <input type="number" name="a" required>
    b: <input type="number" name="b" required>
    <button type="submit">Generate Vector</button>
</form>

<?php
function randomVector($m, $a, $b) {
    $vec = [];
    for ($i = 0; $i < $m; $i++) {
        $vec[] = rand($a, $b);
    }
    return $vec;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $m = intval($_POST['m']);
    $a = intval($_POST['a']);
    $b = intval($_POST['b']);
    $errors = [];

    if ($m < 1) $errors[] = "M must be >= 1";
    if ($a > $b) $errors[] = "a must be <= b";

    if (!empty($errors)) {
        foreach ($errors as $err) {
            echo "<p style='color:red;'>$err</p>";
        }
    } else {
        $vector = randomVector($m, $a, $b);
        echo "<p>Random Vector: [ " . implode(", ", $vector) . " ]</p>";
    }
}
?>

</body>
</html>