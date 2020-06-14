<?php
    session_start();

    $link = mysqli_connect('172.18.0.3','mike','124356+A','gbphp');

    $sql = "SELECT name,depiction,cost FROM catalog";
    $res = mysqli_query($link, $sql);

    $arr = array();

    while ($row = mysqli_fetch_assoc($res)) {
        array_push($arr,$row);
    }
    
    echo json_encode($arr);

?>