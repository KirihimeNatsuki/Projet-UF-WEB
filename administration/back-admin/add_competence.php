<?php
  if (isset($_POST['submitA_COMP'])) {
    $rqt->query("INSERT INTO competence (nom_competence, niveau, link_img) VALUES ('', '2', '');");
    $RepAdd = "La compétence a bien été ajoutée !";
    header('Location: ../index.php');
    exit();
  }else {$RepAdd = "Erreur : La compétence n'a pas été ajoutée !";
        exit();}
?>
