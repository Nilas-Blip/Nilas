
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
    <main class="main-content">
    <button><a href="nyBil.php">Ny Bil</a></button>
        <h1>bilregister</h1>
        <p>Her kan du se bilregisteret</p>
        <p>Velkommen!</p>
        <?php
        $sql_biler = "SELECT biler.RegNr, biler.Type, biler.Merke, biler.Farge, biler.Fnr FROM biler ORDER BY biler.Type ASC;";

        $stmt = $conn->prepare($sql_biler);

        $stmt->execute();

        $rader = $stmt->fetchAll();

        echo "<table>";
            echo "<tr><th>RegNR</th><th>Type</th><th>Merke</th><th>Farge</th><th>Fnr</th></tr>";
            
            foreach($rader as $rad) {
                echo "<tr>";
                    echo "<td>" . htmlspecialchars($rad['RegNr']) . "</td>";
                    echo "<td>" . htmlspecialchars($rad['Type']) . "</td>";
                    echo "<td>" . htmlspecialchars($rad['Merke']) . "</td>";
                    echo "<td>" . htmlspecialchars($rad['Farge']) . "</td>";
                    echo "<td>" . htmlspecialchars($rad['Fnr']) . "</td>";
                    echo"<td>
                        <form action='slettBil.php' method='POST' onsubmit='return confirm(\"Er du sikker på at du vil slette " . htmlspecialchars($rad['RegNr']) . "?\");'>
                            <input type='hidden' name='RegNr' value='" . $rad['RegNr'] . "'>
                            <button type='submit'>Slett</button>
                        </form>
                        </td>";
                    echo "<td><a href='endreBil.php?RegNr=" . urlencode($rad['RegNr']) . "'><button>Endre</button></a></td>";
                echo "</tr>";
            }  

            echo "</table>";  
        ?>
    </main>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
    </body>
</html>