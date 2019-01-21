<!--
Zeigt, was bei Wahrheitswerten ausgegeben wird
-->
<?php
include "head.inc.php";
show_me();

echo "jetzt wird True ausgegeben: ", TRUE, "\n";
echo "jetzt wird False ausgegeben: ", FALSE, "\n";

echo "\nAusgabe mit var_dump \n";
echo "jetzt wird True ausgegeben: ";
var_dump(TRUE);
echo "jetzt wird False ausgegeben: ";
var_dump(FALSE);

echo "\nAusgabe mit print_r \n";
echo "jetzt wird True ausgegeben: ";
print_r(TRUE);
echo "\n";
echo "jetzt wird False ausgegeben: ";
print_r(FALSE);
echo "\n";

include "foot.inc.php"
?>
