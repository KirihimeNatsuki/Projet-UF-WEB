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
           $chemin_file = '../../assets/uploaded_files/' . $name;
           $chemin = 'uploaded_files/' . $name;
           move_uploaded_file($_FILES['img_Competence']['tmp_name'], $chemin_file);
           $nomComp = $_POST['nom_comp'];
           $niv = $_POST['niveau'];
           $rqt = $db->prepare("INSERT INTO competence (nom_competence, niveau, link_img) VALUES (?, ?, ?);");
           $rqt->execute(array($nomComp,$niv,$chemin));
           echo "La compétence a bien été ajoutée !";
           header('Location: index.php');
           exit();
         }
       }else {echo "Erreur : La compétence n'a pas été ajoutée !";}
     ?>

     <div class='del_Competence'>
     <div class='form'>
     <form action='back-admin/del_competence.php' method='POST'>
     <label>Supprimer une compétence</label>
     <select name='id_SupprCompetence'>
       <option>
       <?php $rqt = $db->prepare('SELECT * FROM competence');
       $rqt->execute();
       while($data = $rqt->fetch(PDO::FETCH_ASSOC)){
         echo "<option='" . $data['id_competence']  . "'>" . $data['nom_competence'] . "</option>";
       }?>
     </select>
     <input type='submit' name='submitD_COMP' value='Valider'/>
     </form>
     </div>
     </div>

     <div class='modif_Competence'>
     <div class='form'>
       <form action='back-admin/modif_Competence.php' method='POST'>
         <select name='id_competence'>
           <option>
            <?php  $rqt = $db->prepare('SELECT * FROM competence');
            $rqt->execute();
            while($data = $rqt->fetch(PDO::FETCH_ASSOC)){
               echo "<option='" . $data['id_competence'] . "'>" . $data['nom_competence'] . "</option>";
              }?>
           </select>
           <input type='text' name='newName' placeholder='Nom de la compétence'/>
           <select name='niveau'>
             <option>
               <option value='1'>1 (Débutant)";</option>
               <option value='2'>2 (Apprenti)";</option>
               <option value='3'>3 (Intermédiaire)";</option>
               <option value='4'>4 (Confirmé)";</option>
               <option value='5'>5 (Expert)";</option>
           </select>
           <input type='hidden' name='MAX_FILE_SIZE' value='120000' />
           <input type='file'  accept='image/png' name='img_Competence'/>
           <input type='submit' name='submitMd_COMP' value='Valider'/>
         </form>
     </div>
     <?php if(isset($RepModif)){($RepModif);}?>
     </div>
<?php  }?>
