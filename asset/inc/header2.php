<?php
require('asset/inc/function.php');
session_start()
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>html</title>
    <link rel="stylesheet" href="asset/css/style.css">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Sliding-Sign-In-Sign-Up-Form-master/style.css"/>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>

<header>
    <nav class="navbar nb-c">
        <a href="#" class="nav-logo"><img src="asset/img/logo.png" alt="Logo"></a>
        <ul class="nav-contact">
            <li class="nav-item">
                <a href="index.php" class="nav-link-active">Accueil</a>
            </li>
            <li class="nav-item">
                <a href="propos.php" class="nav-link">A propos</a>
            </li>
            <li class="nav-item">
                <a href="service.php" class="nav-link">Services</a>
            </li>
            <li class="nav-item">
                <a href="contact.php" class="nav-link">Contact</a>
            </li>
            <?php if(isLogged()) {  ?>
                <a href="back-office/index.php"><button class="btn-identifier">Voir mon réseaux</button></a>
                <a href="back-office/deconnexion.php"><button class="btn-identifier red_d">Se deconnecter </button></a>
            <?php }  ?>

            <?php if(!isLogged()) {  ?>
                <a href="inscri.php"><button class="btn-identifier">S'identifier</button></a>

                </li>
            <?php }  ?>
        </ul>
        </ul>
    </nav>
</header>
