<!--
Zeigt, dass in PHP Funktionen mit call by val aufgerufen werden
-->
<?php
include "head.inc.php";
show_me();

$a = array (12,34,66);
$s = "Das ist ein Test";
$i = 12;
echo "vor Funktionsaufruf <br />";
var_dump($a);
var_dump($s);
var_dump($i);
funk($a,$s,$i);
echo "<hr />"; // -----------------------------------
echo "nach Funktionsaufruf <br />";
var_dump($a);
var_dump($s);
var_dump($i);

function funk($pa,$ps,$pi)
{
$pa[1] = 1000;
$ps = "gut merken";
$pi = 42;
}

  
include "foot.inc.php"
?>
