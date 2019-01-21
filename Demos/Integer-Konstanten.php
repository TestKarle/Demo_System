<!--
Zeigt den Minimal/Maximalwert von Integer (entsprechende Konstantenwerte)
-->
<?php
include "head.inc.php";
show_me();

echo "<h3>PHP_VERSION:</h3>";
var_dump(PHP_VERSION);


echo "<h3>PHP_INT_SIZE:</h3>";
var_dump(PHP_INT_SIZE);

echo "<h3>PHP_INT_MAX:</h3>";
var_dump(PHP_INT_MAX);

echo "<h3>PHP_INT_MIN:</h3>";
var_dump(PHP_INT_MIN);

include "foot.inc.php"
?>
