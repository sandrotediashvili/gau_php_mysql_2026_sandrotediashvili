<!DOCTYPE html>
<html lang="ka">
<head>
    <meta charset="UTF-8">
    <title>URL Ricxvebis Shemowmeba</title>
</head>
<body>

<form method="POST">
    Sheiyvane URL: <input type="text" name="url" required>
    <button type="submit">Check</button>
</form>

<?php
function urlContainsNumbers($url) {
    return preg_match('/[0-9]/', $url) === 1;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $url = trim($_POST['url']);
    if ($url === "") {
        echo "<p style='color:red;'>Sheiyvanet URL.</p>";
    } else {
        if (urlContainsNumbers($url)) {
            echo "<p>URL '<b>$url</b>' aris ricxvebi.</p>";
        } else {
            echo "<p>URL '<b>$url</b>' ar aris ricxvebi.</p>";
        }
    }
}
?>

</body>
</html>