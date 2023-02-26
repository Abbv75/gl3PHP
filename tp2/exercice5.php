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
                <td>Numero</td>
                <td>Nom</td>
            </tr>
        </thead>
        <tbody>
            <?php
                $calcule=0;
                $nom=[
                    'Jean', 
                    'Pierre', 
                    'Paul',
                    'Mohamed',
                    'Helene',
                    'Aicha',
                    'Mariam',
                    'Malik',
                    'Issiaka'
                ];
                foreach($nom as $key=>$val){
            ?>
                    <tr>
                        <td><?php echo($key+1); ?></td>
                        <td><?php echo($val); ?></td>
                    </tr>
            <?php
                }
            ?>
        </tbody>        
    </table>

</body>
</html>