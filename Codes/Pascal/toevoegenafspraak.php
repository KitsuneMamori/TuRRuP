<?php


$myfile = fopen("projectafspraken.csv", "a") or die("Unable to open file!");
 
	


//initialisatie
$datum= $_POST['datum'];
$afspraak= $_POST["afspraak"];
$adres= $_POST["adres"];

/*
$datum= "";
$afspraak= "";
$adres= "";
*/

$txt="\n" . $datum . "," . $afspraak .",".$adres;

fwrite($myfile,$txt);


// Waarde op het scherm schrijven..
echo "<b>datum:</b> $datum</br>";
echo "<b>afspraak:</b>$afspraak</br>";
echo "<b>adres:</b>$adres</br>";







?>