<?php
//initialisatie
$datum= $_POST['datum'];
$afspraak= $_POST["afspraak"];
$adres= $_POST["adres"];


$txt="\n" . $datum . "," . $afspraak .",".$adres;

fwrite($myfile,$txt);


// Waarde op het scherm schrijven..
echo "<b>datum:</b> $datum</br>";
echo "<b>afspraak:</b>$afspraak</br>";
echo "<b>adres:</b>$adres</br>";

$servername="localhost";
$username= "root";
$password="";
$dbname= "afspraken";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM vuurwerk";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($line = $result->fetch_assoc()) {
        echo $line["Datum"]. " - " . $line["Afspraak"]. " - " . $line["Adres"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();