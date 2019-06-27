<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome - Enzo</title>
    <link rel="stylesheet" href="assets/css/contact.css">
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
    <link rel="shortcut icon" href="logo.png">
    <script src="cookies.js"></script>
  </head>
  <body>
    <header>
        <?php include('Header.php')?>
    </header>
    <main class="contact">
        <div id="form-group">
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
            <button id="sub" class="btn btn-primary" type="submit" value="Submit">Submit</button>
          </form>
        </div>
    </main>
</html>
