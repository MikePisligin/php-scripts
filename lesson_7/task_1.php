<!DOCTYPE>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="styles.css">
  <link href="https://fonts.googleapis.com/css?family=Caveat&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/dfbe07ac44.js" crossorigin="anonymous"></script>
</head>
<body class="container2">
  <h1 class="textStyle header">Интернет-магазин "Фрукты"</h1>
  <div class="cartMain"><a class="linkCart" href="cart.php" title="Перейти в корзину"><i class="fas fa-shopping-cart"></i></a></div>
  <div class="gallery">
<?php

/* Библиотечный файл, содержащий все необходимые функции для данной программы */
include 'library.lib';
startSession();

$link = connectSQL();

$sql = "select ID,path,name_file from fruits";
$result = mysqli_query($link, $sql);

Catalog($result);

/* Функция закрывает соединение к базе данных */
mysqli_close($link);
?>
  </div>
</body>
</html>
