<?php
function mathOperation($a, $b, $operation) {

  switch($operation) {
    case 0:
     echo "Add: " . ($a+$b);
     return 1; 
    case 1:
     echo "Subtract: " . ($a-$b);
     return 1;
    case 2:
     echo "Multiple: " . ($a*$b);
     return 1;
    case 3:
     if($b == 0) {
      echo "Divide by zero!";
      return 0;
     }
     echo "Divide: " . ($a/$b);
     return 1;
  }
 }

$input = array("+", "-", "*", "/");
$o = array_rand($input, 1);
mathOperation(rand(0, 100), rand(0, 100), $o);
?>
