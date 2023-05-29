<?php
require("../connecteDb.php");

if (isset($_GET['idEtudiant'])) {
    $query = $bdd->prepare("DELETE FROM etudiant WHERE ide=?");
    $query->execute([$_GET['idEtudiant']]);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des Etudiants</title>

    <link rel="stylesheet" href="../css/list.css">
    <link rel="stylesheet" href="../../fontawesome/css/all.css">
</head>

<body>
    <?php
        include("../head.php");
    ?>

    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <th>#</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Classe</th>
            <th>Telephone</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php
            $query = $bdd->query('SELECT * FROM etudiant ORDER BY nom');
            $i = 0;
            while ($res = $query->fetch()) {
                ?>
                <tr>
                    <td>
                        <?php echo ($i++) ?>
                    </td>
                    <td>
                        <?php echo ($res['nom']) ?>
                    </td>
                    <td>
                        <?php echo ($res['prenom']) ?>
                    </td>
                    <td>
                        <?php echo ($res['classe']) ?>
                    </td>
                    <td>
                        <?php echo ($res['telephone']) ?>
                    </td>
                    <td>
                        <a href="../form/etudiant.php?idEtudiant=<?php echo ($res['ide']) ?>">
                            <i class="fa fa-edit"></i>
                        </a>
                        <a href="etudiant.php?idEtudiant=<?php echo ($res['ide']) ?>">
                            <i class="fa fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    <?php
        include("../foot.php");
    ?>
</body>

</html>