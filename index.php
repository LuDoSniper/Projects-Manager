<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects Manager | Connexion</title>
    <link rel="stylesheet" href="styles/index.css">
</head>
<body>
    <div id="container-border">
        <div id="container">
            <h1>Connexion</h1>
            <form action="index.php" method="post">
                <label for="username">Identifiant :</label>
                <input type="text" name="username" id="username" placeholder="Identifiant" required>
                <label for="password">Mot de passe :</label>
                <input type="password" name="password" id="password" placeholder="Mot de passe" required>
                <button>Se connecter</button>
            </form>
            <small>Pas de compte ? <a href="pages/create-account.php">Créez</a>-en un !</small>
        </div>
    </div>
</body>
</html>