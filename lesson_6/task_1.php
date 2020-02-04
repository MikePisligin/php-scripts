<?php

include 'functions.lib';

$expr = $_POST['key'];
$flag = 10000;

$arr = getSrcData($expr, $flag);
switch($arr['sign']) {
 case "+": $result =  Add($arr['firstTerm'], $arr['secondTerm'], $arr['sign']); break;
 case "-": $result =  Subst($arr['firstTerm'], $arr['secondTerm'], $arr['sign']); break;
 case "*": $result =  Multiple($arr['firstTerm'], $arr['secondTerm'], $arr['sign']); break;
 case "/":
	if ($arr['secondTerm'] <> 0) {
	 $result =  Divide($arr['firstTerm'], $arr['secondTerm'], $arr['sign']);
	 break;
       } else {
	  $message = "На ноль делить нельзя! Введите, пожалуйста, другой пример.";
	  $result = NULL;
	  break;
	};
}
?>

<!DOCTYPE>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body class="container">
<h1 class="header">Калькулятор.</h1>
<div class="calc">
 <div class="left">
  <p class="hint"><u>Подсказка:</u> введите пример в следующем формате: 1+2 или 2-1 или 1*2 или 2/1. Учтите, что на ноль делить нельзя!</p>
  <form method="post">
   <input class="inputField" name="key" type="text" value="<?php echo $result; ?>">
   <input class="button" type="submit" value="Вычислить">
  </form>
 </div>
 <div class="right">
  <p class="hint hint_margin">Статусные сообщения:</p>  
  <p class="statusLog"><?php echo $message; ?></p>
 </div>
</div>

</body>
</html>
