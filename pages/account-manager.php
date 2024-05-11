<?php
    require_once "../ressources/fonctions.php";
    session_start();

    if (!isset($_SESSION['user'])){
        header('Location: ../index.php');
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects Manager | Gestion du compte</title>
    <link rel="stylesheet" href="../styles/account-manager.css">
    <script src="https://kit.fontawesome.com/ebeaba6256.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="left">
            <img src="../imgs/logo_projects-manager_neg.png" alt="Logo de Projects Manager" id="logo">
            <nav>
                <div>
                    Espaces de travail <i class="fa-solid fa-angle-down"></i>
                </div>
                <div>
                    Récent <i class="fa-solid fa-angle-down"></i>
                </div>
                <div>
                    Favoris <i class="fa-solid fa-angle-down"></i>
                </div>
            </nav>
        </div>
        <div id="profile">
            <img src="<?= $_SESSION['user']['logo_path'] ?>" alt="Image de profil">
        </div>
    </header>

    <div id="overlay" style="display: none;"></div>
    <div id="menu" style="display: none;">
        <span class="title">COMPTE</span>
        <div id="compte">
            <img src="<?= $_SESSION['user']['logo_path'] ?>" alt="Image de profile">
            <div id="infos">
                <span>username</span>
                <span>adresse.mail@domaine.web</span>
            </div>
        </div>
        <div class="line"></div>
        <a href="../index.php?logout">Se déconnecter</a>
    </div>

    <script src="../scripts/account-manager.js"></script>
</body>
</html>