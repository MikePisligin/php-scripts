<!DOCTYPE>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body class="container">

<?php
/* Библиотечный файл, содержащий все необходимые функции для данной программы */
include 'library.lib';

$link = connectSQL();

$sql = "select path,name_file from fruits where id='" . $_GET['id'] . "'";  
$result = mysqli_query($link, $sql);

drawPicture($result);

/* Функция закрывает соединение к базе данных */
mysqli_close($link);
?>

  <p><a class="linkBigPhoto" href="task_1.php">Назад</a></p>
</body>
</html>
