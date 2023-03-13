<?php
    try{
        $bdd = new PDO("mysql:host=localhost;dbname=istadb", 'root', '');
    }
    catch(Exception $e){
        die($e->getMessage());
    }
?>