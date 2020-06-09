<?php

var_dump($_GET);
var_dump(isset($_GET['lastname']));

if (isset($_GET['lastname']) && isset($_GET['firstname'])) {
    $message = $_GET['lastname'] . '<br>' . $_GET['firstname'];
} else {
    $message = 'Les paramètres d\'URL lastname et firstname ne sont pas présents';
}

$nom = 'toto';
$prenom = 'tata';

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice1</title>
    <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher : index.php?lastname=Nemare&firstname=Jean</p>
</head>

<body>

    <div>
        <a href="index.php?lastname=<?= $prenom ?>&firstname=<?= $nom ?>">Test URL</a>
    </div>
    <div>
        <a href="index.php">RETOUR</a>
    </div>
    <div>
    <p><?= $message ?></p>
    </div>

</body>

</html>