<?php

$a = 0;
do {
  if ($a == 0) {
  echo $a . ' - Null.<br>';
 } else if (($a % 2) != 0) {
   echo $a . ' - nechetnoe chislo.<br>';
 } else {
  echo $a . ' - chetnoe chislo.<br>';
 }
 $a++;
} while ($a <= 10);

?>
