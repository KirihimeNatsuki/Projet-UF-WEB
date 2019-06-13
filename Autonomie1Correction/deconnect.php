<?php
  session_start();
  echo "Au revoir MsBEEN" . $_SESSION['user_name'] . "<br>";
  session_unset();
  session_destroy();
 ?>
 <p><a href='index.php'> Retour à l'accueil</a></p>
