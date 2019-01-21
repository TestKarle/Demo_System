<!--
Zeigt verschiedene Ausgabemöglichkeiten in PHP
-->
<?php
include "head.inc.php";
show_me();

$i = 12;
$s = "Teststring";
$a = array (3,array(4,5,6),42);

echo  htmlspecialchars("Für Testausgaben ist die Einstellung von <pre> praktisch\n\n",
                        ENT_COMPAT, 'UTF-8');

/*
Unterschiede zwischen echo und print:
echo ist eine Sprachkonstrukt = PHP-Kommando
print ist ein Zwitter zwischen Funktion und Sprachkonstrukt, genauer:
print ist ein Sprachkonstrukt, das wie eine Funktion benutzt werden kann
Deshalb kann print auch mit Klammern benutzt werden, hat einen RW,
allerdings darf man print nur mit 1! Parmeter benutzen
*/

echo "<B>mit echo</B>\n";
echo $i,"\n";
echo $s,"\n";
echo $a,"\n\n";
echo "<hr />";
 
print "<B>mit print</B>\n";
print $i."\n";
print $s."\n";
print $a."\n\n";
echo "<hr />";  

// Bei printf fühlen sich C-Programmierer zu Hause :-)
printf("<B>mit printf</B>\n");
printf("%d\n",$i);
printf("%s\n",$s);
printf("%s\n",$a);
printf("<B>mit printf (alternativ)</B>\n");
printf("$i\n");
printf("$s\n");
printf("$a\n\n");
echo "<hr />";  

// print_r ist praktisch für Testausgaben, gibt (leider) keinen \n aus
// sehr praktisch für arrays
// man kann die Ausgabe auch in eine Var. lenken (2. Parameter auf true setzen)
print_r("<B>mit print_r</B>\n");
print_r($i);
print_r($s);
print_r($a);
echo "\nDie Variable var:\n";
$var = print_r($a,true);
echo $var;
echo "\n\n";
echo "<hr />";  

// var_dump ist mindestens genauso praktisch für Testausgaben
// var_dump gibt am Ende \n aus
// var_dump gibt ausser dem Wert noch zusätzlich den Datentyp an
// Die Ausgabe ist vielleicht etwas gewöhnungsbedürftig
printf("<B>mit var_dump</B>\n");
var_dump($i);
var_dump($s);
var_dump($a);


include "foot.inc.php"
?>
