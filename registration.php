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
    <title>Регистрация</title>
</head>
<body>
    <div class="main">
        <form method="POST" action="reg.php">
            <input type="text" placeholder="Login" name="login"> <br> <br>
            <input type="text" placeholder="E-Mail" name="email"> <br> <br>
            <input type="password" placeholder="Password" name="password"> <br> <br>
            <input type="password" placeholder="Password repeat" name="passwordrepeat"> <br> <br>
            <input type="submit" name="register" value="Зарегистрироваться">
    </div>
</body>
</html>