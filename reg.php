<?php
    session_start();
    if(isset($_POST['register'])) {
        include("db_connection.php");
        $login = $_POST['login'];
        //echo $login . '<br/>'; 
        $email = $_POST['email'];
        //echo $email . '<br/>';
        $password = $_POST['password'];
        //echo $password . '<br/>';
        $passwordrepeat = $_POST['passwordrepeat'];
        //echo $passwordrepeat . '<br/>';

        if($password != $passwordrepeat){
            echo 'Пароли отличаются, попробуйте еще раз';
        } else {
            $passhash = password_hash($password, PASSWORD_BCRYPT);
            //echo $passhash . '<br/>';
            $count = mysqli_query($connection, "SELECT * FROM `users` WHERE `login` = '$login' OR `email` = '$email'");
            //mysqli_fetch_assoc($sql11);
            if (mysqli_num_rows($count) == 0 ) {
                $sql = "INSERT INTO `users` (`login`, `password`, `email`) VALUES ('$login', '$passhash', '$email')";
                mysqli_query($connection, $sql);
                mysqli_close($connection);
                $_SESSION['user_id'] = $id;
                header('Location:profile.php');
            } else {
                    echo "Пользователь уже зарегистрирован!" . '<br/>';
            }

        }    
    }
?>