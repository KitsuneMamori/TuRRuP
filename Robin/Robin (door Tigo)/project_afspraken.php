<!DOCTYPE html>
<html>
<title>Afspraken</title>
<head>
  <link rel="stylesheet" type="text/css" href="stylesheetafspraak.css" />
</head>
<center>
 <body>

<div id="box" class="box">
                  <h3>
                      Titel: Afsrpakenlijst<br />
                      Uw naam: Robin Vieveen <br /> 
				  	<a href="contact.html">Contact</a>
                  </h3>

             <!--   <h3>Afspraak toevoegen</h3>

                <h3 >AFSPRAAK TOEVOEGEN TABEL</h3>
					<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<p>
					Datum: <input type="text" name="Datum" placeholder="DD/MM/YYYY" required />*<br><br>
					Afspraak: <input type="text" name="Afspraak" required />*<br><br>
					Adres: <input type="text" name="Adres" required />*<br><br>
					<input type="submit" name="submit" value="Submit"></form>
						<?php
						if ($_SERVER["REQUEST_METHOD"] == "POST") {

							$sFile = fopen("afspraken.csv", "a");

							$Datum = $_POST["Datum"];
							$Afspraak = $_POST["Afspraak"];
							$Adres = $_POST["Adres"];
						    $txt = $Datum ." , " . $Afspraak . " , " . $Adres . PHP_EOL;

							fwrite ($sFile, $txt);

							fclose ($sFile);
}
                        ?> -->


              <h3>
                  AFSPRAKENLIJST</h3>
        <table  border="1" bgcolor="white" class="gridtable">
            <tbody>
				<?php
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "Afspraken";

				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);
				// Check connection
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}

				$sql = "SELECT * FROM afspraken";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
						echo $row["Datum"]. " - ". $row["Afspraak"]. " - " . $row["Adres"] . "<br>";
					}
				} else {
					echo "0 results";
				}

				$conn->close();
				?>
            </tbody>
           </table>



</div>
</body>
</center>
</html>
