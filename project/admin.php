<?php
require_once('User.php');
require_once('Adress.php');
session_start();

?>
<h2>Добавить пользователя</h2>
<form action="adduser.php" method="POST">
    <input type="text" name="name" placeholder="Имя">
    <input type="text" name="surname" placeholder="Фамилия">
    <input type="text" name="password" placeholder="Пароль">
    <input type="text" name="age" placeholder="Возраст">
    <input type="text" name="country" placeholder="Страна">
    <input type="text" name="city" placeholder="Город">
    <input type="text" name="house" placeholder="Дом">
    <input type="submit" value="Добавить">
</form>
<h2>Удалить пользователя</h2>
<form action="delete.php" method="POST">
    <input type="text" name="id" placeholder="ID">
    <input type="submit" value="Удалить">
</form>
<h2>Список пользователей</h2>
<ol>
<?php
foreach ($_SESSION['users'] as $user) {
    echo '<li>' . $user->getName() . '</li>';
}
?>
</ol>