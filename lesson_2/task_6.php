<?php
  function power($val, $pow) {

   if($pow == 2) {

    $val *= $val;
    return $val;
   }

  $pow -= 1;
  $val *= power($val, $pow);
 }

$val = 2;
$pow = 3;

echo power($val, $pow);
?>
