<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antall besøk</title>
</head>
<body>
    <h1>Nilas sin på loggings teller</h1>
    <?php
    //starter session
    session_start();
    if (!isset($_SESSION['teller'])) {
        $_SESSION['teller'] = 1;
    } else {
        $_SESSION['teller']++;
    }
    echo "Du har logget på " .$_SESSION['teller'], " ganger";
    ?>
</body>
</html>