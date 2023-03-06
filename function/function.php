<?php
    function addition($a, $b){
        return $a+$b;
    }
    function soustraction($a, $b){
        return $a-$b;
    }
    function multiplication($a, $b){
        return $a*$b;
    }
    function division($a, $b){
        return (!$b) ? "Le diviseur est zero" : $a/$b;
    }
    function modulo($a, $b){
        return (!$b) ? "Division impossible donc pas de reste" : $a%$b;
    }
?> 