<?php
  if (isset($_POST['submitD_COMP'])) {
      include 'connectionBDD.php';
      $id = $_POST['id_comp'];
      $rqt->prepare("DELETE FROM competence WHERE id_competence = :id");
      $rqt->execute(['id' => $id]);
      $rqt->query("ALTER TABLE competence DROP id_competence");
      $RepDel = "La compétence a bien été supprimée !";
      header('Location: ../index.php');
      exit();
  }else{$RepAdd = "Erreur : La compétence n'a pas été supprimée !";}
?>
