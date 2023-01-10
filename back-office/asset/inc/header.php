<?php


require('../../front-office/asset/inc/function.php');

require('../../front-office/asset/inc/pdo.php');
session_start();
if (!isLogged()){
        header('Location: ../404.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- JS scroll librairy -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <!--  Font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Link Network Admin</title>
</head>
<body>

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css">

<!-- SIDEBAR -->
<section id="sidebar">
    <a href="#" class="brand">

        <img class="img" src="asset/img/logo.png" alt="logo">

        <span class="text">Link Network</span>
    </a>
    <ul class="side-menu top">
        <li class="active">
            <a href="index.php">
                <i class='bx bxs-dashboard' ></i>
                <span class="text">Dashboard</span>
            </a>
    </ul>
    <ul class="side-menu">

        <li>
            <a href="deconnexion.php" class="logout">
                <i class='bx bxs-log-out-circle' ></i>
                <span class="text">Déconnexion</span>
            </a>
        </li>

        <li>
            <a href="../index.php" class="home">
                <i class="fa-sharp fa-solid fa-house"></i>
                <span class="text">Acceuil</span>
            </a>
        </li>
    </ul>
</section>
<!-- SIDEBAR -->

    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu' ></i>
            <a href="#" class="nav-link">Categories</a>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
                </div>
            </form>

            <input type="checkbox" id="switch-mode" hidden>
            <label for="switch-mode" class="switch-mode"></label>
        </nav>
        <!-- NAVBAR -->

