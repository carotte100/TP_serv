<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon serveur PHP</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <!-- Header -->
    <div class="bg-sky-50 py-6 text-center shadow-md">
        <h1 class="text-3xl font-bold text-gray-800">Boutique de WINTON</h1>

        <?php
        echo "<p class='text-gray-600'>Date et heure actuelles : " . date('Y-m-d H:i:s') . "</p>";
        echo "<p class='text-lg font-semibold text-blue-600'>It's WINTON time !!!!</p>";
        ?>
    </div>

    <!-- Connexion -->
    <div class="flex justify-center items-center h-screen">
        <div class="bg-white shadow-lg rounded-lg p-6 w-96">
            <h2 class="text-2xl font-bold text-center text-gray-700 mb-4">Connexion</h2>
            <form method="POST" action="include/connexion.php" class="space-y-4">
                <div>
                    <label for="username" class="block text-gray-700 font-semibold">Nom d'utilisateur :</label>
                    <input type="text" id="username" name="username" required
                        class="w-full p-2 border border-gray-300 rounded mt-1 focus:ring-2 focus:ring-blue-400 focus:outline-none">
                </div>
                <div>
                    <label for="password" class="block text-gray-700 font-semibold">Mot de passe :</label>
                    <input type="password" id="password" name="password" required
                        class="w-full p-2 border border-gray-300 rounded mt-1 focus:ring-2 focus:ring-blue-400 focus:outline-none">
                </div>
                <button type="submit"
                    class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Se connecter
                </button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <div class="bg-gray-800 text-white text-center py-4 mt-10">
        <p>Mention légales blabla OVERWAT</p>
    </div>

</body>

</html>