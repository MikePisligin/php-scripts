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
/*include 'library.lib';

$link = connectSQL();

$sql = "select * from photo";
$result = mysqli_query($link, $sql);

Gallery($result);*/

/* Функция закрывает соединение к базе данных */
// mysqli_close($link);
?>

<h1 class="header">Калькулятор.</h1>
<div class="calc">
 <div class="left">
  <p class="hint"><u>Подсказка:</u> введите пример в следующем формате: 1+2 или 2-1 или 1*2 или 2/1. Учтите, что на ноль делить нельзя!</p>
  <form method="post">
   <input class="inputField" name="key" type="text">
   <input class="button" type="submit" value="Вычислить">
  </form>
 </div>
 <div class="right">
  <p class="hint hint_margin">Статусные сообщения:</p>  
  <p class="statusLog"></p>
 </div>
</div>

<?php

function getSrcData($key, $flag) {
 
 for ($i=0; $i<strlen($key); $i++) {

  if ($key[$i] == '+' or $key[$i] == '-' or $key[$i] == '*' or $key[$i] == '/') {
    $sign = $key[$i];
    $flag = $i;
   } else if ($i > $flag) {
      $secondTerm .= $key[$i];
     } else {
        $firstTerm .= $key[$i];
       };
 }

return ['firstTerm' => $firstTerm, 'secondTerm' => $secondTerm, 'sign' => $sign];
}

function Add($a, $b, $sign) {
 return $sign = $a + $b;
}
function Subst($a, $b, $sign) {
 return $sign = $a - $b;
}
function Multiple($a, $b, $sign) {
 return $sign = $a * $b;
}
function Divide($a, $b, $sign) {
 return $sign = $a / $b;
}



$expr = $_POST['key'];
$flag = 10000;

$arr = getSrcData($expr, $flag);

switch($arr['sign']) {
 case "+": echo Add($arr['firstTerm'], $arr['secondTerm'], $arr['sign']); break;
 case "-": echo Subst($arr['firstTerm'], $arr['secondTerm'], $arr['sign']); break;
 case "*": echo Multiple($arr['firstTerm'], $arr['secondTerm'], $arr['sign']); break;
 case "/": echo Divide($arr['firstTerm'], $arr['secondTerm'], $arr['sign']); break;
}

?>


</body>
</html>
