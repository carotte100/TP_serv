<?php

require('include/crud.php');

$wintons = list_wintons($CONNEXION);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon serveur PHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div name="header">
        <h1>Boutique de WINTON</h1>

        <?php
        echo "<p>Date et heure actuelles : " . date('Y-m-d H:i:s') . "</p>";
        echo "<p> It's WINTON time !!!! </p>";
        ?>

        <h2>voici le site</h2>
    </div>

    <div name="catalogue">
        <div id="">
            <?php
            foreach ($wintons as $winton) {
                echo "<div id=winton>";
                echo "<img src='img/" . $winton['nom'] . ".png'>";
                echo "<p>" . $winton['nom'] . "</p>";
                echo "<p>" . $winton['prix'] . "</p>";
                echo "</div>";
            }
            ?>
        </div>

    </div>

    <div name="footer">
        <p> Mention légales blabla OVERWAT </p>
    </div>
</body>

</html>