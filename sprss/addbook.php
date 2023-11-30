
<header>
    <div class="logo"><a href="index.php">Главная</a></div>
    <div class="cart"><a href="cart.php">Корзина</a></div>
    <a href="addbook.php">Добавить книгу</a>
</header>
<form action="addbook.php" method="post" enctype="multipart/form-data">
    <label for="name">Название</label>
    <input type="text" name="name">
    <label for="author">Автор</label>
    <input type="text" name="author">
    <label for="year">Год выпуска</label>
    <input type="text" name="year">
    <label for="img">Обложка</label>
    <input type="file" name="img" accept="image/*">
    <input type="submit" value="Добавить">
</form>
<?php
require_once('connection.php');
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $author = $_POST['author'];
    $year = $_POST['year'];

    //Проверка существования автора
    $sql = "SELECT * FROM `author` WHERE AuthorName='$author'";
    $res = mysqli_query($conn,$sql);
    $res = mysqli_fetch_array($res);
    //Если уже есть
    if ($res) {
        $author = $res['IDAuthor'];
    }
    //Если нужно добавить нового
    else {
        $sql = "INSERT INTO `author` VALUES (NULL, '$author')";
        $res = mysqli_query($conn,$sql);
        //Получаем ID нового автора
        $sql = "SELECT * FROM `author` WHERE AuthorName='$author'";
        $res = mysqli_query($conn,$sql);
        $author = mysqli_fetch_array($res)['IDAuthor'];
    }

    //Загрузка картинки
    $uploaddir = 'img/';
    $uploadfile = $uploaddir . basename($_FILES['img']['name']);
    move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile);
    $path = base64_encode($uploadfile);

    $result = $conn->query("INSERT INTO book VALUES (NULL, '$name', '$author',1, '$year', '$descr', '$path')");
    header('Location: index.php');
}
?>