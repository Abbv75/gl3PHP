<?php
    $res = false;
    if(isset($_GET['idUtilisateur'])){
        require("../connecteDb.php");
        $query = $bdd->prepare("SELECT * FROM utilisateur WHERE id=?");
        $query->execute([
            $_GET['idUtilisateur']
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
    <title>utilisateur</title>

    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <form action="../traitement/utilisateur.php" method="post">
        <?php
            if($res != false){
        ?>
                <input 
                    type="hidden" 
                    name="idUtilisateur" 
                    value="<?php echo($_GET['idUtilisateur']) ?>"
                >
        <?php
            }
        ?>
        <div>
            <label for="nom">Nom</label>
            <input 
                type="text" 
                name="nom" 
                placeholder="Votre nom" 
                id="nom" 
                <?php 
                    echo((!$res) ? "" : "value='".$res['nom']."'"); 
                ?>
                required
            >
        </div>
        <div>
            <label for="login">Login</label>
            <input 
                type="text" 
                name="login" 
                placeholder="Votre login" 
                id="login" 
                <?php 
                    echo((!$res) ? "" : "value='".$res['login']."'"); 
                ?>
                required
            >
        </div>
       
        <div>
            <label for="password">Mot de passe</label>
            <input 
                type="password" 
                name="password" 
                id="password" 
                <?php 
                    echo((!$res) ? "" : "value='".$res['password']."'"); 
                ?>
                required
            >
        </div>
        <div class="btnZone">
            <button type="submit"><?php echo(($res!= false) ? "Modifer" : "Ajouter") ?></button>
            <button type="reset">reset</button>
        </div>
    </form>
</body>
</html>