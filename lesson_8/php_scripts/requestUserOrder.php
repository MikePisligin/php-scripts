<?php
    session_start();
    $link = mysqli_connect('172.18.0.3','mike','124356+A','gbphp');

    $arr = array();

    $sqlUser = "SELECT surname,name,is_admin FROM users WHERE login='".$_SESSION['user']."'";
    $resUser = mysqli_query($link,$sqlUser);

    $rowUser = mysqli_fetch_assoc($resUser);

    array_push($arr, $rowUser['surname']);
    array_push($arr, $rowUser['name']);

    if ($rowUser['is_admin'] == 1) {
        $sql = "SELECT date,login,prod_name,images,status,cost FROM cart_Order";
        $res = mysqli_query($link,$sql);
        
        while($row = mysqli_fetch_assoc($res)) {
            array_push($arr,$row);
        };
    } else {
        $sql = "SELECT date,prod_name,images,status,cost FROM cart_Order WHERE login='".$_SESSION['user']."'";
        $res = mysqli_query($link,$sql);
        
        while($row = mysqli_fetch_assoc($res)) {
            array_push($arr,$row);
        };   
    }


    /* Преобразование массива $status в формат JSON и отправка клиенту */
    echo json_encode($arr);

?>