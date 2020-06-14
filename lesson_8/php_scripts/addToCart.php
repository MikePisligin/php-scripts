<?php
    session_start();
    $link = mysqli_connect('172.18.0.3','mike','124356+A','gbphp');

    $date = date('Y-m-d');
    
    $buf = file_get_contents('php://input');
    $buf = json_decode($buf, true);

    $sql = "INSERT INTO cart_Order (date,login,prod_name,images,status,cost) VALUES ('".$date."','".$_SESSION['user']."','".$buf['prod_name']."','".$buf['images']."','Добавлен в заказ','".$buf['cost']."')";
    $res = mysqli_query($link, $sql);

?>