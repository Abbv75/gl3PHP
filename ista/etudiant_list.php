<?php
require 'connexion.php';
// include 'navBar.php';

// SUPPRESSION
if (isset($_GET['ids'])) {
    $bd->query('delete from etudiant where ide=' . $_GET['ids']);
    header('Location: etudiant_list.php');
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
                <th>Prenom</th>
                <th>Classe</th>
                <th>Telephone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $req = $bd->query('SELECT * FROM etudiant');
            $i = 1;
            while ($ligne = $req->fetch()) {
                echo '<tr>';
                echo '<td>' . $i . '</td>';
                echo '<td>' . $ligne['nom'] . '</td>';
                echo '<td>' . $ligne['prenom'] . '</td>';
                echo '<td>' . $ligne['classe'] . '</td>';
                echo '<td>' . $ligne['telephone'] . '</td>';
                echo '<td>
                    <a href="etudiant_form.php?idm=' . $ligne['ide'] . '">Editer</a>
                    <a href="etudiant_list.php?ids=' . $ligne['ide'] . '">Supprimer</a>
                </td>';
                $i++;
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
    <?php include 'foot.php' ?>
</body>

</html>