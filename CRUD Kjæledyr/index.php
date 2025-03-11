<?php 
    include 'kobleDB.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kjæledyr</title>
    <link rel="stylesheet" href="kjæledyr.css">
</head>
<body>

    <header>
        <nav>www
            <?php include 'meny.php'; ?>
        </nav>
    </header>
    <Main>
        <button><a href="nyttDyr.php">registrer nytt kjæledyr</a></button>
        <h1>Velkommen!</h1>
        <p>Her kan du se tabell over kjæledyr</p>
        <?php
        $sql_dyr = "SELECT kjæledyr.DyreID, kjæledyr.NavnDyr, kjæledyr.TypeDyr, kjæledyr.RaseDyr, kjæledyr.EierNavn FROM kjæledyr ORDER BY kjæledyr.Typedyr ASC;";
        $stmt = $conn->prepare($sql_dyr);

        $stmt->execute();

        $rader = $stmt->fetchALL();

        echo"<table>";
            echo"<tr><th>Dyre ID</th><th>Navn på dyr</th><th>Typen dyr</th><th>Dyrerase</th><th>Eier navn</th></tr>";

            for($i = 0; $i < count($rader); $i++) {
                echo "<tr>";
                    echo "<td>" . $rader[$i]['DyreID'] . "</td>";
                    echo "<td>" . $rader[$i]['NavnDyr'] . "</td>";
                    echo "<td>" . $rader[$i]['TypeDyr'] . "</td>";
                    echo "<td>" . $rader[$i]['RaseDyr'] . "</td>";
                    echo "<td>" . $rader[$i]['EierNavn'] . "</td>";
                    echo "<td> 
                        <form action='slettsyr.php' method='$POST'>
                            <input type='hidden' name='DyreID'". $rader[$i]['DyreID'] . "'>
                            <butt
                        </form>
                        </td">
                echo "</tr>";
            }
            echo"</table>";
        ?>
    </Main>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>
</html>