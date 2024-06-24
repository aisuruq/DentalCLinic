<?php
session_start();
require_once('link.php');
error_reporting(E_ALL);

if(!empty($_POST['name']) && !empty($_POST['telephone'])) {
    $name = mysqli_real_escape_string($link_to_base, $_POST['name']);
    $telephone = mysqli_real_escape_string($link_to_base, $_POST['telephone']);

    $query_check = "SELECT * FROM formSignUp WHERE name_formSignUp = '$name' AND tel_formSignUp = '$telephone'";
    $result_check = mysqli_query($link_to_base, $query_check);
    if(mysqli_num_rows($result_check) > 0) {
        echo 'Такая запись уже существует.';
        exit();
    }

    $query_add = "INSERT INTO formSignUp(name_formSignUp, tel_formSignUp) VALUES ('$name', '$telephone')";
    mysqli_query($link_to_base, $query_add);
    if (mysqli_affected_rows($link_to_base) > 0) {
        echo "Ваши данные отправлены. Мы позвоним вам в течении 24 часов.";
        $_SESSION['id'] = mysqli_insert_id($link_to_base);
    } else {
        echo "Произошла ошибка при добавлении данных в базу данных.";
    }
} else {
    echo "Поля формы не были переданы на сервер.";
}
?>
