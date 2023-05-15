<?php
    try{
        require("../connecteDb.php");
        extract($_POST);

        if(!isset($_POST['nom'], $_POST['login'], $_POST['password'])){
            header('Location: ../form/utilisateur.php');
            exit();
        }

        $result = false;

        if(isset($_POST['idUtilisateur'])){
            $query = $bdd->prepare("UPDATE utilisateur SET nom=?, `login`=?, `password`=? WHERE id=?");
            
            $result = $query->execute([
                $nom,
                $login,
                $password,
                $idUtilisateur
            ]);       
        }
        else{
            $query = $bdd->prepare('INSERT INTO utilisateur (nom, `login`, `password`) VALUES (?,?,?)');
            
            $result = $query->execute([
                $nom, 
                $login, 
                $password, 
            ]);
        }

        if($result){
            header('Location: ../list/utilisateur.php');
        }
        else{
            header('Location: ../form/utilisateur.php');
        }
        exit();
    }
    catch(Exception $e){
        header('Location: ../form/utilisateur.php');
    }
?>