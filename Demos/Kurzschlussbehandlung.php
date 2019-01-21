<!--
Alle logischen Operatoren machen (zum Glück) Kurzschlussbehandlung
-->
<?php
include "head.inc.php";
show_me();

function f()
{
echo "In Function f()\n";
return true;
}


var_dump (TRUE or f());
var_dump (TRUE || f());
echo "<hr>"; // --------------------------------------

var_dump (FALSE and f());
var_dump (FALSE && f());
echo "<hr>"; // --------------------------------------

var_dump (FALSE or f());
var_dump (FALSE || f());

include "foot.inc.php"
?>
