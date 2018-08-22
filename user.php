<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice3</title>
    </head>
    <body>
        <?php
        if (!empty($_GET['firstName']) && !empty($_GET['lastName'])) {
            //Récupération des données du formulaire
            echo 'Bonjour ' . $_GET['lastName'] . ' ' . $_GET['firstName'];
        } else {
            echo "Champs vides";
        }
        ?>
    </body>
</html>
