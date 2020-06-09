<?php


if (isset($_GET['age'])){
    $message = "Vous avez " . $_GET['age'];
} else {
    $message = 'Le paramètre age n\'existe pas';
}



?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice2</title>
    <p>Faire une page index.php. Tester sur cette page que le paramètre age existe et si c'est le cas l'afficher sinon le signaler : index.php?lastname=Nemare&firstname=Jean</p>
</head>

<body>

    <div>
        <a href="index.php?lastname=Nemare&firstname=Jean">URL A TESTER</a>
    </div>
    <div>
        <a href="index.php?age=33">URL A TESTER AVEC AGE</a>
    </div>
    <div>
        <a href="index.php">RETOUR</a>
    </div>
    <div>
    <p><?= $message ?></p>
    </div>

</body>

</html>