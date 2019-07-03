<?php session_start();
require_once('Back-end/bdd_connexion.php'); ?>
<html lang="fr" dir="ltr">
  <head>
    <?php require_once('Head.php'); ?>
    <link rel="stylesheet" href="assets/css/aboutme2.css">
  </head>
  <body>
    <header>
        <?php include('Header.php');?>
    </header>
    <main>
      <h1 align="center"><strong>Mes Compétences</strong></h1>
      <div class="comp">
        <h4 face="verdana"><strong>Ici vous pouvez voir mes compétences techniques...</strong></h4><br>
        <div class="card">
          <div class="pics_card" style="background-image: url(https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1280px-PHP-logo.svg.png);">
            <div class="txt_titre_card">PHP</div>
          </div>
          <div class="txt_description_card">Compétence informatique</div>
        </div>
        <div class="button_me">
          <a class="btn btn-outline-info" href="aboutme.php" >A propos</a></p><br>
          <a class="btn btn-outline-info" href="competence.php" >Compétences</a></p>
          <a class="btn btn-outline-info" href="experience.php" >Expériences</a></p>
        </div>
      </div>
      <br/><br/>
      <button id="Scroll">UP</button>
    </main>
    <footer>
      <?php include('footer.php'); ?>
    </footer>
    <script src="assets/js/script.js"></script>
</html>
