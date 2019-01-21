<!--
verschiedene Möglichkeiten, wie man Ausgaben formatieren kann
-->
<?php
include "head.inc.php";
show_me();

//Variablen definieren
$jahr=2004;
$monat=9;
$tag=21;
$geld=21363.1458;


//Ausgabe mit printf
printf("%02d.%02d.%04d",$tag,$monat,$jahr);
echo "<br>";

//Speichern in Variable mit sprintf
$ergebnis=sprintf("%02d.%02d.%04d",$tag,$monat,$jahr);
echo $ergebnis."<br>";

//Ausgabe mit printf
printf("&euro; %0.2f",$geld);
echo "<br>";

//Mit number_format
$ergebnis="&euro; ".number_format($geld,2,",",".");
echo $ergebnis."<br>";

/*
$loc_de = setlocale (LC_ALL, 'de_DE@euro', 'de_DE', 'de', 'ge');
echo "Preferred locale for german on this system is '$loc_de'";
*/

$loc_de = setlocale (LC_NUMERIC, "German_Germany.1252");
// das klappt
printf("&euro; %0.2f",$geld);
// und das nicht
$ergebnis="&euro; ".number_format($geld,2);
echo $ergebnis."<br>";


include "foot.inc.php"
?>

