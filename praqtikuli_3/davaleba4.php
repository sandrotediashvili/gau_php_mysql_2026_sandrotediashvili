<!DOCTYPE html>
<html lang="ka">
<head>
    <meta charset="UTF-8">
    <title>Damcavi Kodebi</title>
</head>
<body>

<?php
session_start();


if (!isset($_SESSION['captcha'])) {
    $num1 = rand(1, 20);
    $num2 = rand(1, 20);
    $ops = ['+', '-'];
    $op = $ops[array_rand($ops)];

    $_SESSION['captcha'] = [
        'num1' => $num1,
        'num2' => $num2,
        'op' => $op,
        'result' => ($op == '+') ? $num1 + $num2 : $num1 - $num2
    ];
}

$captcha = $_SESSION['captcha'];
echo "<p><b>Damcavi Kodebi:</b> {$captcha['num1']} {$captcha['op']} {$captcha['num2']} = ?</p>";
?>

<form method="POST">
    Sheiyvane: <input type="number" name="user_result" required>
    <button type="submit">Check</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userResult = intval($_POST['user_result']);

    if ($userResult === $captcha['result']) {
        echo "<p style='color:green;'>shesadzlebelia.</p>";
        unset($_SESSION['captcha']); 
    } else {
        echo "<p style='color:red;'>Ar aris shesadzlebelia. </p>";
    }
}
?>

</body>
</html>