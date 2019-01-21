<!--
zeigt die inhalte der superglobalen Arrays
-->
<?php
include "head.inc.php";
show_me();
echo '<H2>$_SERVER</H2>';
var_dump($_SERVER);
echo "<hr>"; // --------------------------------------

echo '<H2>$_GET</H2>';
var_dump($_GET);
echo "<hr>"; // --------------------------------------

echo '<H2>$_POST</H2>';
var_dump($_POST);
echo "<hr>"; // --------------------------------------

echo '<H2>$_FILES</H2>';
var_dump($_FILES);
echo "<hr>"; // --------------------------------------

echo '<H2>$_COOKIE</H2>';
var_dump($_COOKIE);
echo "<hr>"; // --------------------------------------

echo '<H2>$_SESSION</H2>';
var_dump($_SESSION);
echo "<hr>"; // --------------------------------------

echo '<H2>$_REQUEST</H2>';
var_dump($_REQUEST);
echo "<hr>"; // --------------------------------------

echo '<H2>$_ENV</H2>';
var_dump($_ENV);
echo "<hr>"; // --------------------------------------

echo "<hr>"; // --------------------------------------
echo '<H2>$GLOBALS</H2>';
var_dump($GLOBALS);

  
include "foot.inc.php"
?>
