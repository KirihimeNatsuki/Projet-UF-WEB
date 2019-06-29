<!DOCTYPE html>
<?php session_start();
require_once('Back-end/connexion.php'); ?>
<html lang="fr" dir="ltr">
  <head>
    <?php require_once('Head.php'); ?>
  </head>
  <body>
    <header>
        <?php include('Header.php'); //include('Back-end/form_contact.php');?>
    </header>
    <main>
      <br><br><br><br><br>
      <div class="presentation">
        <h3 align="center"><strong>Salut, moi c'est Enzo</strong></h3><br/>
        <p align="center" face="verdana" > Etudiant en informatique (Ingésup) basé à Aix-en-Provence, j'essai de me spécialiser dans le développement logiciel,
          notament sur les langages C et python, avec un peu de développement web.
          Je suis aussi en mesure de me déplacer dans les alentours d'Aix en Provence jusqu'à Toulon et d'intégrer facilement une équipe voir en gérer une
          (peu de formations sur ce sujet mais j'ai des qualités pour ce rôle non négligables).<br/>
          Je suis régulièrement disponible tous les jours de 9h à 19h pour d'éventuels contact.</p>
      </div>
      <br/><br/>
      <div class="explain">
        <h3 align="center"><strong>Pourquoi ce site web ?</strong></h3><br/>
        <p align="center" face="verdana"> Ce site présente ma propre personne, c'est à dire mon parcours, mes expériences, mes compétences, mon CV...<br/>
          L'idée de départ était de créer un Portfolio en ligne pour un projet de fin d'année d'étude, or j'ai préféré réaliser ce site présentant d'autres fonctionnalités qu'un simple Portfolio
          afin d'englobaliser tous mes projets et mes expériences professionnelles dans mon propre site<br/>
          Vous pouvez toujours venir regarder mes projets réalisés et mes stages/expériences récentes dans la partie Blog du site qui propose chaque projet et expérience sous forme d'un topic.
      </div>
      <br/><br/>
      <div class="crea">
        <h3 align="center"><strong>Création et développement</strong></h3><br/>
        <p align="center" face="verdana"> La plupart de mes créations sont présentes dans mes répertoires GitHub ou dans mon Portfolio qui est représenté dans la partie A propos que vous pouvez visiter à partir du menu ou ci-dessous:<br/>
        <a class="btn btn-outline-info" href="aboutme.php" >A propos</a></p>
      </div>
      </main>
      <footer>
        <div class="decouvrez">

        </div>
        <div class="reseaux">

        </div>
      </footer>
      <script src="assets/js/script.js"></script>
  </html>
