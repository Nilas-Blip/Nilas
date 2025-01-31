<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
</head>
<body>
    <?php
    $sporsmalene = array(
        "Hva heter hovedstaten i Norge?"=>"Oslo",
        "Hvor mange kontineter finnes det på jorden? (skriv svaret i tall)"=>"7",
        "Hva heter verdens største hav?"=>"Stillehavet",
        "Hva er 5 + 7? (skriv svaret i tall)"=>"12",
        "Hvilket dyr er kjent som kongens dyr?"=>"Løve",
        "Hva heter planeten nærmest solen?"=>"Merkur",
        "Hvilken farge har trærene om våren?"=>"Grønn",
        "Hvilke språk snakker de fleste i Spania"=>"Spansk",
        "Hvor mange dager er det i et døgn?(skriv svaret i tall)"=>"24",
        "Hva er 2 x 6?(skriv svaret i tall)"=>"12"
    );
    $poeng = 0;
    echo "<h1>Velkommen til Nilas sin Quiz<h1>";

    foreach($sporsmalene as $sporsmal=>$riktigdvst){
        echo $sporsmal;
    }
    ?>
    $sporsmal
</body>
</html>