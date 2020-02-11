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

<<<<<<< HEAD
=======
// $link = mysqli_connect('127.0.0.1', 'user1', 'Qwerty@345', 'gallery');

>>>>>>> fc802da9de901189269ff852a7054ae8dd045921
$link = connectSQL();

$sql = "select * from photo";
$result = mysqli_query($link, $sql);
<<<<<<< HEAD

Gallery($result);
=======
var_dump($result);

// Gallery($result);
>>>>>>> fc802da9de901189269ff852a7054ae8dd045921

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
