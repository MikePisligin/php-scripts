<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php
 $menu = array('<ul>' => array('Item_1'=>'<li>','Item_2'=>'<li>','Item_3'=>'<li>'));
/* $menu_2 = array('<ul>' => array('Item_1'=>'<li>',
  				 '<ul>' => array(
					'subItem_1'=>'<li>',
					'subItem_2'=>'<li>',
					'subItem_3'=>'<li>'
					),
				 'Item_3'=>'<li>'));*/
 foreach($menu as $key => $value) {
  echo $key;
  foreach($value as $key2 => $value2) {
   echo $value2 . $key2;
 }
} 
  ?>
</body>
</html>
