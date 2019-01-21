<!--
Der Zugriff mit [ ] kann bedeuten, dass man auf ein Zeichen eines Strings
zugreift oder - der Normalfall - auf ein Arrayelement
-->
<?php
include "head.inc.php";
show_me();


$a = "fall";
var_dump($a);
$a[0] = "b";
var_dump($a);
echo "<hr>"; // --------------------------------------

$a = 1000;
var_dump($a);
$a[0] = "b";
var_dump($a);
echo "<hr>"; // --------------------------------------

$b[0] = "b";
var_dump($b);
echo "<hr>"; // --------------------------------------

$c[] = "Ingo";
$c[2] = "b";
var_dump($c);
echo "<hr>"; // --------------------------------------

$c[0][3] = "e";
var_dump($c);

include "foot.inc.php"
?>
