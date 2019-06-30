<?php

if(isset($_POST['connexion'])){
  if (isset($_POST['login']) && isset($_POST['password'])){
    $login = htmlspecialchars($_POST['login']);
    $password = hash('sha256', htmlspecialchars($_POST['password']));
    $rqt = $db->prepare("SELECT * FROM admin WHERE name = ? AND mdp = ?");
    $rqt->execute(array($login, $password));
    $userExists = $rqt->rowCount();
    if($userExists == 1){
      $user = $rqt->fetch();
      $_SESSION['id'] = $user['id'];
      $_SESSION['login'] = $user['name'];
      $Rep="Vous avez réussi à vous connecter, redirection en cours...";?>
      <meta http-equiv="refresh" content="1;index.php" /><?php
    }else{$Rep="Dommage ! Votre nom d'utilisateur ou votre mot de passe est incorrect, réessayez !";}
  }
}
?>
