<?php

// Vérification des champs remplis
if (empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password'])) {
    header('Location:index.php?error=missingInput');
    exit();
} else {
    // Assainissement des variables
    $username = htmlspecialchars(trim($_POST['username']));
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));
    $password2 = htmlspecialchars(trim($_POST['password2']));
}

// Vérification de l'email (il ne doit pas exister), pareil pour le username

if (strlen($username) < 3) {
    header('Location:index.php?error=invalidUsername');
    exit();
}

if (strlen($password) < 6) {
    header('Location:index.php?error=invalidPassword');
    exit();
}

if ($password === $password2) {
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;
    $_SESSION['password'] = password_hash($password, PASSWORD_DEFAULT);
    header('Location:index.php?success=authenticated');
}