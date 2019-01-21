<!--
Variable Variablen oder ...
... wie mache ich mir einen Knoten ins Hirn ;-)
-->
<?php
include "head.inc.php";
show_me();


  $a = "Hallo";
  $$a = "Welt";
  $$$a = "Meister";
  echo '$a = ', $a, "\n";
  echo '$$a = ', $$a, "\n";
  echo '$Hallo = ', $Hallo, "\n";
  echo '$Welt = ', $Welt, "\n"; 
  
  echo "<hr><B>1.Rätsel</B>\n";
  $$a = $a;
  echo '$a = ', $a, "\n";
  echo '$$a = ', $$a, "\n";
  echo '$Hallo = ', $Hallo, "\n";
  echo '$Welt = ', $Welt, "\n"; 
  
  echo "<hr><B>2.Rätsel</B>\n";
  $a = "b";
  $b = "c";
  $$b = "b";
  $$c = "a";
  echo '$a = ', $a, "\n";
  echo '$b = ', $b, "\n";
  echo '$c = ', $c, "\n";

  echo "<hr><B>Wer keine Arrays kennt :-O</B>\n";
  $a1 = 10;
  $a2 = 33;
  $a3 = 45;
  $a4 = 4;
  $a5 = 66;
  $a6 = 77;
  for ($i=1; $i<=6; $i++)
    echo "\$a$i = ", ${"a".$i}, "\n";

include "foot.inc.php"
?>
