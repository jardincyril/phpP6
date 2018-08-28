<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>exo2</title>
    </head>
    <body>
        <a href="index.php?lastname=Nemare&firstname=Jean">bonjour</a>
        <p>
            <?php
            if (!empty($_GET['firstname']) && !empty($_GET['lastname'])) {//on a le nom et le prenom
                echo $_GET['firstname'] . ' ' . $_GET['lastname'];
            } else { //il manque des parametre, on avertit le visiteur
                echo 'il faut renseigne un age!';
            }
            ?>
        </p>
    </body>
</html>
