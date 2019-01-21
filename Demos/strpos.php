<!--
Zeigt das Problem mit "lockeren" Datentypen anm Beispiel von strpos()
strpos() kann als Fundstelle 0 zurückliefern, was aber auch 
-bei falscher Abfrage- als FALSE ausgelegt werden kann :-((
-->
<?php
include "head.inc.php";
show_me();

$str="PHP hat so seine Tücken";
$pos = strpos($str,"so");
var_dump($pos);
if ($pos != false) // fehleranfällige Abfrage!!
  echo "Gefunden\n";
else
  echo "Nicht Gefunden\n";

$pos = strpos($str,"PHP");
var_dump($pos);
if ($pos != false) // fehleranfällige Abfrage!!, diesmal reingefallen
  echo "Gefunden\n";
else
  echo "Nicht Gefunden\n";

$pos = strpos($str,"PHP");
var_dump($pos);
if ($pos !== false) // so ist es korrekt!
  echo "Gefunden\n";
else
  echo "Nicht Gefunden\n";

echo "Das ist das Problem: false == 0 ergibt: ", var_dump(false == 0);

// Weitere mögliche Kurzformen
if (($pos = strpos($str,"PHP")) !== false) // so ist es korrekt!
  echo "Gefunden\n";
else
  echo "Nicht Gefunden\n";

// so ginge es auch, aber sehr ungewöhnlich
if (is_int($pos = strpos($str,"PHP"))) 
  echo "Gefunden\n";
else
  echo "Nicht Gefunden\n";
// und noch ein bisschen schlechter
if (gettype($pos = strpos($str,"PHP")) == "integer" ) 
  echo "Gefunden\n";
else
  echo "Nicht Gefunden\n";


include "foot.inc.php"
?>
