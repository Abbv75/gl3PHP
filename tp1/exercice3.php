<?php
    // version for
    $nbr=10; $sum=0;
    for($i=1; $i<=$nbr; $i++){
        $sum+=$i;
    }
    echo("$sum <br>");
    // version while
    $sum=0;
    while($nbr){
        $sum+=$nbr--;
    }
    echo($sum);
?>
