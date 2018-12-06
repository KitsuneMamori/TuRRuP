<?php

// Resultaat ophalen uit het formulier.
$voornaam = $_POST["voornaam"];
$achternaam= $_POST["achternaam"];
$geslacht= (isset($_POST["geslacht"]) ? $_POST['geslacht'] : null); 
$geboortedatum= $_POST["geboortedatum"];
$email = $_POST["email"];
$telefoon= $_POST["usrtel"];

// Waarde op het scherm schrijven..
echo "<b>Voornaam:</b> $voornaam</br>";
echo "<b>Achternaam:</b>$achternaam</br>";
echo "<b>geslacht:</b>$geslacht</br>";
echo "<b>Geboortedatum:</b>$geboortedatum</br>";
echo "<b>E-mail:</b> $email</br>";
echo "<b>Telefoon</b>$telefoon</br>";

?>