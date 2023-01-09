<?php
include('asset/inc/pdo.php');
require('asset/inc/function.php');
session_start();
// récupère les données du formulaire

$password = cleanXss('password');
$email = cleanXss('email');

$errors = [];

// vérifie si un utilisateur existe avec cet email
$sql = "SELECT * FROM user WHERE email = :email";
$query = $pdo->prepare($sql);
$query->bindValue(':email', $email, PDO::PARAM_STR);
$query->execute();
$user = $query->fetch();

if (!empty($user)) {
    // vérifie si le mot de passe est correct
    if (password_verify($password, $user['password'])) {
        // connexion réussie => enregistre les données de l'utilisateur dans la session
        $_SESSION['user'] = [
            'id' => $user['id'],
            'nom' => $user['nom'],
            'email' => $user['email'],
            'ip' => $_SERVER['REMOTE_ADDR']
        ];
        // si la connexion a réussie, retourne un message de succès
        header('Content-Type: application/json');
        echo json_encode(['success' => "CONNEXION RÉUSSIE"]);
        exit;
    } else {
        $errors['password'] = "MOT DE PASSE INVALIDE";
    }
} else {
    $errors['email'] = "ADRESSE INVALIDE";
}

if (count($errors) > 0) {
    header('Content-Type: application/json');
    echo json_encode(['errors' => $errors]);
    exit;
}



