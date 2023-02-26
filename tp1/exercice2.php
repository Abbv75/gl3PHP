<?php
    $pt=150;
    $pa=50;
    $nb=10;
    $total_a=$pa*$nb;
    $total_t=$pt*$nb;
    if($total_a>$total_t){
        echo("Armoire a le prux le plus eleve");
    }
    elseif($total_a<$total_t){
        echo("Table a le prux le plus eleve");
    }
    else{
        echo("Elles ont le meme prix");
    }
    
?>