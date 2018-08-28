<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>exo5</title>
  </head>
  <body>
    <a href="index.php?week=12">le week end</a>
    <p>
      <?php
      //verification des donneé de l'url
      if (isset($_GET['week'])){
      echo $_GET['week'];
      }
      ?>
    </p>
  </body>
</html>
