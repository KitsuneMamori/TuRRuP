<?php

//resultaat uit formulier ophalen

$rotje= (isset($_POST['rotje']) ? $_POST['rotje'] : null);
$aantalrotjes= (isset($_POST['aantalrotjes']) ? $_POST['aantalrotjes'] : null);
$rotje2= (isset($_POST['rotje2']) ? $_POST['rotje2'] : null);
$aantalrotjes2= (isset($_POST['aantalrotjes2']) ? $_POST['aantalrotjes2'] : null);
$rotje3= (isset($_POST['rotje3']) ? $_POST['rotje3'] : null);
$aantalrotjes3= (isset($_POST['aantalrotjes3']) ? $_POST['aantalrotjes3'] : null);
$vuurpijl= (isset($_POST['vuurpijl']) ? $_POST['vuurpijl'] : null);
$aantalvuurpijlen= (isset($_POST['aantalvuurpijlen']) ? $_POST['aantalvuurpijlen'] : null);
$vuurpijl2= (isset($_POST['vuurpijl2']) ? $_POST['vuurpijl2'] : null);
$aantalvuurpijlen2= (isset($_POST['aantalvuurpijlen2']) ? $_POST['aantalvuurpijlen2'] : null);
$vuurpijl3= (isset($_POST['vuurpijl3']) ? $_POST['vuurpijl3'] : null);
$aantalvuurpijlen3= (isset($_POST['aantalvuurpijlen3']) ? $_POST['aantalvuurpijlen3'] : null);

//waarde op het scherm weergeven 
echo "<b>Knalstreng:</b>$rotje</br>";
echo "<b>aantal Knalstrengs:</b>$aantalrotjes</br>";
echo "<b>Spanish crackers :</b>$rotje2</br>";
echo "<b>aantal Spanisch crackers:</b>$aantalrotjes2</br>";
echo "<b>Thunder pepper:</b>$rotje3</br>";
echo "<b>aantal Thunder peppers: </b> $aantalrotjes3</br>";
echo "<b>Galaxy light: </b> $vuurpijl</br>";
echo "<b>aantal Galaxy lights: </b> $aantalvuurpijlen</br>";
echo "<b>Afther shock: </b> $vuurpijl2</br>";
echo "<b>aantal Afther shocks: </b> $aantalvuurpijlen2</br>";
echo "<b>Red fire: </b> $vuurpijl3</br>";
echo "<b>aantal Red fires: </b> $aantalvuurpijlen3</br>";

?>