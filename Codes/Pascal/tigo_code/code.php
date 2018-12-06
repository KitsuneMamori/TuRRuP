<?php

$filename = 'Afspraak.csv';
$somecontent = "Add this to the file\n";

$file = fopen("Afspraak.csv", "r");

while (!feof($file) ) {

$rij = fgetcsv($file, 1028);

"<html>";
echo "<link rel=stylesheet type=text/css href=StylesheetPHP.css />";
 echo "<table>";
     echo "<td> $rij[0] </td>"; 
     echo "<td> $rij[1] </td>";
     echo "<td> $rij[2] </td>";
 echo "</table>";
 "</html>";
}

fclose($file);

if (is_writable($filename)) {

    if (!$handle = fopen($filename, 'a')) {
         echo "Cannot open file ($filename)";
         exit;
    }
}
?>