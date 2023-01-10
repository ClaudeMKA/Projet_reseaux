<?php

//if (!empty($_SESSION)){
//    header('Location: 404.php');
//}
require('asset/inc/pdo.php');
require('asset/inc/function.php');
require('asset/inc/request.php');


$errors=array();

if (!empty($_POST['submit'])){
    $email=cleanXss('email');
    $errors=validationEmail($errors, $email);

    if (empty($errors['email'])){
        $sql= "SELECT email,token FROM user WHERE email= :email";
        $query= $pdo->prepare($sql);
        $query->bindValue('email', $email);
        $query->execute();
        $verifEmail= $query->fetch();
        if (!empty($verifEmail)){
            echo '<a href="modifpassword.php?email='.urlencode($verifEmail['email']).'&token='.urlencode($verifEmail['token']).'">Cliquer ici pour modifier votre mot de passe</a>';
            die();

        }else{
            $errors['email']='Aucune adresse mail n\'existe à ce nom*';
        }
    }
}

include('asset/inc/header.php'); ?>
    <div id="loading">
        <img src="asset/img/gif-loading.webp" alt="Chargement en cours">
        <p>Chargement<span id="dots">...</span></p>
    </div>
    <section id="oublie">
        <div class="wrap4">
            <div class="form_oublie">
                <h1>Mot de passe oublié ?</h1>
                <form action="" method="post">
                    <div class="email_oublie oublie">
                        <input class="email_css" type="email" name="email" id="email" placeholder="Entrez votre adresse e-mail">
                        <span><?php viewError($errors, 'email'); ?></span>
                    </div>
                    <div class="submit_oublie oublie">
                        <input class="submit_css" type="submit" name="submit" id="submit" value="valider">
                    </div>
                </form>
            </div>
        </div>
    </section>
<?php
include('asset/inc/footer.php');

