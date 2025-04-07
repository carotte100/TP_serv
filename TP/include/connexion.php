<?php

require(__DIR__ . '/../connect.php');

$CONNEXION = mysqli_connect(SERVEUR_BD, LOGIN_BD, PASS_BD);
//Connexion au serveur de bases de données
if (mysqli_connect_errno()) {
    echo 'Désolé, connexion au serveur ' . SERVEUR_BD . ' impossible, ' . mysqli_connect_error(), "\n";
    exit();
}
// Sélection de la base de données
mysqli_select_db($CONNEXION, NOM_BD);
if (mysqli_connect_errno()) {
    echo 'Désolé, accès à la base ' . NOM_BD . ' impossible, ' . mysqli_connect_error(), "\n";
    exit();
}
// Spécification de l'encodage UTF-8 pour dialoguer avec la BD
if (!mysqli_set_charset($CONNEXION, 'UTF8')) {
    echo 'Erreur au chargement de l\'encodage UTF-8 : ', mysqli_connect_error(), "\n";
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($CONNEXION, $username);
    $password = mysqli_real_escape_string($CONNEXION, $password);

    $query = "SELECT * FROM utilisateur WHERE pseudo = '$username' AND mdp = '$password'";

    $result = mysqli_query($CONNEXION, $query);

    if (mysqli_num_rows($result) > 0) {
        session_start();
        $_SESSION['username'] = $username;
        header("Location: ../catalogue.php");
        exit();
    } else {
        echo "Identifiants incorrects, veuillez réessayer.";
    }
}
?>