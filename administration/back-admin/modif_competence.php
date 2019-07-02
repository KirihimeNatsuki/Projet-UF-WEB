<?php
  if (isset($_POST['submitMd_COMP'])) {
     include '../../Back-end/bdd_connexion.php';
        $new_id = $_POST['id_Mdcompetence'];
        $new_name = $_POST['new_nom_competence'];
        $niveau = $_POST['new_niveau'];
        if (isset($_FILES)) {
          var_dump($_FILES);
          $name = basename($_FILES['new_img_Competence']['name']);
          $chemin_file = '../../assets/uploaded_files/' . $name;
          $chemin = 'assets/uploaded_files/' . $name;
          if (move_uploaded_file($_FILES['new_img_Competence']['tmp_name'], $chemin_file)) {
            $rqt = $bd->prepare("UPDATE competence SET nom_competence = :nom, niveau = :niveau, link_img = :link WHERE id_competence = :id");
            $rqt->execute(array($id,$nom,$niveau,$chemin));
            }
          } else {
            $rqt = $bd->prepare("UPDATE competence SET nom_competence = :nom, niveau = :niveau WHERE id_competence = :id");
            $rqt->execute(array($id,$nom,$niveau));
            }
          header('Location: ../index.php');
          exit();
        }
?>
