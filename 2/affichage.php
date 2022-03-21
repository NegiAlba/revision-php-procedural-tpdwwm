<?php

    if (!empty($_POST)) {
        if (in_array('', $_POST)) {
            header('Location:index.php?error=missingInput');
            exit();
        } else {
            $marque = htmlspecialchars(trim($_POST['marque']));
            $modele = htmlspecialchars(trim($_POST['modele']));
            $couleur = htmlspecialchars(trim($_POST['couleur']));
            $kilometrage = htmlspecialchars(trim($_POST['kilometrage']));
            $carburant = ucfirst(htmlspecialchars(trim($_POST['carburant'])));
            $annee = intval(htmlspecialchars(trim($_POST['annee'])));
            $prix = floatval(htmlspecialchars(trim($_POST['prix'])));
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire (2 pages)</title>
    <link rel="stylesheet" href="../3/style.css">
</head>

<body>
    <h1>Exercice 2 : Véhicule</h1>
    <h2>Affichage des résultats</h2>

    <ul>
        <li>Marque : <?php echo $marque ? $marque : 'Invalide'; ?></li>
        <li>Modèle : <?php echo $modele ? $modele : 'Invalide'; ?></li>
        <?php $affichageCouleur = $couleur ? $couleur : '#000'; ?>
        <li>Couleur : <?php echo "<input type='color' value='$affichageCouleur'/>"; ?></li>
        <li> Kilométrage : <?php echo $kilometrage ? $kilometrage : 'Invalide'; ?></li>
        <li>Annee : <?php echo $annee ? $annee : 'Invalide'; ?></li>
        <li>Prix : <?php echo $prix ? $prix : 'Invalide'; ?></li>
    </ul>

    <a href="index.php">Retour au formulaire</a>
</body>

</html>