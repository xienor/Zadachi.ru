<?php
    session_start();
    if(isset($_POST['login'])) {
        include("db_connection.php");
        $email = $_POST['email'];
        //echo $email . '<br/>';
        $password = $_POST['password'];
        //echo $password . '<br/>';
        $user = mysqli_query($connection, "SELECT `id` FROM `users` WHERE `email` = '$email'");
        $userid = mysqli_fetch_assoc($user);
        $id = $userid['id'];
        //echo $id;
        if (mysqli_num_rows($user) == 0 ) {
            echo "Пользователь не зарегистрирован!" . '<br/>';
            } else {
                $passrow = mysqli_query($connection, "SELECT `password` FROM `users` WHERE `id` = '$id'");
                $passhash = mysqli_fetch_assoc($passrow);
                //echo $passhash['password'];
                if (password_verify($password, $passhash['password'])) {
                    //echo 'Верный пароль';
                    header('Location:profile.php');
                    $_SESSION['user_id'] = $id;
                } else {
                    echo 'Неверынй пароль';
                }
        }
    }
?>