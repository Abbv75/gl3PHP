<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1">
        <thead>
            <tr>
                <td>#</td>
                <td>note</td>
            </tr>
        </thead>
        <tbody>
            <?php
                $calcule=0;
                for($i=0; $i<10; $i++){
            ?>
                    <tr>
                        <td><?php echo($i+1); ?></td>
                        <td><?php echo($note[]=rand(1, 60000)); ?></td>
                    </tr>
            <?php
                    $calcule+=$note[$i];
                }
                $calcule/=$i;
                $nbr=0;
                
                foreach($note as $not_tmp){
                    ($not_tmp > $calcule) ? $nbr++ : false;
                }
            ?>
        </tbody>        
    </table>
    <p><?php echo($nbr) ?> eleves sont au dessus de la moyenne</p>

</body>
</html>