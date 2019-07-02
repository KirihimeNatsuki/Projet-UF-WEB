<?php
if(!isset($_SESSION['id'])) {session_start();}
if(!isset($_SESSION['id'])){?>
<meta http-equiv='refresh' content='0;URL=connexion.php'>;
<?php }else{
require_once('head_administration.php');
include '../Back-end/bdd_connexion.php';
//require_once('back-admin/links.php');?>
     <div class='add_Competence'>
       <form action='index.php' enctype="multipart/form-data" method='POST'>
         <label>Ajouter une compétence</label>
         <input type='text' name='nom_comp' placeholder='Nom compétence' required/>
         <select name='niveau' required>
           <option></option>
          <option value='1'>1 (Débutant)</option>
          <option value='2'>2 (Apprenti)</option>
          <option value='3'>3 (Intermédiaire)</option>
          <option value='4'>4 (Confirmé)</option>
          <option value='5'>5 (Expert)</option>
         </select>
         <input type='hidden' name='MAX_FILE_SIZE' value='300000' />
         <input type='file' name='img_Competence'/>
         <button type='submit' name='submitA_COMP'>Valider</button>
       </form>
     </div>
     <?php
       if (isset($_POST['submitA_COMP'])) {
         if(isset($_POST['nom_comp']) && isset($_POST['niveau'])){
           var_dump($_FILES);
           $name = basename($_FILES['img_Competence']['name']);
           $chemin_file = '../assets/uploaded_files/' . $name;
           $chemin = 'assets/uploaded_files/' . $name;
           move_uploaded_file($_FILES['img_Competence']['tmp_name'], $chemin_file);
           $nomComp = $_POST['nom_comp'];
           $niv = $_POST['niveau'];
           $rqt = $db->prepare("INSERT INTO competence (nom_competence, niveau, link_img) VALUES (?, ?, ?);");
           if($rqt->execute(array($nomComp,$niv,$chemin))){
           $Rep = "La compétence a bien été ajoutée !";
           header('Location: index.php');
           exit();
         }else {$Rep = "Erreur : La compétence n'a pas été ajoutée !";}
       }
     }
     ?>
     <?php if(isset($Rep)){echo "$Rep";}?>
     <div class='del_Competence'>
     <div class='form'>
     <form action='back-admin/del_competence.php' method='POST'>
     <label>Supprimer une compétence</label>
     <select name='id_SupprCompetence'>
       <?php $ID = $db->prepare('SELECT * FROM competence');
       $ID->execute();
       while($data = $ID->fetch()) {
                echo "<option value='" . $data['id_competence'] . "'>" . $data['nom_competence'] . "</option>";
       }?>
     </select>
     <input type='submit' name='submitD_COMP' value='Valider'/>
     </form>
     </div>
     </div>

     <div class='modif_Competence'>
       <form action='index.php' enctype="multipart/form-data" method='POST'>
         <select name='id_Mdcompetence' required>
            <?php  $ID = $db->prepare('SELECT * FROM competence');
            $ID->execute();
            while($data = $ID->fetch()){
               echo "<option value='" . $data['id_competence'] . "'>" . $data['nom_competence'] . "</option>";
              }?>
           </select>
           <input type='text' name='new_nom_competence' placeholder='Nom de la compétence' required/>
           <select name='new_niveau' required>
                <option></option>
               <option value='1'>1 (Débutant)</option>
               <option value='2'>2 (Apprenti)</option>
               <option value='3'>3 (Intermédiaire)</option>
               <option value='4'>4 (Confirmé)</option>
               <option value='5'>5 (Expert)</option>
           </select>
           <input type='hidden' name='MAX_FILE_SIZE' value='300000' />
           <input type='file' name='new_img_Competence'/>
           <button type='submit' name='submitMd_COMP'>Valider</button>
         </form>
     </div>
     <?php
       if (isset($_POST['submitMd_COMP'])) {
          $new_id = $_POST['id_Mdcompetence'];
          $new_name = $_POST['new_nom_competence'];
          $Nniveau = $_POST['new_niveau'];
            if (!isset($_FILES)) {
              $rqt = $db->prepare("UPDATE competence SET nom_competence = ?, niveau = ? WHERE id_competence = ?");
              $rqt->execute(array($new_id,$new_name,$Nniveau));
              } else {
                var_dump($_FILES);
                $name = basename($_FILES['new_img_Competence']['name']);
                $chemin_file = '../assets/uploaded_files/' . $name;
                $chemin = 'assets/uploaded_files/' . $name;
                if (move_uploaded_file($_FILES['new_img_Competence']['tmp_name'], $chemin_file)) {
                  $rqt = $db->prepare("UPDATE competence SET nom_competence = ?, niveau = ?, link_img = ? WHERE id_competence = ?");
                  $rqt->execute(array($new_name,$Nniveau,$chemin,$new_id));
                  }
                }
              header('Location: index.php');
              exit();
            }
     ?>
<?php  }?>
