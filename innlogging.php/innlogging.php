<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inlogging</title>
</head>
<body>

    <?php
    // Lager en session
    session_start();
    // Arrayen inneholder bruker navn og passord for hver bruker
    $users = array(
        //Her er "Staale" brukernavnet og 123 er passordet
        'Staale' => '123'
        'Nilas' => 'abc'
    )
    //
    if ($_SERVER ["REQUEST_METHOD"]== "POST"){
        $_SESSION ['username'];
        exit();
        } else {
            echo "Du har skrevet feil bruker navn eller passord";
        }
    ?>
    <label for="username">Brukernavn</label>
    <input type="text" id="username" name="username" required>


</body>
</html>