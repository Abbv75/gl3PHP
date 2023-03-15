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
    <table >
        <thead>
            <th>Id</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Classe</th>
            <th>Telephone</th>
        </thead>
        <tbody>
            <?php
                require("../connecteDb.php");
                $query = $bdd->query('SELECT * FROM etudiant ORDER BY nom');
                while($res = $query->fetch()){
            ?>
                    <tr>
                        <td>
                            <?php echo($res['ide']) ?>
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
                    </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</body>
</html>