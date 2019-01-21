<!--
Ein bisschen was zum casten und ..
.. What the fu.. is a binary String
-->
<?php
include "head.inc.php";
show_me();

$a = "2";
var_dump($a);
$b = (int) $a;
var_dump($b);
echo "<hr>"; // --------------------------------------

$a = 2;
$b = (unset) $a;
var_dump($a);
var_dump($b);
echo "<hr>"; // --------------------------------------

$bin = (binary) "Hallo";
var_dump($bin);
$bin = (binary) "100";
var_dump($bin);
$bin = b"100";
var_dump($bin);
echo "<hr>"; // --------------------------------------

$bin = b"Hallo";
var_dump(strlen($bin));
$notbin = b"Hallo";
var_dump(strlen($notbin));
var_dump($bin === $notbin);
echo "<hr>"; // --------------------------------------
echo "Intern sind ab PHP7 alles binäre Strings\n";
echo "Der Kram wurde mal für PHP6 eingeführt\n";
echo "siehe: https://stackoverflow.com/questions/1734005/in-php-what-is-a-binary-string-bxxxx";

include "foot.inc.php"
?>
