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
                <td>
                    
                </td>
                <td>
                    FCFA
                </td>
                <td>
                    EURO
                </td>
            </tr>
        </thead>
        <tbody>
            <?php
                for($i=0; $i<10; $i++){
                    $nbr[]=rand(1, 60000);
                }

                $sum=0;
                foreach($nbr as $val){
                    $sum+=$val;
            ?>
                    <tr>
                        <td></td>
                        <td><?php echo($val) ?></td>
                        <td><?php echo($val/655.5)?></td>
                    </tr>
            <?php
                }
            ?>
            <tr>
                <td>Total</td>
                <td><?php echo($sum)?></td>
                <td><?php echo($sum/655.5)?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>