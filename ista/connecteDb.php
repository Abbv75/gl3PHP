<?php
    try{
        $bdd = new PDO("mysql:host=localhost;dbname=istadb", 'djessyaroma', 'djessyaroma1234');
    }
    catch(Exception $e){
        die($e->getMessage());
    }
?>