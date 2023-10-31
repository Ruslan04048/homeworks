<?php
session_start();
require_once('connect.php');
if (!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] !== true) {
    header("Location: index.php");
    exit();
}


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Обработка данных из формы и отправка на создание пользователя
    $newUsername = $_POST["new_username"];
    $newPassword = password_hash($_POST["new_password"], PASSWORD_DEFAULT); 

    // Вставка нового пользователя в базу данных
    $sql = "INSERT INTO users (username, password) VALUES ('$newUsername', '$newPassword')";
    if (mysqli_query($connection, $sql)) {
        header("Location: panel.php");
    } else {
        echo "Ошибка при создании пользователя: " . mysqli_error($connection);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Панель администратора</title>
</head>
<body>
    <h1>Панель администратора</h1>

    <!-- Форма для создания нового пользователя -->
    <form method="POST" action="panel.php">
        <label for="new_username">Имя пользователя:</label>
        <input type="text" name="new_username" id="new_username" required>

        <label for="new_password">Пароль:</label>
        <input type="password" name="new_password" id="new_password" required>

        <button type="submit">Создать пользователя</button>
    </form>


    <a href="logout.php">Выйти</a>
</body>
</html>