<?php


if (isset($_GET['$week'])) {
    $message = $_GET['$week'];
} else {
    $message = 'Les paramètres d\'URL week ne sont pas présents';
}




?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice3</title>
    <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher : index.php?week=12</p>
</head>

<body>

    <div>
        <a href=" index.php?week=12">URL A TESTER AVEC DATE</a>
    </div>
    <div>
        <a href="index.php?">RETOUR</a>
    </div>
    <div>
    <p><?= $message ?></p>
    </div>

</body>
</html>