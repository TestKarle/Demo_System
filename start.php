<!--
Achtung!
Das ist ein ziemlicher Hack und soll _nicht_ als Musterlösung dienen!!!
Es soll eher dazu anregen, es besser zu machen ;-) 
 -->

<!DOCTYPE  html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Demo-System Startseite</title>
    <style>
        body {background-color:#C0C0C0}
        h2 {text-align: center;}
        table {border: solid 1px;  border-collapse:collapse;  width:100%}
        td {border: solid 1px;  padding:3px;}
        td:nth-child(2) {text-align:center;}
        td:nth-child(3) {width:70%;}
    </style>
</head>
<body>

<?php
error_reporting(E_ALL);
 
$verz="Demos";
$handle = opendir($verz);

while($file = readdir($handle))
  {
  if (!is_dir($file) && preg_match("/\.php$/i",$file)) 
    if (!preg_match("/\.inc\.php$/i",$file))
      $verztab[] = $file;
  }
closedir($handle);
sort($verztab, SORT_NATURAL | SORT_FLAG_CASE);

// Tabellen-Header ausgeben
echo <<<ENDHEADER
<h2>PHP-Demos</h2>

<table>
  <tr>
    <td>Programm</td>
    <td>Quellcode</td>
    <td>Erkl&auml;rung</td>
  </tr>
ENDHEADER;

$line= <<<LINE
     <tr>
    <td><a href="@@URL@@" target="_blank">
                 @@FILE@@</a>
    </td>
    <td><a href="quellcode.php?filename=@@FILE_ENCODED@@" target="_blank">
                 <img src="note.gif" alt="Code"></a>
    </td>
    <td>@@TEXT@@
    </td>
  </tr>
LINE;

foreach($verztab as $file)
  {
  $ausgabe = str_replace("@@URL@@",$verz."/".$file, $line);
  $ausgabe = str_replace("@@FILE@@",$file, $ausgabe);
  $ausgabe = str_replace("@@FILE_ENCODED@@",rawurlencode($verz."/".$file), $ausgabe);
  $kom =  extract_com($verz."/".$file);
  if ($kom == "")
    $kom = "Keine Erklärung vorhanden";
  $ausgabe = str_replace("@@TEXT@@",nl2br(htmlentities($kom,ENT_COMPAT, 'UTF-8')), $ausgabe);
  printf("%s\n",$ausgabe);
  }
echo "</table>\n";

function extract_com($file)
{
$in_com = false;
$fp = fopen($file,"r");
while($zeile=fgets($fp))
  {
  $zeile = trim($zeile);
  if ($zeile == "")
    continue;
  if (!$in_com)
    {
    if (substr($zeile,0,4) == "<!--")
      {
      $in_com = true;
      $zeile = ltrim(substr($zeile,4));
      // Auch Kommentarende in der Zeile?
      if (($pos=strpos($zeile,"-->")) !== false)
        {
        return substr($zeile,0,$pos);
        }
      else
        {
        if ($zeile == "")
          $kommentar = "";
        else
          $kommentar = $zeile . "\n";
        }
      }
    else 
      {
      return "";
      }
    }
  else
    {
    // Kommentar Ende suchen
    if (($pos = strpos($zeile,"-->")) !== false)
      {
      if ($pos != 0)
        {
        $kommentar .= substr($zeile,0,$pos -1);
        }
      return $kommentar;
      }
    else
      {
      $kommentar .= $zeile . "\n";
      }
    }
  }
return "Das darf man nie sehen";
}
  
  ?>
  </body>
</html>
