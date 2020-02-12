<?php
/* Библиотечный файл, содержащий все необходимые функции для данной программы */
include 'library.lib';
startSession();

$link = connectSQL();

$sql = "select * from fruits where id='" . $_GET['id'] . "'";  
$result = mysqli_query($link, $sql);

?>

<!DOCTYPE>
<html lang="en">
<head>
  <meta charset="CP1251">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Интернет-магазин Фрукты - корзина</title>
  <link rel="stylesheet" href="styles.css">
  <link href="https://fonts.googleapis.com/css?family=Caveat&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/dfbe07ac44.js" crossorigin="anonymous"></script>
</head>
<body class="container2">
 
 <div class="headerUp">
  <h4 class="textStyle">Интернет-магазин по продаже фруктов</h4>
  <p><a class="linkBigPhoto" href="task_1.php">На главную</a></p>
 </div>
 <div class="cart">

<?php

foreach ($_SESSION as $key => $value) {

  $sql = "select path, name_file from fruits where name='" . $key . "'";
  $result = mysqli_query($link, $sql);
  $row = mysqli_fetch_assoc($result);
  $path = $row['path'] . $row['name_file'];

  echo "<div class=\"product\">";
  echo "<img src=\"" . $path . "\">";
  echo "<p class=\"title\">" . $_SESSION[$key][0] . "</p>";
  echo "<p class=\"titleSm\">Количество, кг: </p>";
  echo "<form>";
  echo "<input type=\"text\" value=\"" . $_SESSION[$key]['quantity'] . "\" readonly>";
  echo "</form>";

  $k = key($_SESSION);

  echo "<a class=\"buttonCart\" href=\"?name=" . $k . "&action=i\">+</a>";
  echo "<a class=\"buttonCart\" href=\"?name=" . $k . "&action=d\">-</a>";
  echo "<a class=\"buttonCart\" href=\"?name=" . $k . "&action=r\">X</a>";
  
  echo "</div>";

  if(($_GET['name'] == $k) && ($_GET['action'] == 'i')) {
   $_SESSION[$key]['quantity'] += 1;
 };

  if(($_GET['name'] == $k) && ($_GET['action'] == 'd')) {
   $_SESSION[$key]['quantity'] -= 1;
 };
 if(($_GET['name'] == $k) && ($_GET['action'] == 'r')) {
   $_SESSION[$key] = null;
 };

 }

?>


 </div>

<?php /* Функция закрывает соединение к базе данных */
mysqli_close($link);?>  
</body>
</html>
