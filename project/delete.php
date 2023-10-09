<?php
require_once('User.php');
require_once('Adress.php');
session_start();

for ($i = 1; $i <= count($_SESSION['users']); $i++) {
    if ($_POST['id'] == $i) {
        unset($_SESSION['users'][$i-1]);
    }
}

header('Location: admin.php');
?>