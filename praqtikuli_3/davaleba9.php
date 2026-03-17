<!DOCTYPE html>
<html lang="ka">
<head>
    <meta charset="UTF-8">
    <title>parolisSimdzlavre</title>
</head>
<body>

<form method="POST">
    Sheiyvane paroli: <input type="password" name="paroli" required>
    <button type="submit">Sheamowme</button>
</form>

<?php
function parolisSimdzlavre($paroli) {
    $length = strlen($paroli);

    $hasLower = preg_match('/[a-z]/', $paroli);
    $hasUpper = preg_match('/[A-Z]/', $paroli);
    $hasDigit = preg_match('/[0-9]/', $paroli);
    $hasSpecial = preg_match('/[\W_]/', $paroli); 

    $score = 0;

    if ($length >= 6) $score++;
    if ($length >= 10) $score++;
    if ($hasLower && $hasUpper) $score++;
    if ($hasDigit) $score++;
    if ($hasSpecial) $score++;

    if ($score <= 2) return "Susti";       
    elseif ($score <= 4) return "Sashualo"; 
    else return "Mdzlavri";               
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $paroli = $_POST['paroli'];
    $simdzlavre = parolisSimdzlavre($paroli);
    echo "<p>Paroli: <b>$paroli</b> → <b>$simdzlavre</b></p>";
}
?>

</body>
</html>