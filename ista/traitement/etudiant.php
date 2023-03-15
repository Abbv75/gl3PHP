<?php
    try{
        require("../connecteDb.php");
        extract($_POST);

        if(!isset($_POST['nom'], $_POST['prenom'], $_POST['classe'], $_POST['telephone'])){
            header('Location: ../form/etudiant.html');
            exit();
        }

        $query = $bdd->prepare('INSERT INTO etudiant (nom, prenom, classe, telephone) VALUES (?,?,?,?)');
        
        if(!$query->execute(array($nom, $prenom, $classe, $telephone))){
            header('Location: ../form/etudiant.html');
            exit();
        }

        header('Location: ../list/etudiant.php');
    }
    catch(Exception $e){
        header('Location: ../form/etudiant.html');
    }
?>