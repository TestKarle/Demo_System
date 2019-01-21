<!--
Typdeklaration bei Funktionen halten so manche Überraschung parat
Dort sind _keine_ alias-Namen erlaubt
also nur bool statt boolean, int statt integer, float statt double *grmbl*
-->
<?php
include "head.inc.php";
show_me();

$b = true;
$s = "Hallo";
var_dump($b);
var_dump($s);
echo "<hr>"; // --------------------------------------
// wir können übergeben, was wir wollen
f0($b);
f0($s);
echo "<hr>"; // --------------------------------------
f1($b);
// auch ok, Parameter wird einfach angepasst, wenn nicht strenge
// Typisierung eingestellt ist [1. Zeile: declare(strict_types=1)];
f1("Beispiel");
echo "<hr>"; // --------------------------------------
// no problem, hier kann locker boolean verwendet werden
settype ($b, "boolean");
var_dump($b);
// und hier knallt es dann
f2($b);
// ---------------------------------------------------
// Funktion ohne Parametertyp
function f0($test)
{
// $test kann irgendeinen Typ haben
var_dump($test);
}
// Funktion mit Parametertyp
function f1(bool $test)
{
// $test hat garantiert den Typ bool
var_dump($test);
}
// Funktion mit Parametertyp als Aliastyp
// hier darf boolean nicht verwendet werden (nur bool)
function f2(boolean $test)
{
var_dump($test);
}
include "foot.inc.php"
?>
