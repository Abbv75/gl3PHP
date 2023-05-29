<?php
    $res = false;
    if(isset($_GET['idOrdinateur'])){
        require("../connecteDb.php");
        $query = $bdd->prepare("SELECT * FROM ordinateur WHERE id=?");
        $query->execute([
            $_GET['idOrdinateur']
        ]);
        $res = $query->fetch();
    }
    
?>

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
    <form action="../traitement/ordinateur.php" method="post">
        <?php
            if($res != false){
        ?>
                <input 
                    type="hidden" 
                    name="idOrdinateur" 
                    value="<?php echo($_GET['idOrdinateur']) ?>"
                >
        <?php
            }
        ?>
        <div>
            <label for="nom">Marque</label>
            <input 
                type="text" 
                name="marque" 
                placeholder="Saisissez la marque" 
                id="marque" 
                <?php 
                    echo((!$res) ? "" : "value='".$res['marque']."'"); 
                ?>
                required
            >
        </div>
        <div>
            <label for="login">Couleur</label>
            <input 
                type="text" 
                name="couleur" 
                placeholder="Votre couleur" 
                id="couleur" 
                <?php 
                    echo((!$res) ? "" : "value='".$res['couleur']."'"); 
                ?>
                required
            >
        </div>
       
        <div>
            <label for="password">Nombre de ram</label>
            <input 
                type="number" 
                name="ram" 
                id="ram" 
                <?php 
                    echo((!$res) ? "" : "value='".$res['ram']."'"); 
                ?>
                required
            >
        </div>
        
        <div>
            <label for="password">Stockage</label>
            <input 
                type="number" 
                name="disque" 
                id="disque" 
                <?php 
                    echo((!$res) ? "" : "value='".$res['disque']."'"); 
                ?>
                required
            >
        </div>

        <div>
            <label for="classe">Proprietaire</label>

            <select name="ide" id="ide" required>
                <?php
                    $query = $bdd->query("SELECT * FROM etudiant ORDER BY nom");
                    while($resTmp = $query->fetch()){
                ?>
                        <option 
                            value="<?php echo($resTmp['ide']) ?>" 
                            <?php
                                if($res != false){
                                    echo(($resTmp['ide'] != $res['ide']) ? "" : "selected");
                                }
                            ?>
                        >
                            <?php echo($resTmp['nom']) ?>
                        </option>
                <?php
                    }
                ?>
            </select>
        </div>

        <div class="btnZone">
            <button type="submit"><?php echo(($res!= false) ? "Modifer" : "Ajouter") ?></button>
            <button type="reset">reset</button>
        </div>
    </form>
</body>
</html>