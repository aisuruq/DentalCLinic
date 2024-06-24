<?php 
session_start();
require_once('link.php');
error_reporting(E_ALL);

if (!empty($_POST['login_avtor']) && !empty($_POST['pass_avtor'])) {
    $login = mysqli_real_escape_string($link_to_base, $_POST['login_avtor']);
    $password = mysqli_real_escape_string($link_to_base, $_POST['pass_avtor']);
    $query = mysqli_query($link_to_base, "SELECT * FROM users WHERE login_users = '$login'");
    $row = mysqli_fetch_assoc($query);
        if (mysqli_affected_rows($link_to_base) > 0) {
            if (password_verify($password, $row["password_users"])) {
                $_SESSION['auth'] = true;

                echo "Вы успешно вошли в аккаунт.";
            }
        } else{
            echo "Неверный пароль или логин.";
        }
    } else {
        echo "Поля формы не были переданы на сервер.";
    }

?>