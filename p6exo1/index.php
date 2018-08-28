<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>exo1</title>
  </head>
  <body>
    <a href="index.php?lastname=Nemare&firstname=Jean">bonjour</a>
    <p>
      <?php
      //verification des donneé de l'url
      if (!empty($_GET['firstname']) && !empty($_GET['lastname'])){
      echo $_GET['firstname'] . ' ' . $_GET['lastname'];
    }else {
      echo 'veuiller verifie les parametre de l\'url';
    }
      ?>
    </p>
  </body>
</html>
