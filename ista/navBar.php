<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            position: relative;
        }

        ul {
            display: flex;
            justify-content: center;
            background-color: rgba(0, 0, 0, 0.9);
            position: sticky;
            top: 0;
            left: 0;
        }

        ul li {
            list-style: none;
            margin: 5px;
        }

        ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 1.5rem;
            padding: 10px;
        }

        ul li a:hover {
            color: gray;
        }
    </style>
</head>

<body>
    <ul>
        <li><a href="./etudiant_form.php">Etudiant Form</a></li>
        <li><a href="./etudiant_list.php">Etudiant Liste</a></li>
        <li><a href="./ordinateur_form.php">Ordinateur Form</a></li>
        <li><a href="./ordinateur_list.php">Ordinateur Liste</a></li>
        <li><a href="./utilisateur_form.php">User Form</a></li>
        <li><a href="./utulisateur_list.php">User Liste</a></li>
    </ul>
</body>

</html>