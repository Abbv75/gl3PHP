<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../css/list.css">
</head>
<body>
    <table style="border: 1px solid; border-collapse: collapse;">
        <thead>
            <th>Num</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Classe</th>
            <th>Telephone</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php
                require("../connecteDb.php");
                $query = $bdd->query('SELECT * FROM etudiant ORDER BY nom');
                $i=0;
                while($res = $query->fetch()){
            ?>
                    <tr>
                        <td>
                            <?php echo($i++) ?>
                        </td>
                        <td>
                            <?php echo($res['nom']) ?>
                        </td>
                        <td>
                            <?php echo($res['prenom']) ?>
                        </td>
                        <td>
                            <?php echo($res['classe']) ?>
                        </td>
                        <td>
                            <?php echo($res['telephone']) ?>
                        </td>
                        <td>

                        </td>
                    </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</body>
</html>