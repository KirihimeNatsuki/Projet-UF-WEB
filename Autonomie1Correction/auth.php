<?php
  //Je liste tous les utilisateurs pour les afficher dans un select, afin de choisir qui connecter
  $rqtUser = "SELECT * FROM utilisateur";
  require_once('db.php');
  try {
    $stmt = $pdo->prepare($rqtUser);
    $stmt->execute();
  } catch(Exception $e){
      $e->getMessage();
  }
?>
<form name='auth' method='POST' action='index.php'>
  <select name='user_id'>
  <?php
    while($u = $stmt->fetch(PDO: :FETCH_ASSOC)){
      echo "<option value='".$u['id_utilisateur']."'>";
      echo $u['prenom'];
      echo "</option>";
    } //Je ferme le while que j'ai ouvert plus haut
    ?>
  </select>

  <input type='submit' name='submit' value='login'/>
</form>
