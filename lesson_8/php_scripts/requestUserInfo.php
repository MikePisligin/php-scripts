<?php
session_start();

$link = mysqli_connect('172.18.0.3','mike','124356+A','gbphp');

$sql = "SELECT login,surname,name FROM users WHERE login='".$_SESSION['user']."'";
$res = mysqli_query($link,$sql);

$row = mysqli_fetch_assoc($res);

echo json_encode($row);

?>