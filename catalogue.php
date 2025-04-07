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
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <div name="header" class="bg-sky-50 py-6 text-center shadow-md">
        <h1 class="text-3xl font-bold text-gray-800 ">Boutique de WINTON</h1>

        <?php
        echo "<p class='text-gray-600'>Date et heure actuelles : " . date('Y-m-d H:i:s') . "</p>";
        echo "<p class='text-lg font-semibold text-blue-600'> It's WINTON time !!!! </p>";
        ?>

        <h2>voici le site</h2>
    </div>

    <div name="catalogue">
        <div id="" class="grid  grid-cols-5 gap-5 ">
            <?php
            foreach ($wintons as $winton) {
                echo "<div id=winton class='bg-yellow-100 grid grid-row-3 divide-y-3 devide-black divide-indigo-500 shadow-lg border-8 border-double border-orange-600 rounded-2xl py-5 m-6 w-80 '>";
                echo "<p class='uppercase text-2xl font-bold text-center mb-3 -mt-2'>" . $winton['nom'] . "</p>";
                echo "<img class='h-full w-full object-fill border-y-4 border-black' src='img/" . $winton['nom'] . ".png'>";
                echo "<p class='text-3xl font-bold text-center mt-3 bg-orange rounded-full'>" . $winton['prix'] . "</p>";
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