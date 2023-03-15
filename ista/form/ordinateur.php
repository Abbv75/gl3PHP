<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordinateur</title>

    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <form action="../list/ordinateur.php" method="post">
        <div>
            <label for="marque">Marque</label>
            <input type="text" name="marque" placeholder="Votre nom" id="marque">
        </div>
        <div>
            <label for="couleur">Couleur</label>
            <input type="text" name="couleur" placeholder="Votre prenom" id="couleur">
        </div>
        <div>
            <label for="ram">Ram</label>
            <input type="text" name="ram" id="ram">
        </div>
        <div>
            <label for="disque">Disque</label>
            <input type="text" name="disque" placeholder="le numero de telephone" id="disque">
        </div>
        <div>
            <label for="etudiant">Etudiant</label>
            <select name="etudiant" id="etudiant">
                <?php
                    require("../connecteDb.php");
                    $query = $bdd->query('SELECT * FROM etudiant ORDER BY nom');
                    while($res = $query->fetch()){
                ?>
                        <option value="<?php echo($res['ide']) ?>"><?php echo($res['nom']. "--". $res['prenom']) ?></option>
                <?php
                    }
                ?>

            </select>
        </div>
        <div class="btnZone">
            <button type="submit">Valider</button>
            <button type="reset">reset</button>
        </div>
    </form>
</body>
</html>