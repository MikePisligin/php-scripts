<?php

$cities = array(
	'Moscowskay' => array('Moscow', 'Zelenograd', 'Klin'),		
	'Leningradskay' => array('Saint-Petersburg', 'Pushkin', 'Peterhof'),
	'Ryazanskay' => array('Ryazan', 'Mikhajlov', 'Shilovo'),
	'Kirovskaya' => array('Kirov', 'Sovetsk', 'Urzhum'),
	'Kazanskaya' => array('Kazan', 'Naberezhnye Chelny', 'Zelenodolsk'),
	'Nizhegorodskaya' => array('Nizhny Novgorod', 'Zavolzhye', 'Dzerzhinsk'),
	);

foreach($cities as $key => $value) {
  echo $key . ':<br>';
  foreach($value as $key2 => $value2) {
    if ($key2 < 2) {
      echo $value2 . ', ';      
     } else {
        echo $value2 . '.';
     }
  }
  echo '<br>';
 }

?>
