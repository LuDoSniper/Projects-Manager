<?php
    require_once "ressources/fonctions.php";
    session_start();

    if (isset($_GET['logout'])){
        session_destroy();
    }

    if (isset($_SESSION['user'])){
        header('Location: pages/dashboard.php');
    }

    if (isset($_POST['username']) && isset($_POST['password']) && test_login($_POST['username'], $_POST['password'])){
        $_SESSION['user'] = get_user($_POST['username']);
        header('Location: pages/dashboard.php');
    }
?>

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