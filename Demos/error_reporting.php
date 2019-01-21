<!--
Beispiel, wie man PHP für die Ausgabe von Fehlermeldungen einstellen kann
-->
<?php
include "head.inc.php";
show_me();

// fuer die Entwicklung ist es sehr wichtig, dass alle!! Meldungen
// angezeigt werden. Dies ist zum Glueck inzwischen bei Entwicklungssystem
// auch (mehr oder weniger) Standard. Beim unserer Installation ist das 
// ebenfalls der Fall. Die Einstellung kann man auch verändern.
// Dringend empfohlen (wie gesagt, bei uns schon so eingestellt: ALLes anzeigen)
// kann mit der Funktion ini_set umgestellt werden
// ini_set('error_reporting',  E_ALL | E_STRICT);
// oder "besser" noch mit:
error_reporting(E_ALL | E_STRICT);

// das war die alte Standardeinstellung, ist heute noch auf einigen/vielen
// Produktivsystemen Standard. Absolut uebel bei der Prg-Entwicklung.
error_reporting(E_ALL & ~E_NOTICE);

$simone = 12;
$barbara = 4;
 
echo 'Typ von $simone ist: ' , gettype($simone), "<br />";
echo 'Typ von $barbara ist: ' , gettype($barbara), "<br />";

if ($simone < $barbara)
  echo '$simone ist kleiner $barbara <br />';
else
  echo '$simone ist groesser $barbara <br />';

$babara += 10;

if ($simone < $barbara)
  echo '$simone ist kleiner $barbara <br />';
else
  echo '$simone ist groesser $barbara <br />';

echo "Wert von barbara: $barbara\n";
echo "Wert von simone: $simone\n";
  
include "foot.inc.php"
?>
