<!--
Zeigt einige Operatoren in Verbindung mit Arrays
-->
<?php
include "head.inc.php";
show_me();

$a = array("a" => "Apfel", "b" => "Banane", "c" => "Grapefruit");
$a1 = array("b" => "Banane", "a" => "Apfel", "c" => "Grapefruit");
$a2 = array( "Apfel", "Banane", "Grapefruit");
$b = array("a" =>"Birne", "b" => "Erdbeere", "d" => "Kirsche");

$c = $a + $b; // Vereinigung von $a mit $b;
echo "Vereinigung von \$a mit \$b: \n";
var_dump($c);

$c = $b + $a; // Vereinigung von $b mit $a;
echo "Vereinigung von \$b mit \$a: \n";
var_dump($c);
echo "<HR />"; // --------------------------------------

if ($a == $a1)
    echo '$a und $a1 sind gleich';
else
    echo '$a und $a1 sind nicht gleich';
echo "\n";

if ($a == $a2)
    echo '$a und $a2 sind gleich';
else
    echo '$a und $a2 sind nicht gleich';
echo "\n";

if ($a === $a1)
    echo '$a und $a1 sind identisch';
else
    echo '$a und $a1 sind nicht identisch';
echo "\n";
echo "<HR />"; // --------------------------------------

var_dump(array(1,2,array(2,3,array(4))) == array(1,2,array(2,3,array(3))));
include "foot.inc.php"
?>
