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

                <h3>Afspraak toevoegen</h3>

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
?>


              <h3>
                  AFSPRAKENLIJST</h3>
        <table  border="1" bgcolor="white" class="gridtable">
            <tbody>
<?php


  $file = fopen("afspraken.csv","r");

  while(! feof($file))
  {
    $row = fgetcsv($file);

    echo  "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";

    }


  fclose($file);


  ?>
            </tbody>
           </table>



</div>
</body>
</center>
</html>
