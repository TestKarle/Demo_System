<!--
PHP und die eingebaute Intelligenz :-((
Strings werden numerisch verglichen, wenn Zahlen drin stehen
-->
<?php
include "head.inc.php";
show_me();

$a = 12;
$b = 4;
$c = "12";
$d = "4";
 
echo 'Typ von $a ist: ' , gettype($a), "<br />";
echo 'Typ von $b ist: ' , gettype($b), "<br />";
echo 'Typ von $c ist: ' , gettype($c), "<br />";
echo 'Typ von $d ist: ' , gettype($d), "<br />";

if ($a < $b)
  echo '$a ist kleiner $b <br>';
else
  echo '$a ist groesser $b <br>';

// merkwürden, merkwürden  
if ($c < $d)
  echo '$c ist kleiner $d <br>';
else
  echo '$c ist groesser $d <br>';

// Verzweiflungsversuch, geht aber natürlich auch nicht
if ((String) $c < (String) $d)
  echo '$c ist kleiner $d <br>';
else
  echo '$c ist groesser $d <br>';

/* Üblicher Trick um Stringvergleich sicherzustellen */
if ("x".$c < "x".$d)
  echo '$c ist kleiner $d <br>';
else
  echo '$c ist groesser $d <br>';
 

include "foot.inc.php"
?>
