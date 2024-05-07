<?php
    require_once "../ressources/fonctions.php";

    if (isset($_POST['username']) && isset($_POST['password'])){
        if (check_username($_POST['username'])){
            $email = "";
            if (isset($_POST['email'])){ $email = $_POST['email']; }
            create_account($_POST['username'], $_POST['password'], $email);
        } else {
            $message = "Nom d'utilisateur invalide";
        }
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects Manager | Créer un compte</title>
    <link rel="stylesheet" href="../styles/create-account.css">
</head>
<body>
    <div id="container-border">
        <div id="container">
            <h1>Création du compte</h1>
            <?php if(isset($message)){echo "<span class=\"error\">$message</span>";} ?>
            <form action="create-account.php" method="post">
                <label for="username">Identifiant :</label>
                <input type="text" name="username" id="username" placeholder="Identifiant" required>
                <label for="password">Mot de passe :</label>
                <input type="password" name="password" id="password" placeholder="Mot de passe" required>
                <label for="password">Adresse email :</label>
                <input type="email" name="email" id="email" placeholder="Adresse email">
                <button>Créer un compte</button>
            </form>
            <small>Vous avez déjà un compte ?<br><a href="../index.php">Connectez</a>-vous ici !</small>
        </div>
    </div>
</body>
</html>