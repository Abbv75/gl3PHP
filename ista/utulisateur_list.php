<?php
require "connexion.php";
// include 'navBar.php';
if (isset($_GET['ids'])) {
    $bd->query('delete from utilisateur where id=' . $_GET['ids']);
    header('Location: utulisateur_list.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<?php include 'head.php' ?>

<body class="nav-md">
    <?php include 'header.php' ?>
    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>N°</th>
                <th>Nom</th>
                <th>Login</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $req = $bd->query("SELECT * FROM utilisateur");
            $i = 1;
            while ($ligne = $req->fetch()) {
                echo "<tr>";
                echo '<td>' . $i . '</td>';
                echo '<td>' . $ligne['nom'] . '</td>';
                echo '<td>' . $ligne['login'] . '</td>';
                echo '<td> 
            <a href="utilisateur_form.php?idm=' . $ligne['id'] . '">Editer </a>
            <a href="utulisateur_list.php?ids=' . $ligne['id'] . '">Supprimer </a>
            </td>';
                $i++;
                echo "</tr>";
            }


            ?>
        </tbody>

    </table>
    <?php include 'foot.php' ?>
</body>

</html>