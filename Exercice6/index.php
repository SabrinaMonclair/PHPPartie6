<?php


if (isset($_GET['$building']) && isset($_GET['$room'])) {
    $message = $_GET['$building'] . '<br>' . $_GET['room'];
} else {
    $message = 'Les paramètres d\'URL building et room ne sont pas présents';


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice6</title>
    <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher :
        index.php?building=12&room=101</p>
</head>

<body>

    <div>
        <a href="index.php?building=12&room=101">URL A TESTER</a>
    </div>
    <div>
        <a href="index.php?">RETOUR</a>
    </div>
    <div>
        <p><?= $message ?></p>
    </div>

</body>
</html>