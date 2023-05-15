<?php
    try{
        require("../connecteDb.php");
        extract($_POST);

        if(!isset($_POST['nom'], $_POST['prenom'], $_POST['classe'], $_POST['telephone'])){
            header('Location: ../form/etudiant.php');
            exit();
        }

        $result = false;

        if(isset($_POST['idEtudiant'])){
            $query = $bdd->prepare("UPDATE etudiant SET nom=?, prenom=?, classe=?, telephone=? WHERE ide=?");
            
            $result = $query->execute([
                $nom,
                $prenom,
                $classe,
                $telephone,
                $idEtudiant
            ]);       
        }
        else{
            $query = $bdd->prepare('INSERT INTO etudiant (nom, prenom, classe, telephone) VALUES (?,?,?,?)');
            
            $result = $query->execute([
                $nom, 
                $prenom, 
                $classe, 
                $telephone
            ]);
        }

        if($result){
            header('Location: ../list/etudiant.php');
        }
        else{
            header('Location: ../form/etudiant.php');
        }
        exit();
    }
    catch(Exception $e){
        header('Location: ../form/etudiant.php');
    }
?>