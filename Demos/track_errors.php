<!--
Beispiel, das den Umgang mit track_errors und php_errormsg zeigt
-->
<?php
include "head.inc.php";
show_me();

// Var. php_errormsg sicherheitshalber löschen
unset ($php_errormsg);
// Fehlermeldungen werden zusätzlich in php_errormsg geschrieben
$a = ini_set ("track_errors", 1);  
// Code ausführen, Fehlermeldung mit @ unterdrücken
$fp=@fopen("/diese/Verzeichnisse/existieren/nicht/No.go","w");
// alten Wert für track_errors zurückschreiben
ini_set ("track_errors", $a);
// Wenn php_errormsg da ist, dann war auch ein Fehler
if (isset($php_errormsg))
  echo "Folgender Fehler ist passiert: $php_errormsg\n";
else
  echo "Es hat getut ;-) \n";
  
include "foot.inc.php"
?>
