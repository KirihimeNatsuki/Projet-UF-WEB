<?php
if(!isset($_SESSION['id'])) {session_start();}
if(!isset($_SESSION['id'])){?>
<meta http-equiv="refresh" content="0;URL=connexion.php">
<?php }else{ ?>
<html>
<head>
  <?php require_once('head_administration.php'); ?>
  <?php require_once('back-admin/bdd_connexion.php'); ?>
  <?php require_once('back-admin/links.php'); ?>
</head>
<body>
  <main>
    <div class="add_Competence">
    <div class="form">
      <form action="back-admin/add_Competence.php" method="POST">
        <label for="add_Comp">Ajouter une compétence</label>
        <input type="text" name="comp" placeholder="Nom compétence" required>
        <select name="niveau">
          <option>
         <option value="1">1 (Débutant)
         <option value="2">2 (Apprenti)
         <option value="3">3 (Intermédiaire)
         <option value="4">4 (Confirmé)
         <option value="5">5 (Expert)
        </select>
        <input type="hidden" name="MAX_FILE_SIZE" value="120000" />
        <input type="file"  accept="image/png" name="img_Competence"></input>
        <input type="submit" name="submitA_COMP" value="Valider">
      </form>
    </div>
    <h5><?php if(isset($RepAdd)){echo($RepAdd);}?></h5>
    </div>
    <div class="del_Competence">
    <div class="form">
    <form action="back-admin/del_Competence.php" method="POST">
    <label for="del_Comp">Supprimer une compétence</label>
    <select name="id_comp">
      <option>
    <?php
    $rqt = $db->prepare('SELECT * FROM competence');
    $rqt->execute();
    while($data = $rqt->fetch()){
    echo "<option='" . $data['id_comp']  . "'>" . $data[comp] . "</option>";
    }
    ?>
    </select>
    <input type="submit" name="submitD_COMP" value="Valider">
    </form>
    </div>
    <h5><?php if(isset($RepDel)){echo($RepDel);}?></h5>
    </div>

    <div class="modif_Competence">
    <div class="form">
      <form action="back-admin/modif_Competence.php" method="POST">
        <select name="id_Comp">
          <option>
            <?php
            $rqt = $db->prepare('SELECT * FROM competence');
            $rqt->execute();
            while($data = $rqt->fetch()){
              echo "<option='" . $data['id_comp']  . "'>" . $data[comp] . "</option>";
            }
            ?>
          </select>
          <input type="text" name="newName" placeholder="Nom de la compétence">
          <select name="niveau">
            <option>
          <option value="1">1 (Débutant)
          <option value="2">2 (Apprenti)
          <option value="3">3 (Intermédiaire)
          <option value="4">4 (Confirmé)
          <option value="5">5 (Expert)
          </select>
          <input type="hidden" name="MAX_FILE_SIZE" value="120000" />
          <input type="file"  accept="image/png" name="img_Competence"></input>
          <input type="submit" name="submitMd_COMP" value="Valider">
        </form>
    </div>
    <h5><?php if(isset($RepModif)){echo($RepModif);}?></h5>
    </div>
  </main>
</body>
</html>
<?php } ?>
