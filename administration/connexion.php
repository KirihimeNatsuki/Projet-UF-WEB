<?php
session_start();
if(isset($_SESSION['id'])){?>
<meta http-equiv="refresh" content="1;URL=index.php">
<?php
}else{
?>
<html>
<head>
  <?php require_once('head_administration.php'); ?>
  <?php require_once('back-admin/bdd_connexion.php'); ?>
</head>
<body>
  <main>
    <?php if(!isset($_SESSION['id'])){require_once('back-admin/connexion.php'); ?>
    <div class="connect">
      <form action="connexion.php" method="POST">
        <div class="form-group">
          <input type="text" class="form-control" name="login" placeholder="Identifiant" required>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" name="password" placeholder="Password" required>
        </div>
        <center><button type="submit" class="btn btn-secondary" name="connexion" value="Valider">Valider</button></center>
      </form>
      <h5><?php if(isset($Rep)){echo "$Rep";} ?></h5>
    </div>
  </main>
</body>
</html>
<?php }} ?>
