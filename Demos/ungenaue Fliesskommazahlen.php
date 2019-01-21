<!--
Fliesskommaarithmetik - genau ungenau, und das ist _kein_ PHP-Problem
-->
<?php
include "head.inc.php";
show_me();

  var_dump((int) ((0.1+0.7) * 10));

  var_dump( ((0.1+0.7) * 10));

  echo "<hr>\n";
  
  var_dump(0.1);
  var_dump(0.7);
  var_dump(0.1+0.7);

  echo "<hr>\n";
 
  var_dump(7.9999999999999);
 
  var_dump(7.99999999999999);
  
  printf("%.10f\n", ((0.1+0.7) * 10));
  printf("%.20f\n", ((0.1+0.7) * 10));
   
include "foot.inc.php"
?>
