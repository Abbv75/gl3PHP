<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="../list/etudiant.php" method="post">
        <div>
            <label for="login">Login</label>
            <input type="text" name="login" placeholder="saisissez votre login" id="login">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="saisissez votre password" id="password">
        </div>
        <div class="btnZone">
            <button type="submit">Valider</button>
            <button type="reset">reset</button>
        </div>
    </form>
</body>
</html>