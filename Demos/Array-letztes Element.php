<!--
Zeigt, welchen Index das letzte Element in einer Tabelle hat
-->
<?php
include "head.inc.php";
show_me();

$a = array("a","b","c");
$a[6] = "x";
$a[] = "y";
var_dump($a);

echo "<hr>"; // --------------------------------------
end($a);
$b = each($a);
echo "Das letzte Element:\n";
echo "Schluessel: ", $b[0], "\n";
echo "Schluessel: ", $b['key'], "\n";
echo "Wert: ", $b[1], "\n";
echo "Wert: ", $b['value'], "\n";

echo "<hr>"; // --------------------------------------
unset ($a[$b[0]]);
$a[] = "z";
var_dump($a);

include "foot.inc.php"
?>
