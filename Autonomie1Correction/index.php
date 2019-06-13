<?php

    //j'active la gestion et l'affichage des erreurs parce que je suis en dev.
    //en prod je ne fais pas ça !!
    ini_set('error_reporting',E_ALL);
    ini_set('display_errors', TRUE);

    session_start();
    $connected = isset($_SESSION['user_name']);

    require_once('db.php');
    //Ici on va gérer les différents formulaires
    if(isset($_POST['submit'])){
        switch($_POST['submit']) {
            case 'login' :
                //il faut logger l'utilisateur
                //on dispose de l'id de l'utilisateur mais pas de son prenom
                $rqtUser = "SELECT * FROM utilisateur WHERE id_utilisateur = ? ";
                try {
                    $stmt = $pdo->prepare($rqtUser);
                    $stmt->execute([$_POST['user_id']]);
                    $prenom = $stmt->fetch()[1];
                    $_SESSION['user_name'] = $prenom;
                    $_SESSION['user_id'] = $_POST['user_id'];
                    $connected = TRUE;
                } catch (Exception $e){
                    $e->getMessage();
                }
                break;

        }

    }
?>
<html>
  <head>
      <title>Un titre c'est cool</title>
  </head>
  <body>
<?php
    //Si aucun utilisateur n'est connecté, on affiche un formulaire de connexion
    if(!$connected) {
        include('auth.php');
    } else{
        echo $_SESSION['user_name'] . " est  connecté(e)";
        //Sinon, on affiche ses compétences, et un formulaire
        include('deco.php');
        include('competence.php');
    }
?>
</body>
</html>
