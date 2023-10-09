<?php
require_once('User.php');
require_once('Adress.php');
session_start();
if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = array();
    array_push($_SESSION['users'], new User('user','','qwerty1234','0', new Adress('','','')));
}
session_start();
?>
<form action="login.php" method="post">
    <input type="text" name="login" required placeholder="Логин">
    <input type="password" name="password" required placeholder="Пароль">
    <input type="submit" value="Вход">
</form>
