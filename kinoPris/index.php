<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kino pris</title>
</head>
<body>
    <form action="rabatter.php" method="POST">
        Skriv inn antall biletter du vil bestille
        <input type="number" min="1" required id="biletter"></input>
        <button type="submit">Send inn</button>
    </form>
</body>
</html>