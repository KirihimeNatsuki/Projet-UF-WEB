<?php
if (isset($_POST['submitMd_COMP']))
  var_dump($_FILES);
  $name = basename($_FILES['img_Competence']['name']);
  $chemin_file = '../../assets/uploaded_files/' . $name;
  $chemin = 'uploaded_files/' . $name;
  move_uploaded_file($_FILES['img_Competence']['tmp_name'], $chemin_file);
  $nomComp = $_POST['nom_comp'];
  $niv = $_POST['niveau'];
  $rqt = $db->prepare("INSERT INTO competence (nom_competence, niveau, link_img) VALUES (?, ?, ?);");
  $rqt->execute(array($nomComp,$niv,$chemin));

?>
