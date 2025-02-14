<?php
include 'sjekkOmInnlogget.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilregister</title>
    <link rel="stylesheet" href="1stilark.css">
</head>
<body>
    <header>
        <nav>
            <?php include 'meny.php'; ?>
        </nav>
    </header>
    <main class="main-content"><h1>Ny eier</h1>
    <form action="" method="post">
    <table style="border: 1px solid black; padding: 140px;">
        <tr>
            <td>
                    <label for="RegNr">Registreringsnummer:</label>
                    <input type="text" name="RegNr" id="RegNr" required>
            </td>
            <td>
                    <label for="Type">Type:</label>
                    <input type="text" name="Type" id="Type" required><br>
            </td>
        </tr>
        <tr>
            <td>
                    <label for="Merke">Merke:</label>
                    <input type="text" name="Merke" id="Merke" required>
                    
            </td>
            <td>
                    <label for="Farge">Farge:</label>
                    <input type="text" name="Farge" id="Farge" required><br>
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
    $innsendtRegNr = $_POST['RegNr'];  
    $innsendtType = $_POST['Type'];  
    $innsendtMerke = $_POST['Merke'];  
    $innsendtFarge = $_POST['Farge'];  


    // Lag en SQL-spørring
    $sql = "INSERT INTO biler (RegNr, Type, Merke, Farge, ) VALUES ('$innsendtRegNr', '$innsendtType', '$innsendtMerke', '$innsendtFarge')";
    // Gjør spørringen klar
    $stmt = $conn->prepare($sql);

    // Kjør spørringen
    $stmt->execute();
    header('Location: bilregister.php');
}
  
  ?>
    </main>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
    </body>
</html>