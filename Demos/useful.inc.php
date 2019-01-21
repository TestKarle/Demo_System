<?php
function show_me($colored = false)
{
printf("<H2>Quellcode:</H2>");
if ($colored)
  {
  highlight_file(basename($_SERVER['PHP_SELF']));
  }  
else
  {
  // $lines = file ($_SERVER['PHP_SELF']);   // geht zu Hause nicht
  $lines = file (basename($_SERVER['PHP_SELF']));
  // Durchgehen des Arrays und Anzeigen des Codes inkl. Zeilennummern
  foreach ($lines as $line_num => $line) 
    {
      printf("<b>%2d: </b>%s",$line_num+1,htmlentities($line,ENT_COMPAT, 'UTF-8'));
    }
  }
printf("\n<H2>Ergebnis:</H2>");
}


?>
