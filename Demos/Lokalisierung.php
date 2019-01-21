<!--
Wenn man sich nicht auf Englisch (oder Esperanto oder Latein) einigen möchte,
sondern das Programm sich in einer bestimmten Sprache dem Benutzer mitteilen
möchte, fangen die Probleme an. (Problem ist _NICHT_ PHP-spezifisch).
Die Lokale hilft (aber nicht wirklich *g*, -> man achte auf das Wort "den").
-->
<?php
include "head.inc.php";
show_me();

// standardmässig ist alles in englisch
// z.B das Datum
echo date ('l, \d\e\n j.F Y'), "\n";
// am Rande: würde man den String mit Anführungszeichen schreiben,
// müsste man den Backslash maskieren
echo date ("l, \d\\e\\n j.F Y"), "\n";

echo strftime("%A, den %d.%B %Y"), "\n";
echo "<hr>"; // --------------------------------------

// Manchmal arbeiten die Funktionen aber lokalisiert
// Beim Datum z.B. strftime()
setlocale(LC_ALL, '');  // holt sich die Locale vom System (Server!!)
echo strftime("%A, den %d.%B %Y"), "\n";

// date macht das nicht!
echo date ('l, \d\e\n j.F Y'), "\n";

echo "<hr>"; // --------------------------------------
// man kann die Lokale auch angeben
setlocale(LC_ALL, 'Dutch_Netherlands');   // wie wäre es mit holländisch
echo strftime("%A, den %d.%B %Y"), "\n";
setlocale(LC_ALL, 'French_France');       // oder französisch
echo strftime("%A, den %d.%B %Y"), "\n";
setlocale(LC_ALL, 'german_germany');      // deutsch versteh ich am besten
echo strftime("%A, den %d.%B %Y"), "\n";

// hier findet man Windows-Locale Strings
// http://msdn.microsoft.com/de-de/library/39cwe7zf%28v=vs.80%29.aspx

// auf Unix-Systemen gibt man die anders an, z.B. so
// setlocale(LC_ALL, 'de_DE'); 
  
include "foot.inc.php"
?>
