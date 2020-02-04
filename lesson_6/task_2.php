<?php

include 'functions.lib';

$result = Calculate($_POST['operand_1'], $_POST['operand_2'], $_POST['sign']);

echo $result;

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
   <input class="inputField" name="operand_1" type="text">
   <input class="inputField" name="operand_2" type="text">
   <input class="inputField" type="text" value="<?php echo $result; ?>">
   <div class="block_button">
    <input class="button" name="sign" type="submit" value="+">
    <input class="button" name="sign" type="submit" value="-">
    <input class="button" name="sign" type="submit" value="*">
    <input class="button" name="sign" type="submit" value="/">
   </div>
  </form>
 </div>
 <div class="right">
  <p class="hint hint_margin">Статусные сообщения:</p>  
  <p class="statusLog"><?php echo $message; ?></p>
 </div>
</div>

</body>
</html>
