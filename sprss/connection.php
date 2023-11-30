<?php

$conn = mysqli_connect("localhost","root","","bookcatalog2");

function output($conn,$row) {
    $sql = 'SELECT * FROM `author` WHERE IDAuthor=' . $row['BookAuthor'];
    $res = mysqli_query($conn, $sql);
    $res = mysqli_fetch_array($res);
    echo '<div class="item">';
    echo '<img src="'. base64_decode($row['BookPath']) .'">';
    echo '<div class="item__bottom">';
    echo '<p>' . $row['BookName'] . '</p>';
    echo '<p>' . $row['BookYear'] . '</p>';
    echo '<p>' . $res['AuthorName'] . '</p>';
    echo '</div>';
    echo '<form action="addcart.php" method="POST">';
    echo '<input type="text" value="' . $row['IDBook'] .'" name="IDBook" hidden>';
    echo '<input type="submit" value="В корзину">';
    echo '</form>';
    echo '</div>';

}