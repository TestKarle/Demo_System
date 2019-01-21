<!--
Dieses Beispiel soll die Problematik zeigen, dass fehlende Schlüsselwerte einer
_vorhandenen_ Dimension dem PHP-Interpreter zumindest eine Notice wert sind, der
Zugriff auf eine nicht vorhandenen Dimension den PHP-Interpreter ziemlich
kalt lässt :-(( 
-->
<?php
include "head.inc.php";
show_me();

$arr = array("bla" => array(6 => 5, 13 => 9, "a" => 42));
print_r($arr);
echo "\n";
echo '$arr["bla"][6]: ', $arr["bla"][6], "\n";
echo '$arr["bla"][13]: ', $arr["bla"][13], "\n";
echo '$arr["bla"]["a"]: ', $arr["bla"]["a"], "\n";
echo '$arr["bla"]["b"]: ', $arr["bla"]["b"], "\n";
echo '$arr["blubber"]: ', $arr["blubber"], "\n";
echo '$arr["blubber"]["a"]: ', $arr["blubber"]["a"], "\n";

echo "<hr>";
var_dump($arr["bla"]["b"]);
 
echo "<hr>";
$arr["bla"]= 1234567;
print_r($arr);
echo '$arr["bla"][6]: ', $arr["bla"][6], "\n\n";

echo "<hr>";
$arr["bla"]= "Das ist schon nicht ohne";
print_r($arr);
echo '$arr["bla"][6]: ', $arr["bla"][6], "\n\n"; 

echo "<hr>";
$arr["bla"]= 33;
print_r($arr);
echo '$arr["bla"][0][2]["zzz"]: ',$arr["bla"][6][2]["zzz"], "\n\n";

include "foot.inc.php"
?>
