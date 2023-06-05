<?php
  ob_start();
  session_start();
  if(isset($_POST['login'], $_POST['password'])){
    extract($_POST);
    require("connexion.php");
    $query = $bd->prepare("SELECT * FROM utilisateur WHERE `login`=? AND `password`=?");
    $query->execute([
      $login,
      $password
    ]);

    if($res = $query->fetch()){
      $_SESSION['nom'] = $res['nom'];
      header("location:accueil.php");
    }

  }
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Connexion</title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <?php
      if(!$res){
    ?>
        <script>
          alert("<?php echo("Identifiant incorrecte") ?>")
        </script>
    <?php
      }
    ?>
    <div>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="index.php" method="post">
              <h1>Login Form</h1>
              <div>
                <input type="text" class="form-control" placeholder="Votre login" name="login" required />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="votre Password" name="password" required />
              </div>
              <div>
                <button class="btn btn-primary w-100 submit" type="submit">Connexion</button>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
