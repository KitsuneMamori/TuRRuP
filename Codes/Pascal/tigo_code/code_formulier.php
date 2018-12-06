<?php

$naam = $_POST['naam'];
$email = $_POST["email"];
$opmerkingen = $_POST["opmerkingen"];
$beoordeling = $_POST["beoordeling"];
$bestellingen = $_POST["bestellingen"];


echo "<b>Naam:			</b> $naam</br>";
echo "<b>E-mail:		</b> $email</br>";
echo "<b>Bestellingen:	</b> $bestellingen</br>";
echo "<b>Beoordeling:	</b> $beoordeling</br>";
echo "<b>Opmerkingen:	</b> $opmerkingen</br>";


?>