<?php


if (isset($_GET['$language']) && isset($_GET['$serveur'])) {
    $message = $_GET['$language'] . '<br>' . $_GET['serveur'];
} else {
    $message = 'Les paramètres d\'URL language et serveur ne sont pas présents';
}



?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice3</title>
    <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher : index.php?language=PHP&server=LAMP</p>
</head>

<body>

    <div>
        <a href="index.php?language=PHP&server=LAMP">URL A TESTER</a>
    </div>
    <div>
        <a href="index.php?">RETOUR</a>
    </div>
    <div>
    <p><?= $message ?></p>
    </div>

</body>
</html>