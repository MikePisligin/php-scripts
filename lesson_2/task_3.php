<?php
  function Add($a, $b) {
    return $a+$b;
  }

  function Subtraction($a, $b) {
    return $a-$b;  
 }

  function Multiple($a, $b) {
    return $a*$b;
 }

  function Divide ($a, $b) {

   if ($b == 0) { 
    echo "Divide by zero!";
    return 0;
   };

   return $a/$b;
 }

$input = array("+", "-", "*", "/");
$o = array_rand($input, 1);

switch($o) {
  case 0:
   echo "Add: " . Add(rand(0, 100), rand(0, 100));
   break;
  case 1:
   echo "Subtract: " . Subtraction(rand(0, 100), rand(0, 100));
   break;
  case 2:
   echo "Multiple: " . Multiple(rand(0, 100), rand (0, 100));
   break;
  case 3:
   echo "Divide: " . Divide(rand(0, 100), rand(0, 100));
   break;
 }
?>
