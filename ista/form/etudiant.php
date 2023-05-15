<?php
    $res = false;
    if(isset($_GET['idEtudiant'])){
        require("../connecteDb.php");
        $query = $bdd->prepare("SELECT * FROM etudiant WHERE ide=?");
        $query->execute([
            $_GET['idEtudiant']
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
    <title>Document</title>

    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <form action="../traitement/etudiant.php" method="post">
        <?php
            if($res != false){
        ?>
                <input 
                    type="hidden" 
                    name="idEtudiant" 
                    value="<?php echo($_GET['idEtudiant']) ?>"
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
            <label for="prenom">prenom</label>
            <input 
                type="text" 
                name="prenom" 
                placeholder="Votre prenom" 
                id="prenom" 
                <?php 
                    echo((!$res) ? "" : "value='".$res['prenom']."'"); 
                ?>
                required
            >
        </div>
        <div>
            <label for="classe">Classe</label>

            <select name="classe" id="classe" required>
                <option 
                    value="Gl3" 
                    <?php
                        if($res != false){
                            echo(($res['classe'] != "Gl3") ? "" : "selected");
                        }
                    ?>
                >Gl3</option>
                <option 
                    value="ISR"
                    <?php
                        if($res != false){
                            echo(($res['classe'] != "ISR") ? "" : "selected");
                        }
                    ?>
                >ISR</option>
                <option 
                    value="Miage"
                    <?php
                        if($res != false){
                            echo(($res['classe'] != "Miage") ? "" : "selected");
                        }
                    ?>
                >Miage</option>
            </select>
        </div>
        <div>
            <label for="telephone">Telephone</label>
            <input 
                type="text" 
                name="telephone" 
                placeholder="le numero de telephone" 
                id="telephone" 
                <?php 
                    echo((!$res) ? "" : "value='".$res['telephone']."'"); 
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