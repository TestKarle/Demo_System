<!--
Zeigt, dass ++ nicht gleich +1 ist (zumindest bei Strings ;-))
und -- ist auch wieder was ganz anderes *g*
PHP ist manchmal doch lustig?? :-((
-->
<?php
include "head.inc.php";
show_me();

$a = "z";
$a++;
var_dump($a);

$a = "z";
$a+=1;
var_dump($a);
echo "<hr>"; // --------------------------------------

$a = "c";
$a--;
var_dump($a);

$a = "c";
$a++;
var_dump($a);
echo "<hr>"; // --------------------------------------

$a = "c";
$a+=1;
var_dump($a);

$a = "c";
$a-=1;
var_dump($a);

include "foot.inc.php"
?>
