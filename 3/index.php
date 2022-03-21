<?php
    session_start();

    if (isset($_GET['logout'])) {
        session_destroy();
        header('Location:index.php?success=disconnect');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../3/style.css">


</head>

<body>
    <h1>Exercice 3 : Inscription</h1>
    <p>A l'aide d'un formulaire HTML et de PHP, simulez un formulaire d'inscription (avec hashage du mot de passe)
        via une requête POST sur une page d'affichage et une page de processing. Si la connexion est effective alors on
        affiche un message de bienvenue à l'utilisateur contenant son username.</p>
    <small>Ne pas oublier de préparer le cas où les données sont non renseignées et/ou n'ont pas encore pu être
        remplies. Ne pas oublier d'initialiser la session. (Ici on part du principe qu'on est connectés dès que l'on
        s'inscrit.)</small>
    <small>Afficher le formulaire s'il n'y a pas d'utilisateur connecté.</small>
    <small>Ne pas afficher le formulaire s'il est connecté</small>
    <p><b>BONUS : vérifier que le username fait plus de 3 caractères et que le mot de passe en fait au moins 6</b></p>
    <p><b>BONUS : inclure un lien qui permet de se déconnecter</b></p>
    <ul>
        <li>username</li>
        <li>password</li>
        <li>confirmation password</li>
        <li>email</li>
    </ul>
    <?php if (!empty($_SESSION)) { ?>

    <div>
        <h1>Bienvenue <?php echo $_SESSION['username']; ?> ❤ </h1>
        <p>Ici on fait n'importe quoi, du coup voici tes identifiants</p>
        <small>On a quand même crypté le mot de passe 😁</small>
        <ul>
            <li>username : <?php echo $_SESSION['username']; ?></li>
            <li>email : <?php echo $_SESSION['email']; ?></li>
            <li>password : <?php echo $_SESSION['password']; ?></li>
        </ul>
        <a href="?logout">Déconnectez moi tout-suite !</a>
    </div>

    <?php } else { ?>
    <form action="index_post.php" method="post">
        <div>
            <label for="username">username</label>
            <input type="text" name="username" id="username" minlength="3">
        </div>
        <div>
            <label for="email">email</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="password">password</label>
            <input type="password" name="password" id="password" minlength="6">
        </div>
        <div>
            <label for="password2">confirm password</label>
            <input type="password" name="password2" id="password2">
        </div>
        <input type="submit" value="Envoyer">
    </form>
    <?php
}
    ?>
</body>

</html>