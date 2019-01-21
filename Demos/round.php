<!--
Runden - so wie man es braucht :-))
-->
<?php
include "head.inc.php";
show_me();

var_dump( round(3.4) );
var_dump( round(3.5) );
var_dump( round(3.6) );
var_dump( round(3.6, 0) );
var_dump( round(1.95583, 2) );
var_dump( round(1241757, -3) );
var_dump( round(5.045, 2) );
var_dump( round(5.055, 2) );
var_dump( round(5.0549, 2) );
echo "<hr />\n";

var_dump( round(9.5, 0, PHP_ROUND_HALF_UP) );
var_dump( round(9.5, 0, PHP_ROUND_HALF_DOWN) );
var_dump( round(9.5, 0, PHP_ROUND_HALF_EVEN) );
var_dump( round(9.5, 0, PHP_ROUND_HALF_ODD) );
echo "<hr />\n";

var_dump( round(8.5, 0, PHP_ROUND_HALF_UP) );
var_dump( round(8.5, 0, PHP_ROUND_HALF_DOWN) );
var_dump( round(8.5, 0, PHP_ROUND_HALF_EVEN) );
var_dump( round(8.5, 0, PHP_ROUND_HALF_ODD) );
echo "<hr />\n";


  
include "foot.inc.php"
?>
