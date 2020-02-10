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
