<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tippe spill</title>
</head>
<body>
    
    <h1>Nilas sitt tippe spill :D</h1>
    <form action="" method="GET">
        <label for="tall">Velg ett tall mellom 1 og 10: </label>
        <input type="number" for="tall" name="tall" min="1" max="10" required>
        <button type="submit">Tipp</button><br>
    </form>
    <?php
    session_start();
    if (!isset($_SESSION['teller'])) {
        $_SESSION['teller'] = 1;
    } else {
        $_SESSION['teller']++;
    }

    if (isset($_GET['tall'])) {
        $tall = $_GET['tall'];
        echo "Du tippet $tall<br><br>";
        $randomNumber = random_int(1, 10);
        echo "Tallet var $randomNumber <br>" ;

        if ($tall == $randomNumber){
            echo "Du hadde rett <br>";
            echo "Det tokk deg " .$_SESSION['teller'], " forsøk";
            session_destroy();
        } else{
            echo "Du tokk feil";
        }
    }
    ?>
</body>
</html>