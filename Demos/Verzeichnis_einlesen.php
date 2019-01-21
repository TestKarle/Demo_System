<!--
Zeigt ein anzugebendes Verzeichnis sortiert an
Es wird nicht zwischen Verz. und Dateien unterschieden
-->
<?php
include "head.inc.php";
show_me();

// $verz='E:\PHP\karle\Demos';
$verz='\\\\Mrs03\Unterricht\Karle';
$handle = opendir($verz);

while($file = readdir($handle))
  {
  // vielleicht noch was filtern?
  $verztab[] = $file;
  }
closedir($handle);

sort($verztab);

foreach($verztab as $file)
  printf("%s\n",$file);
  
include "foot.inc.php"
?>
