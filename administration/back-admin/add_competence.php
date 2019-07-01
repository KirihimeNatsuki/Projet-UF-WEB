<?php
if(!isset($_SESSION['id'])) {session_start();}
  if (isset($_POST['submitA_COMP'])) {
    if(isset($_POST['nom_competence']) && isset($_POST['niveau'])){
      include '../../Back-end/bdd_connexion.php';
      $nomComp = $_POST['nom_competence'];
      $niv = $_POST['niveau'];
      $rqt = $db->prepare("INSERT INTO competence (nom_competence, niveau, link_img) VALUES (?, ?, ?);");
      $rqt->execute(array($nomComp,$niv));
      echo "La compétence a bien été ajoutée !";
      header('Location: ../index.php');
      exit();
    }
  }else {echo "Erreur : La compétence n'a pas été ajoutée !";}
?>
