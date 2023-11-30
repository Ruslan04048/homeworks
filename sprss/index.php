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
        <a href="addbook.php">Добавить книгу</a>
    </header>

    <main>
        <?php
        $sql = 'SELECT IDBook,BookName,BookYear,BookAuthor,BookPath FROM book';
        $result = mysqli_query($conn,$sql);
        foreach($result as $row) {
            output($conn, $row);
        }
        ?>
    </main>
    <footer>
        <hr>
        футер
    </footer>
</body>