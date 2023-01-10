


<?php
include('asset/inc/header2.php');

if(isLogged()){
    header('Location: index.php');
}


?>

<div id="loading">
    <img src="asset/img/gif-loading.webp" alt="Chargement en cours">
    <p>Chargement<span id="dots">...</span></p>
</div>
<section id="login">
    <div class="wrap3">
        <div class="login_form">
            <div class="log_gauche">
                <div class="gauche_info">
                    <h3>Nouveau ici ?</h3>
                    <p>
                        Inscrivez vous dès maintenant et ayez accès au suivi de votre réseau !
                    </p>
                    <a href="inscri.php">S'inscrire</a>
                </div>
                <img src="../../../testlink/asset/img/log.svg" class="image" style="width: 80%; margin-left: 20%; margin-top: 2%"" alt="" />
            </div>
            <div class="log_droite">
                <form id="inscription-form" method="post">
                    <h2 class="title">Se connecter</h2>
                    <div class="form-group">
                        <i class="fas fa-user"></i>
                        <input type="email" name="email" id="email" placeholder="Email" required>
                        <label for="email"></label>
                        <span id="error-email"></span><br>
                    </div>
                    <div class="form-group">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" id="password" placeholder="Mot de passe" required>
                        <label for="password"></label>
                        <div class="err">
                        <img src="asset/img/eye-slash-regular.svg" id="eye" onclick="changer()"
                             style="width: 40px;margin-left: 105%;margin-top: -2.6rem;" />
                        <span id="error-password"></span>
                        </div>
                    </div>

                    <div class="remembercheck">
                        <input type="checkbox" name="rememberme" id="remember" />
                        <label for="remembercheckbox">Se souvenir de moi</label>
                    </div>

                    <input type="hidden" name="submitted" value="1">
                    <input class="btn" type="submit" value="Se connecter">

                    <div class="motdepasse">
                        <a href="motdepasse.php">Mot de passe oublié ?</a>
                    </div>

                    <div class="social-media2">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>

                </form>



            </div>
        </div>
    </div>
</section>

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
<script src="asset/main-js/login.js"></script>
<?php include ('asset/inc/footer.php');


