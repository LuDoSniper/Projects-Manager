<?php
    require_once "../ressources/fonctions.php";

    if (isset($_POST['username']) && isset($_POST['password'])){
        if (check_username($_POST['username'])){
            $email = "";
            if (isset($_POST['email'])){ $email = $_POST['email']; }
            create_account($_POST['username'], $_POST['password'], $email);
            header("Location: ../index.php");
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
    <script src="https://kit.fontawesome.com/ebeaba6256.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="container-border">
        <div id="container">
            <h1>Création du compte</h1>
            <?php if(isset($message)){echo "<span class=\"error\">$message</span>";} ?>
            <form action="create-account.php" method="post">
                <label for="username">Identifiant :</label>
                <span id="username-span">
                    <input type="text" name="username" id="username" placeholder="Identifiant" required>
                    <i class="fa-solid fa-xmark"></i>
                </span>
                <label for="password">Mot de passe :</label>
                <span id="password-span">
                    <input type="password" name="password" id="password" placeholder="Mot de passe" required>
                    <i class="fa-solid fa-xmark"></i>
                </span>
                <label for="password">Adresse email :</label>
                <span id="email-span">
                    <input type="email" name="email" id="email" placeholder="Adresse email">
                    <i class="fa-solid fa-xmark"></i>
                </span>
                <button>Créer un compte</button>
            </form>
            <small>Vous avez déjà un compte ?<br><a href="../index.php">Connectez</a>-vous ici !</small>
        </div>
    </div>

    <script src="../scripts/create-account.js"></script>
</body>
</html>