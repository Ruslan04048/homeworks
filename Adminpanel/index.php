<!DOCTYPE html>
<html>
<head>
    <title>Админ-панель</title>
</head>
<body>
    <h1>Добро пожаловать в админ-панель</h1>
    <form method="post" action="login.php">
        <label for="username">Имя пользователя:</label>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" required><br>
        <input type="submit" value="Войти">
    </form>
</body>
</html>