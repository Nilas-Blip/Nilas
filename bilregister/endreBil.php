<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <title>Endre bil</title>
    <link rel="stylesheet" href="1stilark.css">
</head>
<?php 
include 'sjekkOmInnlogget.php';

if (!isset($_GET['RegNr'])) {
    die('RegNr mangler!');
}

$regNr = $_GET['RegNr']; 


$sql = "SELECT * FROM biler WHERE RegNr = :RegNr";
$stmt = $conn->prepare($sql);
$stmt->execute([':RegNr' => $regNr]);
$bil = $stmt->fetch(PDO::FETCH_ASSOC); 

if (!$bil) {
    die('Bilen finnes ikke');
}
?>

<body>

<header>
    <nav>
        <?php include 'meny.php'; ?>
    </nav>
</header>

<main class="main-content">
    <h1>Endre Bil - <?= htmlspecialchars($bil['RegNr']) ?></h1>

    <form method="post" action="oppdaterBil.php">
        <input type="hidden" name="RegNr" value="<?= htmlspecialchars($bil['RegNr']) ?>">
        
        <label for="Type">Biltype:</label>
        <input type="text" id="Type" name="Type" value="<?= htmlspecialchars($bil['Type']) ?>" required>

        <label for="Merke">Merke:</label>
        <input type="text" name="Merke" id="Merke" value="<?= htmlspecialchars($bil['Merke']) ?>" required>

        <label for="Farge">Farge:</label>
        <input type="text" name="Farge" id="Farge" value="<?= htmlspecialchars($bil['Farge']) ?>" required>

        <button type="submit">Lagre endringer</button>
    </form>
</main>

<footer>
    <?php include 'footer.php'; ?>
</footer>

</body>
</html>