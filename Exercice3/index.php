<?php


if (isset($_GET['startdate']) && isset($_GET['enddate'])) {
    $message = $_GET['startdate'] . '<br>' . $_GET['enddate'];
} else {
    $message = 'Les paramètres d\'URL d\entrée et de sortie ne sont pas présents';
}



?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice3</title>
    <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent  et les afficher : index.php?startDate=2/05/2016&endDate=27/11/2016</p>
</head>

<body>

    <div>
        <a href="index.php?startDate=2/05/2016&endDate=27/11/2016">URL A TESTER AVEC DATE</a>
    </div>
    <div>
        <a href="index.php">RETOUR</a>
    </div>
    <div>
    <p><?= $message ?></p>
    </div>

</body>
</html>