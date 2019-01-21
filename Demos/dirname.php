<!--
Beispiel für die Funktion dirname()
-->
<?php
include "head.inc.php";
show_me();


echo $_SERVER["PHP_SELF"] . " --> ";
echo dirname($_SERVER["PHP_SELF"]);
echo "<br>";
echo "/test/aaa --> ";
echo dirname("/test/aaa");
echo "<br>";
echo "/tes --> ";
echo dirname("/tes");
echo "<br>";
echo "/ --> ";
echo dirname("/");
echo "<br>";
 
include "foot.inc.php"
?>
