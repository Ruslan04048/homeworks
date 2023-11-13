<?php

$conn = mysqli_connect("localhost","root","","bookcatalog");

function output($row) {
    echo '<div class="item">';
    echo '<img src="img/book' . $row['IDBook'] . '.webp">';
    echo '<div class="item__bottom">';
    echo '<p>' . $row['BookName'] . '</p>';
    echo '<p>' . $row['BookYear'] . '</p>';
    echo '</div>';
    echo '<form action="addcart.php" method="POST">';
    echo '<input type="text" value="' . $row['IDBook'] .'" name="IDBook" hidden>';
    echo '<input type="submit" value="В корзину">';
    echo '</form>';
    echo '</div>';

}