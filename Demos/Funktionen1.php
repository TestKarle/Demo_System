<!--
Zeigt, wie man Variablen by Reference übergeben kann
-->
<?php
include "head.inc.php";
show_me();


  function funk1($a)
    {
    $a = $a + 5;
    }
  function funk2(&$a)
    {
    $a = $a + 5;
    }
    
    $b = 10;
    funk1($b);
    var_dump ($b);
    
    // funk1(&$b);   // das geht seit PHP 5.4 nicht mehr
    // Fatal error: Call-time pass-by-reference has been removed; 
    // If you would like to pass argument by reference, 
    // modify the declaration of funk1(). 
    
    $b = 10;
    funk2($b);
    var_dump ($b);

    // funk2(&$b);   // das geht seit PHP 5.4 nicht mehr
    // Fatal error: Call-time pass-by-reference has been removed; 
   
/*
    funk2(10);    // geht nicht, Syntaxfehler
Fatal error: Only variables can be passed by reference 
*/    
    
  
include "foot.inc.php"
?>
