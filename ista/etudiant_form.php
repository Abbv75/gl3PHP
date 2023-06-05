<?php
require 'connexion.php';
// include 'navBar.php';
if (isset($_POST['enregistrer'])) {
    if (isset($_POST['nom'], $_POST['prenom'], $_POST['classe'], $_POST['telephone']));
    $req = $bd->prepare('insert into etudiant(nom,prenom,classe,telephone) values(?,?,?,?)');
    $req->bindValue(1, $_POST['nom']);
    $req->bindValue(2, $_POST['prenom']);
    $req->bindValue(3, $_POST['classe']);
    $req->bindValue(4, $_POST['telephone']);
    $req->execute();
    header('Location:etudiant_list.php');
}

// EDITION
if (isset($_GET['idm'])) {
    $req = $bd->query('select * from etudiant where ide=' . $_GET['idm']);
    if ($ligne = $req->fetch()) {
        $_POST['ide'] = $ligne['ide'];
        $_POST['nom'] = $ligne['nom'];
        $_POST['prenom'] = $ligne['prenom'];
        $_POST['classe'] = $ligne['classe'];
        $_POST['telephone'] = $ligne['telephone'];
    }
}
//MODIFICATION
if (isset($_POST['modifier'])) {
    if (isset($_POST['nom'], $_POST['prenom'], $_POST['classe'], $_POST['telephone']));
    $req = $bd->prepare('update etudiant set nom=?, prenom=?, classe=?, telephone=? where ide=?');
    $req->bindValue(1, $_POST['nom']);
    $req->bindValue(2, $_POST['prenom']);
    $req->bindValue(3, $_POST['classe']);
    $req->bindValue(4, $_POST['telephone']);
    $req->bindValue(5, $_POST['ide']);
    $req->execute();
    header('Location:etudiant_list.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<?php include 'head.php' ?>

<body class="nav-md">
    <?php include 'header.php' ?>
    <form action="etudiant_form.php" method="post">
        <div>
            <label for="">Nom:</label>
            <input type="text" name="nom" value="<?php if (isset($_POST['nom'])) echo $_POST['nom'] ?>">
        </div>
        <div>
            <label for="">Prenom:</label>
            <input type="text" name="prenom" value="<?php if (isset($_POST['prenom'])) echo $_POST['prenom'] ?>">
        </div>
        <div>
            <label for="">Classe:</label>
            <select name="classe" id="">
                <option><?php if (isset($_POST['classe'])) echo $_POST['classe'] ?></option>
                <option value="GL3">GL3</option>
                <option value="ISR">ISR</option>
                <option value="FDPRI">FDPRI</option>
            </select>
        </div>
        <div>
            <label for="">Telephone</label>
            <input type="text" name="telephone" value="<?php if (isset($_POST['telephone'])) echo $_POST['telephone'] ?>">
        </div>

        <?php if (isset($_GET['idm'])) { ?>
            <div>
                <label for="">&nbsp;</label>
                <input type="hidden" name="ide" value="<?php if (isset($_POST['ide'])) echo $_POST['ide'] ?>">
                <input type="submit" value="Modifier" name="modifier">
            </div>
        <?php } else { ?>
            <div>
                <label for="">&nbsp;</label>
                <input type="submit" value="Enregistrer" name="enregistrer">
            </div>
        <?php } ?>
    </form>
    <?php include 'foot.php'; ?>
</body>

</html>