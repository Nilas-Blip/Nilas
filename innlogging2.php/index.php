<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Innlogging2</title>
</head>
<body>
    <form action="login.php" method="post">
        <label for="brukernavn">Brukernavn: </label>
        <input type="text" id="brukernavn" navn="brukernavn" required><br>

        <label for="passord">Passord:</label>
        <input type="password" id="passord" name="passord"><br>

        <button type="submit">Logg inn</button>
    </form>

    <form action="" method="post">
        <button type="submit" name="loggut"></button>
    </form>
</body>
</html>