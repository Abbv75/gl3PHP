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
                    Facture
                </td>
                <td>
                    Montant
                </td>
            </tr>
        </thead>
        <tbody>
            <?php
                $fact= array(
                    "fact1" => 12000,
                    "fact2" => 27000,
                    "fact3" => 11500,
                    "fact4" => 65000,
                    "fact5" => 18500,
                    "fact6" => 35000,
                    "fact7" => 42800,
                    "fact8" => 13000,
                    "fact9" => 57000,
                    "fact10" => 60000
                );
                $sum=0;
                foreach($fact as $key=>$val){
                    $sum+=$val;
            ?>
                    <tr>
                        <td><?php echo($key) ?></td>
                        <td><?php echo($val)?></td>
                    </tr>
            <?php
                }
            ?>
            <tr>
                <td>Total</td>
                <td><?php echo($sum)?></td>
            </tr>
            <tr>
                <td>Moyenne</td>
                <td><?php echo($sum/sizeof($fact))?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>