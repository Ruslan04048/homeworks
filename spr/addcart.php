<?php
session_start();
if (isset($_SESSION['cart'])) {
    array_push($_SESSION['cart'],$_POST['IDBook']);
}
else {
    $_SESSION['cart'] = array();
    array_push($_SESSION['cart'],$_POST['IDBook']);
}
header('Location: index.php');
