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
        $sql = 'SELECT IDBook,BookName,BookYear FROM book';
        $result = mysqli_query($conn,$sql);
        foreach($result as $row) {
            output($row);
        }
        ?>
    </main>
    <footer>
        <hr>
        футер
    </footer>
</body>