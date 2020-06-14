<?php
    session_start();
    $link = mysqli_connect('172.18.0.3','mike','124356+A','gbphp');

    $sql = "DELETE FROM cart_Order WHERE prod_name='".$_GET['prod_name']."'";
    $res = mysqli_query($link, $sql);

    header('Location: ../pages/userLK_order.html');

?>