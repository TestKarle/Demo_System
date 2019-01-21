<!--
zeigt den Umgang bzw. die Problematik mit NaN (Not A Number)
-->
<?php
include "head.inc.php";
show_me();

// allen 3 Variablen wird NaN zugewiesen
$a = acos(8);
$b = 0 / 0;
$c = NAN;

var_dump($a);
var_dump($b);
var_dump($c);

echo "<hr>";
echo "NIE mit == oder === auf NAN vergleichen, das ist sinnlos<br><br>";
var_dump($a == NAN);
var_dump($a === NAN);
echo "<br>";
var_dump($a == $b);
var_dump($a === $b);
echo "<br>";
var_dump(NAN == NAN);
var_dump(NAN === NAN);

echo "<hr>";
echo "Die Überprüfung auf NaN geht nur mit der Funktion is_nan()<br><br>";
var_dump(is_nan($a)); 
var_dump(is_nan(NAN)); 
var_dump(is_nan(3)); 
var_dump(is_nan(0.0)); 

include "foot.inc.php"
?>
