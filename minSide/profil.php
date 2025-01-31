<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
</head>
<body>
    <h1>Min profil</h1>
    <a href="index.php">
        <button>Hjemme side</button>
        <br>
    </a>
    <?php
    session_start();
    $navn = $_SESSION['navn'];
    $alder = $_SESSION['alder'];
    $epost = $_SESSION['epost'];
    echo "Ditt bruker navn:$navn <br>";
    echo "Din alder:$alder <br>";
    echo "Din epost:$epost <br>";
    
    if($alder <18){
        echo "Du er ikke myndig<br><br>";
    } else{
        echo "Du er myndig<br><br>";
    }

    ?>
    <form action="rediger.php" method="POST">
        <label for="rediger">Vil du kanskje redigere noe?</label>
        <button type="submit" id="rediger">Rediger profil</button>
    </form>
</body>
</html>