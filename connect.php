<?php
$lines = file('/.env', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

foreach ($lines as $line) {
    $line = trim($line);
    if ($line === '' || strpos($line, '#') === 0) {
        continue;
    }

    [$key, $value] = explode('=', $line, 2);
    define(trim($key), trim($value));
}

define('SERVEUR_BD', getenv('HOST'));
define('LOGIN_BD', getenv('UTILISATEUR_BD'));
define('PASS_BD', getenv('MDP_BD'));
define('NOM_BD', getenv('NOM_BD'));
?>