<?php
if(!isset($_SESSION['id'])) {session_start();}
  if (isset($_POST['submitD_COMP'])) {
      include 'bdd_connexion.php';
      $id = $_POST['id_SupprCompetence'];
      $rqt = $db->prepare("DELETE FROM competence WHERE id_competence = :id");
      $rqt->execute(['id' => $id]);
      header('Location: ../index.php');
      exit();
  }
?>
