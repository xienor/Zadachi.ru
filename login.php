<?php
    session_start();
    if (!isset($_SESSION['user_id'])) {
    } else {
        header('Location:profile.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Вход</title>
</head>
<body>
    <div class="main">
        <a href="registration.php">Регистрация</a>
        <form method="POST" action="log.php">
            <input type="text" placeholder="E-Mail" name="email"> <br> <br>
            <input type="password" placeholder="Password" name="password"> <br> <br>
            <input type="submit" name="login" value="Войти">

    </div>
</body>
</html>