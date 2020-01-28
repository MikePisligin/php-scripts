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

     function searchExtensionFile($value) {
      $type = null;
 	  for($i=0;$i<strlen($value);$i++) {
	   if ($value[$i] == ".") {
	    $flag = $i;
	  };
	 }
          for($i=0;$i<strlen($value);$i++) {
	   if ($i > $flag) {
	    $type .= $value[$i];
	  };
	 };
      return $type;
    }

     function Gallery($dir) {
      $list = scandir($dir);

      foreach ($list as $key => $value) {
       if (($value == ".") or ($value == "..")) {
        continue;
      } else {
          $path = $dir . $value;
	  if (file_exists($path) and searchExtensionFile($value) == "jpg" and (round(filesize($path)/1024/1024, 0) < 2)) {
           echo "<a href=\"" . $path . "\" target=\"_blank\"><img src=\"" . $path . "\"></a>";
         };
       }
     }
    }

    Gallery("images/");
    ?>
  </div>
  <div class="form">
    <input type="text">
    <input type="button" value="Send!">
  </div>
</body>
</html>
