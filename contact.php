<!DOCTYPE html>
<?php session_start();
require_once('Back-end/bdd_connexion.php'); ?>
<html lang="fr" dir="ltr">
  <head>
    <?php require_once('Head.php'); ?>
    <link rel="stylesheet" href="assets/css/contact.css">
  </head>
  <body>
    <header>
        <?php include('Header.php');?>
    </header>
    <main class="contact">
      <?php require_once('Back-end/form_contact.php'); ?>
        <div id="form-group">
          <h1 align="center"><strong>Contactez moi ici !</strong></h1>
          <h5><?php if(isset($contactReponse)){echo "$contactReponse";} ?></h5>
          <form action="contact.php" method="POST" name="contact">
            <label for="nom">Nom</label>
            <input id="nom" type="text" name="nom" class="form-control">
            <label for="prenom">Prénom</label>
            <input id="prenom" type="text" name="prenom" class="form-control">
            <label for="email">Email</label>
            <input id="email" type="email" name="email" class="form-control" required>
            <label for="email">Sujet</label>
            <input id="sujet" type="text" name="sujet" class="form-control" required>
            <label for="message">Message</label>
            <textarea id="message" name="message" class="form-control" required></textarea><br>
            <button id="sub" class="btn btn-primary" type="submit" value="Submit" name="envoi_mess">Submit</button>
          </form>
        </div>
        <button id="Scroll">UP</button>
    </main>
    <footer>
      <?php include('footer.php'); ?>
    </footer>
    <script src="assets/js/script.js"></script>
</html>
