<!--
Ist PHP case-sensitive?
Ganz klar: jain ;-)
-->
<?php
include "head.inc.php";
show_me();
printf("printf<br />");
PRINTF("PRINTF<br />");
echo strlen("irgendwas"),"<br />";
ECHO STRLEN("irgendwas"),"<br />";

$a = 10;
$A = 15;
echo "a ist $a, A ist $A <br />";

if ($a > 5)
    echo "kleines if <br />";

IF ($a > 5)
    echo "grosses if <br />";

if (true == TRUE)
    echo "logisch <br />";

if ("true" == "TRUE")
    echo "das wäre unlogisch <br />";
else
    echo "auch logisch oder <br />";

include "foot.inc.php"
?>
