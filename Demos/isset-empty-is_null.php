<!--
Was ist der Unterschied zwischen:
isset()
empty()
is_null()
-->
<?php
include "head.inc.php";
show_me();

$b = null;
$c = 0;
$d = 23;

var_dump(isset($a));
var_dump(isset($b));  // liefert auch false!
var_dump(isset($c));
var_dump(isset($d));
echo "<hr>"; // --------------------------------------

var_dump(empty($a));
var_dump(empty($b));
var_dump(empty($c));  // liefert auch true!
var_dump(empty($d));
echo "<hr>"; // --------------------------------------

var_dump(is_null($a));  // wirft eine Notice und liefert true
var_dump(is_null($b));
var_dump(is_null($c));
var_dump(is_null($d));

include "foot.inc.php"
?>
