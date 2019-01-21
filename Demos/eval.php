<!--
Zeigt die Funktion eval();
-->
<?php
include "head.inc.php";
show_me();

$a = 10;
$b = '$a++;';
eval ($b);
echo $a, "\n";
echo "<hr>"; // ---------------------------------------

$test = "Ausgabe mit eval\n";
$output = "echo";
eval ("$output \$test;");
echo "<hr>"; // ---------------------------------------

// die Variablen können ja irgendwoher herkommen
$arg1 = 12;
$op = "+";
$arg2 = 23; 
$erg = eval ("return $arg1 $op $arg2;");
echo "Ergebnis ist $erg \n";
echo "<hr>"; // ---------------------------------------

$eingabe="strlen(\"Hausmeister\")";
$erg = eval ("return $eingabe;");
echo "Ergebnis ist $erg \n";
echo "<hr>"; // ---------------------------------------

// falsche Verwendung
// Fehler abfangen bei eval ist ziemlich übel
// liefert häufig NULL zurück, egal ob z.B ein warning war
// mit  folgendem Hack bin ich eigentlich zufrieden
$eingabe="strlen(\"Hausmeister\",11)";
// Var. php_errormsg sicherheitshalber löschen
unset ($php_errormsg);
// Fehlermeldungen werden zusätzlich in php_errormsg geschrieben
$a = ini_set ("track_errors", 1);  
// Code ausführen, Fehlermeldung mit @ unterdrücken
@eval ("\$erg = $eingabe;") ;
// alten Wert für track_errors zurückschreiben
ini_set ("track_errors", $a);
// Wenn php_errormsg da ist, dann war auch ein Fehler
if (isset($php_errormsg))
  echo "Folgender Fehler ist passiert: $php_errormsg\n";
else
  echo "Ergebnis ist $erg \n";

include "foot.inc.php"
?>
