<!--
Referenz als Rückgabewert einer Funktion
-->
<?php
include "head.inc.php";
show_me();


function &returniere_referenz()
{
    static $einereferenz=12;
    var_dump($einereferenz);
    return $einereferenz;
}

$neuereferenz =&returniere_referenz(); 
var_dump($neuereferenz);
$neuereferenz++;
returniere_referenz();

$keinereferenz =returniere_referenz(); 
var_dump($keinereferenz);
$keinereferenz++;
returniere_referenz();

  
include "foot.inc.php"
?>
