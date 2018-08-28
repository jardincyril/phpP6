<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>exo3</title>
  </head>
  <body>
    <a href="index.php?startDate=2/05/2016&endDate=27/11/2016">la date s'il vous plaît</a>
    <p>
      <?php
//verification des donneé de l'url
      if (isset($_GET['startDate']) && isset($_GET['endDate'])){
      echo $_GET['startDate'] . ' ' . $_GET['endDate'];
      }
      ?>
    </p>
  </body>
</html>
