<?php
    try{
        require("../connecteDb.php");
        extract($_POST);

        if(!isset($_POST['marque'], $_POST['couleur'], $_POST['ram'], $_POST['disque'], $_POST['ide'])){
            header('Location: ../form/etudiant.php');
            exit();
        }

        $result = false;

        if(isset($_POST['idOrdinateur'])){
            $query = $bdd->prepare("UPDATE ordinateur SET marque=?, couleur=?, ram=?, disque=?, ide=? WHERE idord=?");
            
            $result = $query->execute([
                $marque,
                $couleur,
                $ram,
                $disque,
                $ide,
                $idOrdinateur
            ]);       
        }
        else{
            $query = $bdd->prepare('INSERT INTO ordinateur (marque, couleur, ram, disque, ide) VALUES (?,?,?,?,?)');
            
            $result = $query->execute([
                $marque,
                $couleur,
                $ram,
                $disque,
                $ide,
            ]);
        }

        if($result){
            header('Location: ../list/ordinateur.php');
        }
        else{
            header('Location: ../form/ordinateur.php');
        }
        exit();
    }
    catch(Exception $e){
        die($e->getMessage());
        // header('Location: ../form/ordinateur.php');
    }
?>