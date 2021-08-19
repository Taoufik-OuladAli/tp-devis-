<?php

  session_start();
$login = 'taoufik';
$mdp = '$2y$10$MV9auhUTPYQht7JVkRt5SOSzPAGR.NFM/Z3J83lQP9k5NhGbAeFxa';
  
if(isset($_GET['deconnexion'])){
    unset($_SESSION['login']);
    $_SESSION['message'] = ['class' => 'success', 'text' => 'Vous êtes bien Déconnecter'];
}
  if(isset($_POST['login'], $_POST['mdp'])){
      if($_POST['login'] == $login && $_POST['mdp'] == password_verify($_POST['mbp'], $mdp)){
          $_SESSION['login'] = $_POST['login'];
          header('Location: devis.php');
      }else{
        $_SESSION['message'] = ['class' => 'warning', 'text' => 'Identifiants incorrect'];
      }
  }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
<?php
    if(isset($_SESSION['message'])){
        echo '<div class="message ' . $_SESSION['message']['class'] . '">' .  $_SESSION['message']['text'] . '</div>';
       unset($_SESSION['message']);
    }
     
?>
    <form action="connex.php" method="post">
        <div>
          <label for="login"> Nom utilisateur</label> <br>
          <input type="text" name="login" id="login">
        </div>
        <div>
          <label for="mdp">mot de passe</label> <br>
          <input type="password" name="mdp" id="mdp">
        </div>
        <input type="submit" value="Se connecter">


    </form>
</body>
</html>