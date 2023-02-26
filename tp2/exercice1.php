<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $tab=array(0,1,2,3,4,5,6,7,8,9);
    ?>
    <table border="1">
        <tr>
            <?php
                foreach($tab as $e){
                    echo "<td>$e</td>";
                }  
            ?>
        </tr>
        
    </table>
    <?php
        $min=$max=$tab[0];
        $sum=0;
        foreach($tab as $e){
            $min=($min>$e)?$e:$min;
            $max=($ax<$e)?$e:$max;
            $sum+=$e;
        } 
        echo("min: $min<br>max: $max<br>avg: ".$sum/sizeof($tab)); 
    ?>
</body>
</html>