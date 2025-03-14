<?php 
include 'sjekkOmInnlogget.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['RegNr'])) {
    $RegNr = ($_POST['RegNr']);

    $sql_slett = "DELETE FROM biler WHERE RegNr = :RegNr";
    $stmt = $conn->prepare($sql_slett);
    $stmt->bindParam(':RegNr', $RegNr, PDO::PARAM_STR);

    if ($stmt->execute()) {
        echo "Bilen har blitt slettet.";
    } else {
        echo "Feil ved sletting.";
    }
}

header("Location: bilregister.php");
exit();