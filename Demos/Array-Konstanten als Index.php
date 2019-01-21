<!--
Wieso soll man bei assoziativen Arrays den Schlüssel als String,
also in Hochkomma oder Anführungszeichen schreiben? ...
... Deshalb!
-->
<?php
include "head.inc.php";
show_me();


// beginnt bei 1  
$a = array (1 => 14,25,36);
var_dump($a);

// nachgucken, ob Variable existiert
var_dump(isset($a[0]));
var_dump(isset($a[1]));

// Zugriff auf nicht exist. Variable
var_dump($a[0]);
var_dump($a[1][1]);

echo "<hr>"; // --------------------------------------

$c["hallo"] = "Apfel";
$c["test"] = "Birne";
echo "Vor der Definition der Konstanten:", $c[hallo], "\n";

define ("hallo", "test");
echo "Nach der Definition der Konstanten:", $c[hallo], "\n";

echo "In Anführungszeichen werden keine Konstanten ersetzt, deshalb ..\n";
echo "geht das: $c[hallo]\n";

include "foot.inc.php"
?>
