<?php session_start();
require_once('Back-end/bdd_connexion.php'); ?>
<html lang="fr" dir="ltr">
  <head>
    <?php require_once('Head.php'); ?>
    <link rel="stylesheet" href="assets/css/aboutme.css">
  </head>
  <body>
    <header>
        <?php include('Header.php');?>
    </header>
    <main>
      <h1 align="center"><strong>A propos</strong></h1>
      <div class="presentation">
        <h3 align="center"><strong>Salut, moi c'est Enzo</strong></h3><br/>
        <p align="center" face="verdana" > Etudiant en informatique (Ingésup) basé à Aix-en-Provence, j'essai de me spécialiser dans le développement logiciel,
          notament sur les langages C et python, avec un peu de développement web.
          Je suis aussi en mesure de me déplacer dans les alentours d'Aix en Provence jusqu'à Toulon et d'intégrer facilement une équipe voir en gérer une
          (peu de formations sur ce sujet mais j'ai des qualités pour ce rôle non négligables).<br/>
          Je suis régulièrement disponible tous les jours de 9h à 19h pour d'éventuels contact.</p>
        <img src="assets/images/me.jpg" width="450" height="350" id="moi">
        <h4 face "verdana"><strong>Venez découvrir mes compétences et expériences</strong></h4><br>
        <a class="btn btn-outline-info" href="competence.php" >Compétences</a></p>
        <a class="btn btn-outline-info" href="experience.php" >Expériences</a></p>
      </div>
      <br/><br/>
      <button id="Scroll">UP</button>
    </main>
    <footer>
      <?php include('footer.php'); ?>
    </footer>
    <script src="assets/js/script.js"></script>
</html>
