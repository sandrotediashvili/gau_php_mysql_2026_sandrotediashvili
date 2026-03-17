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
    $_SESSION['captcha'] = "";
    for ($i = 0; $i < 5; $i++) {
        $_SESSION['captcha'] .= rand(0, 9);
    }
}

echo "<p><b>Damcavi Kodebi:</b> " . $_SESSION['captcha'] . "</p>";
?>

<form method="POST">
    Sheiyvane kodebi: <input type="text" name="user_code" required maxlength="5">
    <button type="submit">Check</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userCode = trim($_POST['user_code']);
    $captcha = $_SESSION['captcha'];

    if ($userCode === $captcha) {
        echo "<p style='color:green;'> kodebi shesadzlebelia!</p>";
        
        unset($_SESSION['captcha']);
    } else {
        echo "<p style='color:red;'>ar aris shesadzlebelia. </p>";
    }
}
?>

</body>
</html>