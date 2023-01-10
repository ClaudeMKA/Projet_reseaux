<?php


?>
<footer>
    <div class="waves">
        <div class="wave" id="wave1"></div>
    </div>
    <div class="zoom">
        <ul class="social_icon">
            <li><a href="#">
                    <ion-icon name="logo-facebook"></ion-icon>
                </a></li>
            <li><a href="#">
                    <ion-icon name="logo-twitter"></ion-icon>
                </a></li>
            <li><a href="#">
                    <ion-icon name="logo-linkedin"></ion-icon>
                </a></li>
            <li><a href="#">
                    <ion-icon name="logo-instagram"></ion-icon>
                </a></li>
        </ul>
    </div>
    <ul class="menu">
        <li><a href="#">Accueil</a></li>
        <li><a href="#">A propos</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
    <p>Copyright © 2023 LinkNetwork. Tous droits réservés. | <a href="mention.php">Mentions légales</a></p>
</footer>
<script src="asset/js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script> e=true;
    function changer(){
        if(e){
            document.getElementById("password").setAttribute("type","text");
            document.getElementById("eye").src="asset/img/eye-regular.svg"
            e=false;
        } else {
            document.getElementById("password").setAttribute("type","password");
            document.getElementById("eye").src="asset/img/eye-slash-regular.svg"
            e=true;
        }
    }</script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="asset/main-js/loading.js"></script>
<script>
    AOS.init();
</script>
