<?php

//Si le message est envoyé, on peut commencer les vérifications
if (isset($_POST["envoi_mess"])) {
//Nous allons vérifier que toutes les données sont présentes
if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['sujet']) && isset($_POST['message']) ) {
  $nom = htmlspecialchars($_POST['nom']);
  $prenom = htmlspecialchars($_POST['prenom']);
  $email = htmlspecialchars($_POST['email']);
  $sujet = htmlspecialchars($_POST['sujet']);
  $message = htmlspecialchars($_POST['message']);
//On effectue plusieurs opérations pour vérifier que la taille de chaque donnée soit respectée
  if((strlen($nom) <= 60 && strlen($nom) >= 3) || (strlen($prenom) <= 40 && strlen($prenom)  >= 3) || (strlen($nom) == 0 && strlen($prenom) == 0))  {
    if(strlen($email) <= 100 && strlen($email) >= 8) {
      if(strlen($sujet) <= 80 && strlen($sujet) >= 3) {
        if(strlen($message) <= 800 && strlen($message) >= 12) {
//Une fois toutes les vérifications terminées nous allons préparer et éxécuter la requête pour stocker le message dans la bdd
          $rqt = $db->prepare('SELECT id_contact FROM contact WHERE nom_envoyeur = ? AND prenom_envoyeur = ? sujet = ?');
          $rqt->execute(array($nom, $prenom, $sujet));
          $rqt = $db->prepare("INSERT INTO contact(`nom_envoyeur`,`prenom_envoyeur`,`sujet`,`email`,`message`) VALUES (? , ? , ? , ? , ?) ");
//Si la requête est bien éxécutée et que tout et bon, on envoie un message de confirmation
            if($rqt->execute(array($nom,$prenom,$sujet,$email,$message))){
              $contactReponse = "Le message a bien été transmis !";
//Les messages d'erreurs ci-dessous indiquent à quel endroit l'auteur du message a commis une erreur
            }else{ $contactReponse = "Erreur durant la transmission du message, veuillez me contacter directement par mail ou par téléphone";}
        }else{ if(strlen($message) > 800){$info = "trop long";}else{$info = "trop court";}$contactReponse = "Votre message doit être compris dans une tranche de 12 à 800 caractères, or votre message a : ".strlen($message)." caractères ce qui est " . $info;}
      }else{ if(strlen($sujet) > 80){$info = "trop long";}else{$info = "trop court";}$contactReponse = "Votre sujet doit être compris dans une tranche de 3 à 80 caractères, or votre sujet a : ".strlen($sujet)." caractères ce qui est " . $info;}
    }else{ if(strlen($email) > 100){$info = "trop long";}else{$info = "trop court";}$contactReponse = "Votre e-mail doit être compris dans une tranche de 8 à 100 caractères, or votre e-mail a : ".strlen($email)." caractères ce qui est ". $info;}
  }else{ $contactReponse = "Votre nom ou/et prénom n'est pas valide (trop long ou trop court, veuillez adapter si c'est un cas particuliers ou me contacter pour effectuer des changements )";}
  }
}
?>
