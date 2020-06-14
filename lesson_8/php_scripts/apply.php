<?php
    $link = mysqli_connect('172.18.0.3','mike','124356+A','gbphp');

    $buf = file_get_contents('php://input');
    $buf = json_decode($buf, true);

    $sql = "UPDATE cart_Order SET status='" . $buf['status'] . "' WHERE prod_name='" . $buf['prod_name'] . "'";
    mysqli_query($link,$sql);


?>