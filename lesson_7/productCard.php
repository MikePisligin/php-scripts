<?php
/* Библиотечный файл, содержащий все необходимые функции для данной программы */
include 'library.lib';

$link = connectSQL();

$sql = "select * from fruits where id='" . $_GET['id'] . "'";  
$result = mysqli_query($link, $sql);

?>

<!DOCTYPE>
<html lang="en">
<head>
  <meta charset="CP1251">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="styles.css">
  <link href="https://fonts.googleapis.com/css?family=Caveat&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/dfbe07ac44.js" crossorigin="anonymous"></script>
</head>
<body class="container2">
 
 <div class="headerUp">
  <h4 class="textStyle">Интернет-магазин по продаже фруктов</h4>
  <a class="linkCart" href="#" title="Перейти в корзину"><i class="fas fa-shopping-cart"></i></a>
 </div>
 <h1 class="textStyle header"><?php printPage ($_GET['id']); ?></h1>

 <div class="mainContent">
  <div class="left">
   <?php drawPicture($result); ?>
  </div>
  <div class="right">
   <div class="description">
    <div class="rightP1">
     <p class="text"><?php $r = toPrice($link); echo "Цена за кг: " . $r . " рублей"; ?></p>
     <form method="post">
      <input class="textField" type="text" placeholder="0">
      <input class="button" type="submit" value="Купить">
     </form>
    </div>
    <div class="rightP2">
     <p class="textStyle size"><?php $r = toDesc($link); echo $r; ?></p>
    </div>
   </div>
   <p><a class="linkBigPhoto" href="task_1.php">Назад</a></p>
  </div>
 </div>

<?php /* Функция закрывает соединение к базе данных */
mysqli_close($link);?>  
</body>
</html>
