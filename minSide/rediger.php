<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redigerings profil</title>
</head>
<body>
    <h1>Rediger profil</h1>
    <a href="index.php">
        <button>Hjemme side</button>
    </a>
    <br>
    <form action="" method="POST">
        <label for="navn">Brukernavn:</label>
        <input type="text" id="navn" name="navn" required><br>

        <label for="alder">Alder:</label>
        <input type="number" id="alder" name="alder" required><br>

        <label for="epost">Epost:</label>
        <input type="text" id="epost" name="epost" required><br>

        <button type="sumbit">send inn</button>
    </form>
        <?php 
            session_start();
            if(isset($_POST['navn'])){
                $_SESSION['navn'] = $_POST['navn'];
                $_SESSION['alder'] = $_POST['alder'];
                $_SESSION['epost'] = $_POST['epost'];
                
                if (!isset($_SESSION['teller'])) {
                    $_SESSION['teller'] = 1;
                } else {
                    $_SESSION['teller']++;
                }
                header('location: profil.php');
            }
            $navn = $_SESSION['navn'];
            $alder = $_SESSION['alder'];
            $epost = $_SESSION['epost'];
            echo "Ditt bruker navn:$navn <br>";
            echo "Din alder:$alder <br>";
            echo "Din epost:$epost <br><br>";
            echo "Du har redigert " .$_SESSION['teller'], " ganger";
        ?>

</body>
</html>