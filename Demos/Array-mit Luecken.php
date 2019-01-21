<!--
Kleines Beispiel, wie man mit Arrays, die "Lücken" haben, umgehen kann
-->
<?php
include "head.inc.php";
show_me();

$arr[1] = "test";
$arr[3] = "aha";

var_dump ($arr);

echo "arr[1] hat den Wert: $arr[1] \n";
echo "arr[2] hat den Wert: $arr[2] \n";
echo "arr[3] hat den Wert: $arr[3] \n";
echo "<hr>"; // --------------------------------------

echo count($arr) , "\n";
echo sizeof($arr) , "\n";

var_dump(isset($arr[2]));
var_dump(is_null($arr[2]));
echo "<hr>"; // --------------------------------------

echo "Mit foreach (nur Wert)\n";
foreach ($arr as $wert)
  echo "$wert\n";

echo "\nMit foreach (Schluessel und Wert)\n";
foreach ($arr as $ind => $wert)
  echo "Index: $ind, Wert: $wert\n";

echo "\nMit while und each\n";
// internen Arrayzeiger auf das erste Element stellen
reset ($arr);  //Achtung, das ist oft notwendig!
while ($ele = each($arr))
  {
  echo "Index: ", $ele['key'], ", ";
  echo "Wert: ", $ele['value'], "\n";
  }
include "foot.inc.php"
?>
