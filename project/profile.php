<?php
require_once('User.php');
require_once('Adress.php');
session_start();

$user = $_SESSION['account'];
$adress = $user->getAdress();
echo "<p>Имя : " . $user->getName() . "</p>";
echo "<p>Фамилия : " . $user->getSurname() . "</p>";
echo "<p>Возраст : " . $user->getAge() . "</p>";
echo "<p>Страна : " . $adress->getCountry() . "</p>";
echo "<p>Город : " . $adress->getCity() . "</p>";
echo "<p>Дом : " . $adress->getHouse() . "</p>";

?>