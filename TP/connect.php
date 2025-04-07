<?php
define("SERVEUR_BD", "c_mariadb");
define('LOGIN_BD', 'userbd');
define('PASS_BD', 'merdi');
define('NOM_BD', 'tp_serveur');

$connection = mysqli_connect(SERVEUR_BD, LOGIN_BD, PASS_BD, NOM_BD);

if (!$connection) {
    die("Erreur de connexion : " . mysqli_connect_error());
} else {
    echo "Connexion réussie.";
}

?>