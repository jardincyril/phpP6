<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>exo4</title>
  </head>
  <body>
    <a href="index.php?language=PHP&server=LAMP">le language et le server</a>
    <p>
      <?php
      //verification des donneé de l'url
      if (isset($_GET['language']) && isset($_GET['server'])){
      echo $_GET['language'] . ' ' . $_GET['server'];
      }
      ?>
    </p>
  </body>
</html>
