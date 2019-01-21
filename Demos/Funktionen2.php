<!--
Funktion mit einer var. Anzahl von Parameter
zeigt die Verwendung von func_num_args(), func_get_arg(), func_get_args()
-->
<?php
include "head.inc.php";
show_me();

function func()
{
echo "func_num_args: <br />";
var_dump(func_num_args());
echo "func_get_arg(0): <br />";
var_dump(func_get_arg(0));
echo "func_get_args(): <br />";
var_dump(func_get_args());
}

func();
echo "<hr>"; // -------------------------------
func(4,6);
echo "<hr>"; // -------------------------------
func(array(3,"jj",6),70,array(4,"12"));

include "foot.inc.php"
?>
