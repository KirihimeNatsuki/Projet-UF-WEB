<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome - Enzo</title>
    <link rel="stylesheet" href="assets/css/contact.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
    <link rel="shortcut icon" href="logo.png">
    <script src="cookies.js"></script>
  </head>
  <body>
    <header>
      <div id="bandeau-top">
        <nav>
          <div class="nav">
            <ul class="nav navbar-nav">
						   <li><a href="aboutme.php">A propos</a></li>
						   <li><a href="blog.php">Blog</a></li>
						   <li><a href="contact.php">Contact</a></li>
					  </ul>
          </div>
        </nav>
      </div>
        <a class="burger"><a href="index.php"><img src="assets/image/tete.png" alt="logo du site (image de moi)"></a>
        <div class="bandeau-text">
          <h2>LEMARCHAND ENZO</h2>
          <h4>Bienvenue dans mon antre</h4>
        </div>
    </header>
    <br><br>
    <main>
      <div class="form-group">
        <h1 align="center"><strong>Contactez moi ici !</strong></h1>
        <form action="#" method="POST" name="contact">
          <label for="nom">Nom</label>
          <input id="nom" type="text" name="Nom" class="form-control">
          <label for="prenom">Prénom</label>
          <input id="prenom" type="text" name="Prenom" class="form-control">
          <label for="email">Email</label>
          <input id="email" type="email" name="Email" class="form-control">
          <label for="message">Message</label>
          <textarea id="message" name="Message" class="form-control"></textarea>
          <label for="file">Fichier</label>
          <input type="file" class="form-control-file" id="file"><br>
          <input class="btn btn-primary" type="submit" value="Submit"/>
        </form>
      </div>
    </main>
    <footer>
      <div class="decouvrez">

      </div>
      <div class="reseaux">

      </div>
    </footer>
