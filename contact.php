<?php

require ('asset/inc/function.php');

$errors = [];

if (!empty($_POST['submitted'])){
    $email = cleanXss('email');
    $subject = cleanXss('subject');
    $message = cleanXss('message');
    $errors = validationText($errors, $email, 'email', 2, 100);
    $errors = validationText($errors, $subject, 'subject', 2, 150);
    $errors = validationText($errors, $message, 'message', 2, 500);

}
$email = json_encode('email');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require ('vendor/src/Exception.php');
require ('vendor/src/PHPMailer.php');
require ('vendor/src/SMTP.php');


$mail = new PHPMailer(true);

$output = '';
$success = false;


if (isset($_POST['submitted'])) {
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $captcha = $_POST['g-recaptcha-response'];
    if (count($errors) === 0){
        try {
            $mail->isSMTP();
            $mail->Host = 'localhost';
            $mail->SMTPAuth = false;
            $mail->Port = 1025;

            $mail->setFrom("$email");
            $mail->addAddress('link.network@contact.com');

            $mail->isHTML(true);
            $mail->Subject = "$subject";
            $mail->Body = "$message";

            $mail->send();
            $output = '<div class="alert alert-success">
                   <h3>Merci</h3>
                </div>';
        } catch (Exception $e) {
//           echo 'error';
            $output = '<div class="alert alert-error">
         <h3>Veuillez remplir votre message correctement</h3>
        </div>';
        }
//        $success = true;
        header('Location: contact.php');
    }
    if (empty($captcha)){
        $errors['captcha']='Veuillez cocher cette case.';

    }
    if(empty($condition)) {
        $errors['condition'] = 'Veuillez accepter les Conditions Génerale d\'utilisation.';
    }
}


include ('asset/inc/header2.php'); ?>
<?php if ($success) {
    '<div class="msg">Merci, votre message à bien été reçu !</div>';
} else { ?>
    <section id="contact">
        <div id="container_id" class="container">
            <div id="forms-container_id" class="forms-container">
                <div id="signin-signup_id" class="signin-signup">
                    <form action="#" method="post" class="sign-in-form" id="form_id" novalidate>
                        <h3 id="title_id" class="title">Contact</h3>

                        <div id="input-field_id" class="input-field" >
                            <label for="email"></label>
                            <input placeholder="E-Mail" type="email" name="email" id="email" class="form-control" required>
                            <span id="error" class="errors"><?php viewError($errors, 'email'); ?></span>
                        </div>

                        <div id="input-field_id" class="input-field">
                            <label for="subject"></label>
                            <input placeholder="Titre"  type="text" name="subject" id="subject" class="form-control" required>
                            <span id="error" class="errors"><?php viewError($errors, 'subject'); ?></span>
                        </div>

                        <div id="input-text_id" class="input-text">
                            <label for="message"></label>
                            <textarea placeholder="Message" name="message" id="message" rows="5" class="form-control" required></textarea>
                            <span id="error" class="errors"><?php viewError($errors, 'message'); ?></span>
                        </div>

                        <div  id="recaptcha_id" class="g-recaptcha" data-sitekey="6Le9p4QjAAAAAN8pjYnVn-88EmoCOnLhqc2HGWDf"></div>
                        <span id="error" class="errors"><?php viewError($errors, 'captcha');  ?></span>

                        <div id="checkmark_id" class="checkmark">
                            <label for="check"> J'ai lu et j'accepte les <a href="cgu.php" >Conditions Génerale d'utilisation</a></label>
                            <input type="checkbox" id="check" name="check" value="yes"/>
                            <span id="error" class="errors"><?php viewError($errors, 'condition');  ?></span>
                        </div>

                        <div id="form_btn_id" class="form_btn">
                            <input type="submit" id="btn_id" class="btn" name="submitted" value="Envoyer" >
                        </div>

                        <div id="social-media_id" class="social-media">
                            <a href="#" class="social-icon" id="social-icon_id">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-icon" id="social-icon_id">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="social-icon" id="social-icon_id">
                                <i class="fab fa-google"></i>
                            </a>
                            <a href="#" class="social-icon" id="social-icon_id">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                    </form>
                    <?php  } ?>
                </div>
            </div>
            <div id="panels-containe_id" class="panels-container">
                <div id="panel_left-panel_id" class="panel left-panel">
                    <div id="content_id" class="content">
                        <h3>Nouveau ici ?</h3>
                        <p>
                            Venez vous inscrire pour en savoir plus sur votre réseau avec Link Network !
                        </p>
                        <button class="btn transparent" id="sign-up-btn">
                            <a href="register.php">S'inscrire</a>
                        </button>
                    </div>
                    <img src="asset/img/undraw_letter_re_8m03.svg" class="image"/>
                </div>
            </div>
        </div>
    </section>
    <script src="contact.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<?php include ('asset/inc/footer.php');

