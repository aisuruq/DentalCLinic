<?php
require_once('link.php');
error_reporting(E_ALL);

if (isset($_POST['login'])) {
    $login = mysqli_real_escape_string($link_to_base, $_POST['login']);
    $sql = "SELECT * FROM users WHERE login_users = '$login'";
    $result = $link_to_base->query($sql);

    if ($result->num_rows > 0) {
        echo '<span class="error-message phpMessage">*Логин занят</span>';
    } else {
        echo '<span class="message phpMessage">*Логин доступен</span>';
    }
}

if (isset($_POST['email'])) {
    $email = mysqli_real_escape_string($link_to_base, $_POST['email']);
    $sql = "SELECT * FROM users WHERE email_users = '$email'";
    $result = $link_to_base->query($sql);

    if ($result->num_rows > 0) {
        echo '<span class="error-message phpMessage">*Почта занята</span>';
    } else {
        echo '<span class="message phpMessage">*Почта свободна</span>';
    }
}

?>
