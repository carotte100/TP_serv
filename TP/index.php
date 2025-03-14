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

    <div name="connexion">
        <h2>Connexion</h2>
        <form method="POST" action="include/connexion.php">
            <label for="username">Nom d'utilisateur:</label><br>
            <input type="text" id="username" name="username" required><br>
            <label for="password">Mot de passe:</label><br>
            <input type="password" id="password" name="password" required><br><br>
            <button type="submit">Se connecter</button>
        </form>
    </div>

    <div name="footer">
        <p> Mention légales blabla OVERWAT </p>
    </div>
</body>

</html>