<?php
  $a = rand(-1000, 1000);
  $b = rand(-1000, 1000);
 
  if(($a>=0) && ($b>=0)) {
    echo "Difference of two numbers: " . ($a-$b); 

  } else if(($a<0) && ($b<0)) {

    echo "Product of two numbers: " . $a*$b;
  } else if((($a>=0) && ($b<0)) || (($a<0) && ($b>=0))) {

    echo "Sum of two numbers: " . ($a+$b);
  };
?>
