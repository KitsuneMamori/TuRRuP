<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="utf-8">
<title>Overzicht vuurwerk-artikelen</title>
<style>
body{
background-image: radial-gradient(circle,#102733,#01000a);
}
</head>
<body>
<h2>Overzicht</h2>
<p> overzicht van vuurwerkartikelen </p>

<?php
$servername="localhost";
$username= "root";
$password="";
$dbname= "vuurwerk";

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
    while($rij = $result->fetch_assoc()) {
        echo $rij["naam"]. " - " . $rij["prijs"]. " - " . $rij["categorie"]."-".$rij["afbeelding"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

?>

