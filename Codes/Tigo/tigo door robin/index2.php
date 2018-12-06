<!DOCTYPE html>
<html>
<title>Afspraken</title>
<head></head>
 <body>
  <link rel="stylesheet" type="text/css" href="Stylesheet2.css">
      <div id="box4" class="box4">
          <div id="box1" class="box1">
                  <h3 style="margin-left:50px">
                      Titel: Afsprakenlijst<br />
                      Naam: Tigo Dool <br />
				  	<a href="Formulier.html">Contact</a>
                  </h3>
          </div>
        <!--  <div id="box2" class="box2">
              <h3 style="margin-left:50px">Afspraak toevoegen</h3>
              <div id="box5" class="box5">
                <h3 style="margin-left: 50px">AFSPRAAK TOEVOEGEN TABEL</h3>
					<form method="post" style="margin-left: 50px" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<p style="text-align: left">
					Datum: <input type="text" name="Datum" placeholder="DD/MM/YYYY" required />*<br><br>
					Afspraak: <input type="text" name="Afspraak" required />*<br><br>
					Adres: <input type="text" name="Adres" required />*<br><br>
					<input type="submit" name="submit" value="Submit">
						<?php
						if ($_SERVER["REQUEST_METHOD"] == "POST") {

							$sFile = fopen("Afspraak2.csv", "a");

							$Datum = $_POST["Datum"];
							$Afspraak = $_POST["Afspraak"];
							$Adres = $_POST["Adres"];

							$txt = $Datum . " , " . $Afspraak . " , " . $Adres . PHP_EOL;

							fwrite ($sFile, $txt);

							fclose ($sFile);

						}

					?>

            </div>
          </div>-->
          <div id="box3" class="box3">
              <h3 style="margin-left:50px">
                  AFSPRAKENLIJST</h3>
 <div class="container" id="container" style="margin-left: 50px">
        <table class="gridtable" border="1">
            <tbody>
              <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "afspraken";

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
            while($rij = $result->fetch_assoc()) {
                echo $rij["datum"]. " - " . $rij["plaats"]. " - " . $rij["afspraak"]. "<br>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
            </tbody>
           </table>
    </div>


          </div>
       </div>
  </body>
</html>
