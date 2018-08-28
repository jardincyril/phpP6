<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>exo6</title>
  </head>
  <body>
    <a href="index.php?building=12&room=101">le building et la room</a>
    <p>
      <?php
      //verification des donneé de l'url
      if (isset($_GET['building']) && isset($_GET['room'])){
      echo $_GET['building'] . ' ' . $_GET['room'];
      }
      ?>
    </p>
  </body>
</html>
