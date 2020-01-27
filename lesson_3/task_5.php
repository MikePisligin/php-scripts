<?php

function convertString($str) {
  for ($i=0; $i<strlen($str); $i++) {
   if ($str[$i] == ' ') {
    $str[$i] = '_';
  };
 }
 return $str;
}

$myString = "Mother was washing the frame.";
echo convertString($myString);

?>
