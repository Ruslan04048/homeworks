<?php
$username = "admin";
$password = "password";

if ($_POST["username"] == $username && $_POST["password"] == $password) {
    session_start();
    $_SESSION["logged_in"] = true;
    header("Location: panel.php");
} else {
    echo "Неверное имя пользователя или пароль";
}
?>