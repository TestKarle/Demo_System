<!--
Gut, dass wir verglichen haben, was bei Vergleichen verglichen wird
-->
<?php
include "head.inc.php";
show_me();

var_dump(3 == 3);
var_dump(3 == "3");
var_dump(3 === 3);
var_dump(3 === "3");

echo "<hr>"; // --------------------------------------

var_dump(3 != 3);
var_dump(3 <> 3);
var_dump(3 !== 3);
var_dump(3 != "3");
var_dump(3 <> "3");
var_dump(3 !== "3");
echo "Merke: für != kann man auch die Schreibweise <> verwenden\n";
echo "Merke: für !== gibt es keine andere Schreibweise\n";

echo "<hr>"; // --------------------------------------

echo "Für PHP alles logisch :-O\n";
var_dump("Maulwurf" != 0);
var_dump("0" == false);
var_dump("00" == true);

echo "<hr>"; // --------------------------------------

echo "Endlich ;-) mal ein neuer Vergleichsoperator in PHP7 (der Raumschiffoperator)\n";
var_dump(2323 <=> 12);
var_dump(2 <=> 1234);
var_dump(200 <=> 200);

include "foot.inc.php"
?>
