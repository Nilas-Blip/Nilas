<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Min side</title>
</head>
<body>
    <h1>Velkommen til Nilas sin min side</h1>

    <form action="" method="POST">
        <label for="navn">Brukernavn:</label>
        <input type="text" id="navn" name="navn" required><br>

        <label for="alder">Alder:</label>
        <input type="number" id="alder" name="alder" min="1" max="120" required><br>

        <label for="epost">Epost:</label>
        <input type="text" id="epost" name="epost" required><br>

        <button type="sumbit">send inn</button>
    </form>
    <?php
    session_start();
        if(!isset($_SESSION['navn'])){
            $_SESSION['navn'] = "Nilas";
            $_SESSION['alder'] = "17";
            $_SESSION['epost'] = "nilas@email.com";
        }
        if(isset($_POST['navn'])){
            $_SESSION['navn'] = $_POST['navn'];
            $_SESSION['alder'] = $_POST['alder'];
            $_SESSION['epost'] = $_POST['epost'];
            
            header('location: profil.php');
        }

    //$navn = $_SESSION['navn'];
    //echo "hei $navn"
    ?>


</body>
</html>