<!--
Ein continue in einem switch wirkt wie ein break. (ist ja noch ok)
switch wird bezgl. continue wie eine Schleife behandelt :-O (ob das sein musste ?)
-->
<?php
include "head.inc.php";
show_me();

for ($i=0; $i <11; $i++)
  {
  switch ($i)
    {
    case FALSE:       // typschwacher Vergleich
      echo "0\n";
      break;
      
    case 2:
      echo "2\n";
    case 3:
      echo "3\n";
      break;
      
    case 5:
      echo "5\n";
      continue;         // wirkt eben nur auf das switch!
      
    case 6:
      echo "6\n";
      break;
      
    case 8:
      echo "8\n";
      continue 2;

    case 9:
      echo "9\n";
      // continue 0;    // Fatal error: 'continue' operator accepts only positive numbers)
      // continue 3;    // Fatal error:  Cannot break/continue 3 levels 
      continue 1;

    case 10;            // noch so ein Bloedsinn ; statt : moeglich
      echo "10\n";
      break;
    }
  echo "nach switch in for (i:$i)\n";
  }
include "foot.inc.php"
?>
