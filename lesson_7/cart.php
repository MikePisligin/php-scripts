<?php
/* Библиотечный файл, содержащий все необходимые функции для данной программы */
include 'library.lib';
// startSession();

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
  <div>
   <img src="images/apple.jpg">
   <p>Яблоко</p>
   <form>
    <input type="submit">
    <input type="text">
    <input type="submit">
    <input type="text">
    <input type="submit">
   </form>
  </div>
 </div>

<?php /* Функция закрывает соединение к базе данных */
mysqli_close($link);?>  
</body>
</html>
