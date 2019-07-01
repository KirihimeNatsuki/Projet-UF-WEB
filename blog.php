<!DOCTYPE html>
<?php session_start();
require_once('Back-end/bdd_connexion.php'); ?>
<html lang="fr" dir="ltr">
  <head>
    <?php require_once('Head.php'); ?>
  </head>
  <body>
    <header>
        <?php include('Header.php'); //include('Back-end/form_contact.php');?>
    </header>
    <main>
      <h1 align="center"><strong>Mon blog</strong></h1>
      <button id="Scroll">UP</button>
    </main>
    <footer>
      <?php include('footer.php'); ?>
    </footer>
    <script src="assets/js/script.js"></script>
</html>
