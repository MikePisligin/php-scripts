<!DOCTYPE>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body class="container">
  <div class="gallery">
<?php

/* Библиотечный файл, содержащий все необходимые функции для данной программы */
include 'library.lib';

$link = mysqli_connect('172.18.0.2', 'mike', '124356+A', 'gallery');

$sql = "select * from photo";
$result = mysqli_query($link, $sql);

Gallery($result);

/* Функция закрывает соединение к базе данных */
mysqli_close($link);
?>
  </div>
  <div class="form">
    <input type="text">
    <input type="button" value="Send!">
  </div>
</body>
</html>
