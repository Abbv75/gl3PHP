<?php
require 'connexion.php';
// include 'navBar.php';
if (isset($_POST['enregistrer'])) {
    if (isset($_POST['nom'], $_POST['login'], $_POST['password']));
    $req = $bd->prepare('insert into utilisateur(nom,login,password) values(?,?,?)');
    $req->bindValue(1, $_POST['nom']);
    $req->bindValue(2, $_POST['login']);
    $req->bindValue(3, $_POST['password']);
    $req->execute();
    header('Location: utulisateur_list.php');
}

//EDITION
if (isset($_GET['idm'])) {
    $req = $bd->query('SELECT * FROM utilisateur where id=' . $_GET['idm']);
    if ($ligne = $req->fetch()) {
        $_POST['id'] = $ligne['id'];
        $_POST['nom'] = $ligne['nom'];
        $_POST['login'] = $ligne['login'];
        $_POST['password'] = $ligne['password'];
    }
}
//MODIFICATION
if (isset($_POST['modifier'])) {
    if (isset($_POST['nom'], $_POST['login'], $_POST['password']));
    $req = $bd->prepare('update utilisateur set nom=?, login=?, password=? where id=?');
    $req->bindValue(1, $_POST['nom']);
    $req->bindValue(2, $_POST['login']);
    $req->bindValue(3, $_POST['password']);
    $req->bindValue(4, $_POST['id']);
    $req->execute();
    header('Location: utulisateur_list.php');
}
?>


<!DOCTYPE html>
<html lang="en">

<?php include 'head.php' ?>

<body class="nav-md">
    <?php include 'header.php' ?>
    <fieldset>
        <legend>Utilisateur</legend>
        <form action="utilisateur_form.php" method="post">
            <div>
                <label for="">Nom:</label>
                <input type="text" name="nom" value="<?php if (isset($_POST['nom'])) echo $_POST['nom'] ?>">
            </div>
            <div>
                <label for="">Login:</label>
                <input type=" text" name="login" value="<?php if (isset($_POST['login'])) echo $_POST['login'] ?>">
            </div>
            <div>
                <label for="">Password:</label>
                <input type="password" name="password" value="<?php if (isset($_POST['password'])) echo $_POST['password'] ?>">
            </div>
            <?php if (isset($_GET['idm'])) { ?>
                <div>
                    <label for="">&nbsp;</label>
                    <input type="hidden" name="id" value="<?php if (isset($_POST['id'])) echo $_POST['id'] ?>">
                    <input type="submit" value="Modifier" name="modifier">
                </div>
            <?php } else { ?>
                <div>
                    <label for="">&nbsp;</label>
                    <input type="submit" value="Enregistrer" name="enregistrer">
                </div>
            <?php } ?>
        </form>
    </fieldset>
    <?php include 'foot.php' ?>
</body>

</html>