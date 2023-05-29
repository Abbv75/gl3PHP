<?php
require("../connecteDb.php");

if (isset($_GET['idOrdinateur'])) {
    $query = $bdd->prepare("DELETE FROM ordinateur WHERE idord=?");
    $query->execute([$_GET['idOrdinateur']]);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des Ordinateurs</title>

    <link rel="stylesheet" href="../css/list.css">
    <link rel="stylesheet" href="../../fontawesome/css/all.css">
</head>

<body>
    <div class="ajouterZone">
        <a href="../form/ordinateur.php" class="ajouterBtn">
            +
        </a>
    </div>
    <table>
        <thead>
            <th>#</th>
            <th>Marque</th>
            <th>Couleur</th>
            <th>Ram</th>
            <th>Disque</th>
            <th>Etudiant</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php
            $query = $bdd->query('SELECT * FROM ordinateur, etudiant WHERE ordinateur.ide=etudiant.ide ');
            $i = 0;
            while ($res = $query->fetch()) {
                ?>
                <tr>
                    <td>
                        <?php echo ($i++) ?>
                    </td>
                    <td>
                        <?php echo ($res['marque']) ?>
                    </td>
                    <td>
                        <?php echo ($res['couleur']) ?>
                    </td>
                    <td>
                        <?php echo ($res['ram']) ?>
                    </td>
                    <td>
                        <?php echo ($res['disque']) ?>
                    </td>
                    <td>
                        <?php echo ($res['nom']. " ". $res['prenom']) ?>
                    </td>
                    <td>
                        <a href="../form/ordinateur.php?idOrdinateur=<?php echo ($res['idord']) ?>">
                            <i class="fa fa-edit"></i>
                        </a>
                        <a href="ordinateur.php?idOrdinateur=<?php echo ($res['idord']) ?>">
                            <i class="fa fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>