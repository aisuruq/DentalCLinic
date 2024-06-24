<?php
require_once('link.php');
error_reporting(E_ALL);

if (isset($_POST['login_avtor'])) {
    $login = mysqli_real_escape_string($link_to_base, $_POST['login_avtor']);
    $sql = "SELECT * FROM users WHERE login_users = '$login'";
    $result = $link_to_base->query($sql);

    if ($result->num_rows > 0) {
        echo '<span class="message phpMessage">*Логин существует</span>';
    } else {
        echo '<span class="error-message phpMessage">*Логина не существует</span>';
    }
}

?>