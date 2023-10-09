<?php
require_once('User.php');
require_once('Adress.php');
session_start();
$login = $_POST['login'];
$password = $_POST['password'];

foreach($_SESSION['users'] as $user) {
    if ($user->getName() == $login && $user->getPassword() == $password) {
        //сохраняем вход в аккаунт
        $_SESSION['account'] = $user;

        //вход через админа
        if ($user->getName() == 'user') {
            header('Location: admin.php');
            die;
        }

        header('Location: profile.php');
        die;
    }
}
die('Ошибка входа');
?>