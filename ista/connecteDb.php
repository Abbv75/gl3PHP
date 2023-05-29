<?php
    try{
        $bdd = new PDO("mysql:host=localhost;dbname=istabd", 'djessyaroma', 'djessyaroma1234');
    }
    catch(Exception $e){
        die($e->getMessage());
    }
?>