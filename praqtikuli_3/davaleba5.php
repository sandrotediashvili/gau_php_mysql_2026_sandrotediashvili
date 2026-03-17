<!DOCTYPE html>
<html lang="ka">
<head>
    <meta charset="UTF-8">
    <title>ricxvebis raodenoba</title>
</head>
<body>

<form method="POST">
    Sheiyvane ricxvi: <input type="number" name="number" required>
    <button type="submit">Shemowmeba</button>
</form>

<?php
function raodenoba($num) {
    $num = abs(intval($num));
    if ($num === 0) return 1;
    return strlen((string)$num);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $number = $_POST['number'];
    $count = raodenoba($number);
    echo "<p>Ricxvi <b>$number</b> aris <b>$count</b> nishna.</p>";
}
?>

</body>
</html>