<?php
require('validation.php');
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>2-periood-5-praktikum</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
</head>
<body>
    <?php
    if ($isSubmitted) {
        echo '<div class="form-message">' . $usernameMessage . '</div>';
    }
    ?>
    <form name="login" action="index.php" method="post">
        <span>Kasutajanimi:</span> <input type="text" name="username"><br>
        <span>Parool:</span> <input type="password" class="passw" name="password"></br>
        <input type="submit" name="submit">
    </form>
</body>
</html>