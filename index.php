<?php

require('asset/inc/pdo.php');

include('asset/inc/header.php');
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LinkNetwork</title>
    <link rel="icon" href="asset/img/logo-icon.png" />
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/css/style.css">
</head>
<body>
<div id="loading">
    <img src="asset/img/gif-loading.webp" alt="Chargement en cours">
    <p>Chargement<span id="dots">...</span></p>
</div>
<section class="banner">
    <video autoplay loop muted playsinline class="back-video" src="asset/img/video-banner.mp4"></video>
    <div class="banner-container">
        <div class="banner-items">
            <h1>LinkNetwork, votre expert en analyse de réseau</h1>
            <h2>Optimisez votre réseau, améliorez votre productivité</h2>
            <p>Nous vous offrons une gamme complète de services pour améliorer la performance et la sécurité de votre réseau. Faites confiance à notre expertise et obtenez des résultats concrets.</p>
            <a href="#abt"><button class="btn-banner">Commencer</button></a>
        </div>
        <div class="banner-items floating">
            <a href="#"><img src="asset/img/img-banner.png" alt="Image banner"></a>
        </div>
    </div>
</section>

<section class="about" id="abt">
    <div class="about-container" data-aos="fade-right" data-aos-duration="500">
        <div class="about-items">
            <a href="#"><img src="asset/img/img-about.png" alt="Image about"></a>
        </div>
        <div class="about-items" data-aos="fade-left" data-aos-delay="500" data-aos-duration="500">
            <h2>À propos de nous</h2>
            <h3>Histoire de l'entreprise</h3>
            <p>LinkNetwork a été fondée en 2010 par un groupe d'experts en analyse de réseau. Depuis, nous avons acquis une solide réputation en tant que spécialistes de l'analyse de réseau et avons accompagné de nombreuses entreprises pour optimiser la performance et la sécurité de leurs réseaux.<a href="propos.php"> En savoir plus...</a></p>
        </div>
    </div>
</section>

<section class="services">
    <div class="services-container">
        <div class="services-items"  data-aos="fade-right" data-aos-duration="500" >
            <h2>Nos Services</h2>
            <h3>Évaluation et diagnostic de réseau</h3>
            <p>Ce service consiste à effectuer une analyse complète de votre réseau pour identifier les problèmes de performance et de sécurité et vous fournir des recommandations pour les résoudre.</p>
            <h3>Optimisation de réseau</h3>
            <p>Ce service vise à améliorer les performances et la sécurité de votre réseau en mettant en place les modifications et les améliorations nécessaires.</p>
            <h3>Mise en place de réseau</h3>
            <p>Si vous souhaitez mettre en place un nouveau réseau ou étendre votre réseau existant, ce service vous accompagne dans la définition de vos besoins et la mise en place des équipements et logiciels nécessaires.</p>
            <a href="service.php"><button class="btn-services">Voir tous nos services</button></a>
        </div>
        <div class="services-items" data-aos="fade-left" data-aos-delay="500" data-aos-duration="500">
            <a href="#"><img src="asset/img/img-services.png" alt="Image services"></a>
        </div>
    </div>
</section>

<section class="testimonials" data-aos-delay="500" data-aos-duration="500">
    <h2  data-aos="flip-up">Témoignages de clients</h2>
    <div class="testimonials-container">
        <div class="testimonials-items" data-aos="zoom-in" data-aos-delay="500" data-aos-duration="500">
            <h3>AeroTech</h3>
            <p>"LinkNetwork nous a aidé à résoudre les problèmes de performance de notre réseau. Leur équipe a été très professionnelle et a su nous conseiller sur les meilleures solutions à mettre en place. Depuis que nous avons mis en place leurs recommandations, nous avons constaté une augmentation de la vitesse de notre réseau et une diminution des temps d'arrêt. Nous sommes très satisfaits des résultats obtenus et recommandons vivement LinkNetwork."</p>
        </div>
        <div class="testimonials-items" data-aos="zoom-in" data-aos-delay="500" data-aos-duration="500">
            <h3>Oceanic Enterprises</h3>
            <p>"LinkNetwork nous a été d'une grande aide pour sécuriser notre réseau. Grâce à leur expertise, ils ont identifié des failles de sécurité que nous ignorions et ont mis en place des mesures pour les corriger. Nous sommes maintenant beaucoup plus tranquilles quant à la sécurité de nos données et de notre réseau."</p>*
        </div>
        <div class="testimonials-items" data-aos="zoom-in" data-aos-delay="500" data-aos-duration="500">
            <h3>Stellar Solutions</h3>
            <p>"Notre réseau était très lent et nous avions du mal à travailler efficacement. LinkNetwork a réalisé une analyse complète de notre réseau et nous a recommandé plusieurs améliorations. Depuis la mise en place de leurs recommandations, nous avons constaté une nette amélioration de la vitesse de notre réseau et nous sommes beaucoup plus productifs."</p>
        </div>
    </div>
</section>

<section class="contact">
    <div class="contact-container">
        <div class="contact-items floating" >
            <a href="#"><img src="asset/img/img-contact.png" alt="Image contact"></a>
        </div>
        <div class="contact-items" data-aos="fade-left" data-aos-delay="500" data-aos-duration="500">
            <h2>Une question ? Une suggestion ?</h2>
            <p>Vous souhaitez obtenir plus d'informations sur nos services ou nous faire part de vos besoins en matière d'analyse de réseau ? N'hésitez pas à nous contacter via le formulaire ci-dessous ou en nous appelant au numéro suivant : <a href="tel:0123456789">01 23 45 67 89</a>. Nous sommes à votre disposition pour répondre à toutes vos questions et vous accompagner dans vos projets.</p>
            <a href="contact.php"><button class="btn-contact">Nous contacter</button></a>
        </div>
    </div>
</section>
<div id="top-btn">
    <a href="#top"><i class="fas fa-arrow-up fa-2x"></i></a>
</div>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
<?php include('asset/inc/footer.php');
?>
