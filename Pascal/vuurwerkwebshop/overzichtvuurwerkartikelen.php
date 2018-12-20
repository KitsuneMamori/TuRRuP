<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="utf-8">
<title>Overzicht vuurwerk-artikelen</title>
<style>
body{
background-color:white;
}
table {
    border: 1px solid black;
}
</style>
</head>
<body>
<h2>Overzicht</h2>
<p> overzicht van vuurwerkartikelen </p>

<?php

$servername="localhost";
$username= "root";
$password="";
$dbname= "vuurwerk";



echo "<table>";



//create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM producten";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
    // output data of each row
    while($rij = $result->fetch_assoc()) {
        echo $rij["afbeelding"]. " - " . $rij["naam"]. " - " . $rij["prijs"]."-".$rij["code"]."-".$rij["categorie"]."-".$rij["id"]. "<br>";
    }
} else {
    echo "0 results";
}
	echo "<tr>";
    echo "<td>$rij[0]</td>";
	echo "<td>$rij[1]</td>";
	echo "<td>$rij[2]</td>";
	echo "<td>$rij[3]</td>";
	echo "<td>$rij[4]</td>";
	echo "<td>$rij[5]</td>";
	echo"</tr>";
	
	
echo "</table>";
$conn->close();


?>

