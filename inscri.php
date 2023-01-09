<?php
include('asset/inc/pdo.php');
require('asset/inc/function.php');


if(isLogged()){
    header('Location: index.php');
}
include('asset/inc/header2.php');
?>
<section id="regis">

    <div class="wrap3">

        <div class="form_regis">

            <div class="form_enregistrer">
                <h2 class="title">S'inscrire</h2>
                <form id="inscription-form"  method="post">

                    <div class="form-group">
                        <i class="fas fa-user"></i>
                        <input type="text" id="nom" name="nom" placeholder="Nom"><br>
                        <span id="error-nom"></span><br>
                        <label for="nom"></label>
                    </div>



                    <div class="form-group">
                        <i class="fas fa-envelope"></i>
                        <input type="text" id="email" name="email" placeholder="Email" ><br>
                        <span id="error-email"></span><br>
                        <label for="email"></label>

                    </div>

                    <div class="form-group">
                        <i class="fas fa-lock"></i>
                        <input type="password" id="password" name="password" placeholder="Mot de passe"><br>
                        <span id="error-password"></span><br>
                        <label for="password"></label>

                    </div>

                    <div class="g-recaptcha" style="margin-left: 7%" data-sitekey="6Le9p4QjAAAAAN8pjYnVn-88EmoCOnLhqc2HGWDf">captcha</div>
                    <!--    <span class="errors">--><?php //viewError($errors, 'captcha');  ?><!--</span>-->
                    <div class="checkmark"><br>
                        <input type="checkbox" id="check" name="check" value="yes"/>
                        <label for="check"> J'ai lu et j'accepte les <a href="cgu.php" >Conditions Génerale d'utilisation</a></label>
                        <!--        <span class="errors">--><?php //viewError($errors, 'condition');  ?><!--</span>-->
                    </div>
                    <div class="incr">
                        <input type="submit" class="btn" value="S'inscrire" />
                    </div>
                    <div class="social-media">
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
            <div class="connecter">

                <h3>L'un d'entre nous ?</h3>
                <p>
                    Connectez vous pour avoir accès aux informations de votre réseau !
                </p>
                <a href="login.php">Se connecter</a>

                <img src=asset/img/log.svg class="image1" style="width: 70%; margin-top: 5%" alt="" />

                <div>
                </div>

</section>
<script src="asset/main-js/js.js"></script>
<?php include('asset/inc/footer.php');
?>


