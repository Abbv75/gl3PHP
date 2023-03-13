<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../js/jquery-3.6.1.min.js"></script>

    <link rel="stylesheet" href="../css/list.css">
</head>
<body>
    <table>
        <thead>
            <th>Id</th>
            <th>Nom</th>
            <th>Login</th>
            <th>Password</th>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td class="passField off" title="Cliquez pour changer la visibiliter">1</td>
            </tr>
        </tbody>
    </table>

    <script>
        $(".passField").click(function () { 
            $(this).toggleClass("off");            
        });
    </script>
</body>
</html>