<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nytt dyr</title>
    <link rel="stylesheet" href="kjæledyr.css">
</head>
<body>
<?php
    $servername = "localhost";
    $database = "kjæledyr";
    $dbUser = "root";
    $dbPassord = "";
 
    // prøver å åpne en connection med databsen
    try{
        $conn = new PDO("mysql:host=$servername;dbname=$database;charset=utf8", $dbUser, $dbPassord);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        die("Kunne ikke koble til databasen: " . $e->getMessage());
    };
    ?>
    <header>
        <nav>
            <?php include 'meny.php'; ?>
        </nav>
    </header>
    <main class="main-content"><h1>Nytt dyr</h1>
    <form action="" method="post">
    <table style="border: 1px solid black; padding: 140px;">
        <tr>
            <td>
                    <label for="DyreID">Dyre ID:</label>
                    <input type="text" name="DyreID" id="DyreID" required>
            </td>
            <td>
                    <label for="NavnDyr">Navnet på dyret:</label>
                    <input type="text" name="NavnDyr" id="NavnDyr" required><br>
            </td>
        </tr>
        <tr>
            <td>
                    <label for="TypeDyr">Typen dyr:</label>
                    <input type="text" name="TypeDyr" id="TypeDyr" required>
                    
            </td>
            <td>
                    <label for="RaseDyr">Dyrets rase:</label>
                    <input type="text" name="RaseDyr" id="Rasedyr" required><br>
            </td>
            <td>
                    <label for="EierNavn">Eier:</label>
                    <input type="text" name="EierNavn" id="EierNavn" required><br>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: right;">
                    <button type="submit" name="leggTil">Legg til</button>
            </td>
        </tr>
    </table>
    </form>

    <?php
  
  // Sjekk om skjemaet har blitt sendt inn
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Hent brukernavn og passord fra skjemaet
    $innsendtDyreID = $_POST['DyreID'];  
    $innsendtNavnDyr = $_POST['NavnDyr'];  
    $innsendtTypeDyr = $_POST['TypeDyr'];  
    $innsendtRaseDyr = $_POST['RaseDyr']; 
    $innsendtEierNavn = $_POST['EierNavn'];


    // Lag en SQL-spørring
    $sql = "INSERT INTO kjæledyr (DyreID, NavnDyr, TypeDyr, RaseDyr, EierNavn ) VALUES ('$innsendtDyreID', '$innsendtNavnDyr', '$innsendtTypeDyr', '$innsendtRaseDyr', '$innsendtEierNavn')";
    // Gjør spørringen klar
    $stmt = $conn->prepare($sql);

    // Kjør spørringen
    $stmt->execute();
    header('Location: index.php');
}
  
  ?>
    </main>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
    </body>
</html>