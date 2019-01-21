<!--
 
 
-->

<!DOCTYPE  html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Demo-System Quellcodeanzeige</title>
</head>
  <body>
  <?php
 if (isset($_GET['filename']))
    { 
    $filename = rawurldecode($_GET['filename']);
    echo "<H3>",basename($filename),"</H3>";
    highlight_file($filename);
    }
  else
    die ("Kein Dateiname angegeben"); 
  ?>
  </body>
</html>
