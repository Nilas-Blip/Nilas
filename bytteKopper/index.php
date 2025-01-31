<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bytte Kopper</title>
</head>
<body>
    <?php 
    // Gir variabelene en verdi
    $kopp1 = 1;
    $kopp2 = 2;
    $bytteKopp = 0;
    // Skriver ut verdien i koppene 
    echo "Før byttet:<br>kopp1 inneholder:$kopp1 <br>kopp2 inneholder:$kopp2 <br>";
    // Bytter innhold i koppene
    $bytteKopp = $kopp1;
    $kopp1 = $kopp2; 
    $kopp2 = $bytteKopp;
    // Skriver ut resultatet 
    echo "etter byttet:<br>kopp1 inneholder:$kopp1 <br>kopp2 inneholder:$kopp2 <br>";
    ?>
</body>
</html>