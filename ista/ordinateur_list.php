<?php
require 'connexion.php';
// include 'navBar.php';
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
                <th>Marque</th>
                <th>Couleur</th>
                <th>Ram</th>
                <th>Disque</th>
                <th>Etudiant</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $req = $bd->query('SELECT * FROM ordinateur left join etudiant on ordinateur.ide=etudiant.ide');
            $i = 1;
            while ($ligne = $req->fetch()) {
                echo '<tr>';
                echo '<td>' . $i . '</td>';
                echo '<td>' . $ligne['marque'] . '</td>';
                echo '<td>' . $ligne['couleur'] . '</td>';
                echo '<td>' . $ligne['ram'] . '</td>';
                echo '<td>' . $ligne['disque'] . '</td>';
                echo '<td>' . $ligne['nom'] . '</td>';
                echo '<td>
                    <a href="ordinateur_form.php?idm=' . $ligne['idord'] . '">Editer</a>
                    <a href="ordinateur_list.php?ids=' . $ligne['idord'] . '">Supprimer</a>
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