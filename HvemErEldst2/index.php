<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hvem er eldst</title>
</head>
<body>
    
    <form action="" method="GET">
    <input type="number" name="kari" placeholder="kari">
    <input type="number" name="henrik" placeholder="henrik">
    <input type="submit">
    </form>
    
    <?php
    $kari = 0;
    $henrik = 0;

    $kari = $_GET['kari'];
    $henrik = $_GET['henrik'];

    if ($kari > $henrik) {
        echo "Kari er eldst";
    } elseif ($henrik > $kari) {
        echo "Henrik er eldst";
    } else {
        echo "De er like gamle";
    }
    ?>
</body>
</html>