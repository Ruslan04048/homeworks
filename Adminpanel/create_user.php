<?php
session_start();
require_once('connect.php')

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $newUsername = $_POST["new_username"];
    $newPassword = password_hash($_POST["new_password"], PASSWORD_DEFAULT); 

    $sql = "INSERT INTO users (username, password) VALUES ('$newUsername', '$newPassword')";
    if (mysqli_query($connection, $sql)) {
        header("Location: panel.php");
    } else {
        echo "Ошибка при создании пользователя: " . mysqli_error($connection);
    }
}

mysqli_close($connection);
?>
