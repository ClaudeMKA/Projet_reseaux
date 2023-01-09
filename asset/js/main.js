const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");

hamburger.addEventListener("click", mobileMenu);

function mobileMenu() {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
}
const navLink = document.querySelectorAll(".nav-link");

navLink.forEach(n => n.addEventListener("click", closeMenu));

function closeMenu() {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
}

// Récupère l'élément top-btn
var topBtn = document.getElementById('top-btn');

// Ajoute un écouteur d'événement scroll sur la fenêtre
window.addEventListener('scroll', function() {
    // Vérifie si le scroll est supérieur à 20px (modifiez cette valeur selon vos besoins)
    if (window.pageYOffset > 20) {
        topBtn.style.display = 'block';
    } else {
        topBtn.style.display = 'none';
    }
});

// Ajoute un écouteur d'événement click sur l'élément top-btn
topBtn.addEventListener('click', function(event) {
    event.preventDefault();

    // Définit l'animation de défilement
    var scrollInterval = setInterval(function() {
        // Récupère la position actuelle du scroll
        var scrollTop = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;
        // Calcul la nouvelle position en diminuant la valeur de 50px (modifiez cette valeur selon vos besoins)
        var newScrollTop = scrollTop - 50;
        // Vérifie si la nouvelle position est supérieure ou égale à 0
        if (newScrollTop >= 0) {
            // Définit la nouvelle position
            window.scrollTo(0, newScrollTop);
        } else {
            // Arrête l'animation
            clearInterval(scrollInterval);
        }
    }, 10); // Modifiez la valeur de 10ms selon vos besoins (plus la valeur est élevée, plus l'animation sera lente)
});