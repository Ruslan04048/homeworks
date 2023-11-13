<?php
session_start();
include('connection.php');
?>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>    
    <header>
        <div class="logo"><a href="index.php">Главная</a></div>
        <div class="cart"><a href="cart.php">Корзина</a></div>
    </header>

    <main>
        <?php
        if (empty($_SESSION['cart'])) {
            echo '<h3>Корзина пуста</h3>';
        }
        else {
            foreach($_SESSION['cart'] as $IDBook) {
                $sql = 'SELECT IDBook,BookName,BookYear FROM book WHERE IDBook=' . $IDBook;
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_array($result);
                output($row);
            }
        }
        ?>
    </main>
</body>