<?php
require_once('User.php');
require_once('Adress.php');
session_start();

foreach ($_SESSION['users'] as $user) {
    if ($user->getName() == $_POST['name'])
        die('Имя занято');
}

$adress = new Adress($_POST['house'],$_POST['city'],$_POST['country']);
array_push($_SESSION['users'], new User($_POST['name'], $_POST['surname'], $_POST['password'], $_POST['age'], $adress));

header('Location: admin.php');
?>