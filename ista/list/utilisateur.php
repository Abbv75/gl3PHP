<?php
require("../connecteDb.php");

if (isset($_GET['idUtilisateur'])) {
    $query = $bdd->prepare("DELETE FROM utilisateur WHERE id=?");
    $query->execute([$_GET['idUtilisateur']]);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilisateur</title>

    <link rel="stylesheet" href="../css/list.css">
    <link rel="stylesheet" href="../../fontawesome/css/all.css">
    <script src="../js/jquery-3.6.1.min.js"></script>
</head>

<body>
    <div class="ajouterZone">
        <a href="../form/utilisateur.php" class="ajouterBtn">
            +
        </a>
    </div>
    <table>
        <thead>
            <th>#</th>
            <th>Nom</th>
            <th>Login</th>
            <th>Password</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php
            $query = $bdd->query('SELECT * FROM utilisateur ORDER BY nom');
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
                        <?php echo ($res['login']) ?>
                    </td>
                    <td class="passField off" title="Cliquez pour changer la visibiliter">
                        <?php echo ($res['password']) ?>
                    </td>
                    <td>
                        <a href="../form/utilisateur.php?idUtilisateur=<?php echo ($res['id']) ?>">
                            <i class="fa fa-edit"></i>
                        </a>
                        <a href="utilisateur.php?idUtilisateur=<?php echo ($res['id']) ?>">
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

<script>
    $(".passField").click(function () { 
        $(this).toggleClass("off");            
    });
</script>

</html>