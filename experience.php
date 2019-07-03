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
      <h1 align="center"><strong>Mes expériences</strong></h1>
      <div class="exp">
        <h4 face="verdana"><strong>Ici vous pouvez voir mes expériences professionnelles et diplômes obtenus</strong></h4><br/>
        <div class="card">
          <div class="pics_card" style="background-image: url(assets/images/baccalaureat.png);">
            <div class="txt_titre_card">BAC S</div>
          </div>
          <div class="txt_description_card">Diplome du BAC</div>
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
