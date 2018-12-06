<!DOCTYPE html>

<html lang= "nl">
<link rel= stylesheet type=text/css href= stylesheet.css />
<head>
<meta charset="utf-8">
<title> Overzicht</title>

</head>
<body>
<header>
<h1 align= "center"><strong>Overzicht afspraken</strong></h1>
</header>
<?php

echo "<table>";
//opencsvfile
$myfile = fopen("projectafspraken.csv", "r") or die("Unable to open file!");
while (!feof($myfile)){
	$line= fgetcsv($myfile);
	
	echo "<tr>";
	echo "<td>$line[0]</td>";
	echo "<td>$line[1]</td>";
	echo "<td>$line[2]</td>";
	echo "</tr>";
	
}
echo "</table>";
fclose($myfile); 

 ?>
 </body>
 </html>