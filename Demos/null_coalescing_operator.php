<!--
null coalescing operator oder nur: ?? ?
Oder aus dem Manual:
The null coalescing operator (??) has been added as syntactic sugar for the common case of needing to use a ternary in conjunction with isset().
-->
<?php
include "head.inc.php";
show_me();

// ohne Zucker (herkömmlich):
$username = isset($_GET['user']) ? $_GET['user'] : 'nobody';
var_dump($username);

// mit Zucker
$username = $_GET['user'] ?? 'nobody';
var_dump($username);


// mit viel Zucker ;-)
$username = $_GET['user'] ?? $_POST['user'] ?? 'nobody';
var_dump($username);


echo "<hr>"; // --------------------------------------
// fast so mit dem ternären Operator in "neuer" Form (Ja Teil kann man weglassen), gibt aber ne Notice
$username = $_GET['user'] ?: 'nobody';
var_dump($username);


include "foot.inc.php"
?>
