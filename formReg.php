<?php 
session_start();
require_once('link.php');
error_reporting(E_ALL);

if (!empty($_POST['login']) && !empty($_POST['pass']) && !empty($_POST['confirm_password']) && !empty($_POST['nameReg']) && !empty($_POST['surname']) && !empty($_POST['lastname']) && !empty($_POST['email'])) {
    $login = mysqli_real_escape_string($link_to_base, $_POST['login']);
    $password = mysqli_real_escape_string($link_to_base, $_POST['pass']);
    $confirm_pass = mysqli_real_escape_string($link_to_base, $_POST['confirm_password']);
    $name = mysqli_real_escape_string($link_to_base, $_POST['nameReg']);
    $surname = mysqli_real_escape_string($link_to_base, $_POST['surname']);
    $lastname = mysqli_real_escape_string($link_to_base, $_POST['lastname']);
    $email = mysqli_real_escape_string($link_to_base, $_POST['email']);

    if ($password != $confirm_pass) {
        echo "Пароли не совпадают.";
    } else {
        $password = password_hash($_POST['pass'], PASSWORD_DEFAULT);
        $query = "INSERT INTO `users` (`login_users`, `password_users`, `name_users`, `surname_users`, `lastname_users`, `email_users`) VALUES('$login', '$password', '$name', '$surname', '$lastname', '$email')";
        mysqli_query($link_to_base, $query);
        if (mysqli_affected_rows($link_to_base) > 0) {
            echo "Вы успешно зарегистрировались.";

            $_SESSION['auth'] = true;
            $_SESSION['id'] = mysqli_insert_id($link_to_base);
        }
    }
} else {
    echo "Поля формы не были переданы на сервер.";
}

?>