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
     // Функция searchExtensionFile($value) возвращет расширения файла.
     // В качестве входного параметра она принимает массив из файлов.
     function searchExtensionFile($value) {
      $type = null;

	  // В этом цикле выполняется поиск индекса, соответстующего знаку "."
	  // Значение полученного индекса присваивается переменной $flag
 	  for($i=0;$i<strlen($value);$i++) {
	   if ($value[$i] == ".") {
	    $flag = $i;
	  };
	 }

	  // В этом цикле из имени файла формируется строка, соответствующая расширению файла.
	  // Строка запоминается в переменной $type, которую возвращает функция
          for($i=0;$i<strlen($value);$i++) {
	   if ($i > $flag) {
	    $type .= $value[$i];
	  };
	 };
      return $type;
    }

     function Gallery($dir) {
      // Получение списка файлов из каталога, заданного переменной $dir
      $list = scandir($dir);

      // Цикл перебора всех файлов из списка $list
      foreach ($list as $key => $value) {
       // Если выполняется это условие, то при обходе списка файлов пропустить файлы "." и ".."
       if (($value == ".") or ($value == "..")) {
        continue;
      } else {
	  // В переменную $path записывается путь до одной фотографии
          $path = $dir . $value;
	  // Условие проверяет:
	  // - существует ли файл в каталоге;
	  // - имеет ли файл расширение .jpg;
	  // - проверяет размер файла, файл должен быть меньше 2 Mb.
	  if (file_exists($path) and searchExtensionFile($value) == "jpg" and (round(filesize($path)/1024/1024, 0) < 2)) {
	   // Формируется ссылка с картинкой внутри
           echo "<a href=\"" . $path . "\" target=\"_blank\"><img src=\"" . $path . "\"></a>";
         };
       }
     }
    }
    // Функция Gallery() создаёт галерею из картинок.
    // Принимает в качестве входного параметра имя каталога с фотографиями, в виде строки.
    Gallery("images/");
    ?>
  </div>
  <div class="form">
    <input type="text">
    <input type="button" value="Send!">
  </div>
</body>
</html>
