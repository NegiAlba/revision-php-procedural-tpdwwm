<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
    <link rel="stylesheet" href="../3/style.css">

</head>

<body>
    <h1>Exercice 2 : Voiture</h1>
    <h2>Formulaire</h2>

    <p>A l'aide d'un formulaire HTML et de PHP, affichez les données qu'un concessionnaire aura rempli dans un
        formulaire
        via une requête POST SUR UNE AUTRE PAGE : Ce formulaire contiendra un champ pour : la marque, le modèle, la
        couleur, le kilometrage, le carburant, l'année et le prix. </p>
    <small>Vous appliquerez les vérifications nécessaires pour éviter les messages d'erreur</small>

    <form action="affichage.php" method="post">
        <label for="marque">marque</label>
        <input type="text" name="marque" id="marque">
        <label for="modele">modele</label>
        <input type="text" name="modele" id="modele">
        <label for="couleur">couleur</label>
        <input type="color" name="couleur" id="couleur">
        <label for="kilometrage">kilometrage</label>
        <input type="number" name="kilometrage" id="kilometrage">
        <label for="carburant">carburant</label>
        <select name="carburant" id="select" id="carburant">
            <option value="" disabled selected> Quel carburant utilise votre véhicule ?</option>
            <option value="gasoil">Gasoil</option>
            <option value="essence">Essence</option>
            <option value="electrique">Electrique</option>
            <option value="gpl">GPL</option>
        </select>
        <label for="annee">Annee</label>
        <input type="number" min="1881" name="annee" id="annee">
        <label for="prix">Prix</label>
        <input type="number" min="1" name="prix" id="prix">
        <input type="submit" value="Envoyer">
    </form>
</body>

</html>