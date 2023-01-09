<?php
session_start();
include('asset/inc/pdo.php');
require('asset/inc/function.php');




// récupère les données du formulaire
$nom = cleanXss('nom');
$password = cleanXss('password');
$email = cleanXss('email');

// initialise un tableau pour stocker les erreurs
$errors = [];

// vérifie si le champ "password" est vide
if (empty($nom)) {
    $errors['nom'] = 'Le nom est obligatoire';
}

// vérifie si le champ "password" est vide
if (empty($password)) {
    $errors['password'] = 'Le password est obligatoire';
}

// vérifie si le champ "email" est vide
if (empty($email)) {
    $errors['email'] = 'L\'email est obligatoire';

}
//// vérifie si le champ "password" a au moins 6 caractères
if (!empty($password)) {
    if (strlen($password) < 6) {
        $errors['password'] = 'Le password doit avoir au moins 6 caractères';
    }
    // vérifie si l'adresse email existe déjà dans la base de données
    $sql = "SELECT * FROM user WHERE email = :email";
    $query = $pdo->prepare($sql);
    $query->bindValue(':email', $email);
    $query->execute();

    if ($query->rowCount() > 0) {
        // l'adresse email existe déjà, ajoute une erreur au tableau d'erreurs
        $errors['email'] = 'L\'adresse email existe déjà';
    }
}
// vérifie si le champ "nom" a au moins 2 caractères
if (!empty($nom)) {
    if (strlen($nom) < 2) {
        $errors['nom'] = 'Le nom doit avoir au moins 2 caractères';
    }
}


// vérifie si le champ "email" est valide
if (!empty($email)) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'L\'email est invalide';
    }
}





if (count($errors) > 0) {
    // retourne les erreurs sous forme de tableau associatif
    header('Content-Type: application/json');
    echo json_encode(['errors' => $errors]);
    exit;
}
// Hache le mot de passe
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// insère les données dans la base de données
$sql = "INSERT INTO user (nom, password, email) VALUES (:nom, :password, :email)";
$query = $pdo->prepare($sql);
$query->bindValue(':nom', $nom);
$query->bindValue(':password', $hashedPassword);
$query->bindValue(':email', $email);
$query->execute();

// retourne un message de succès sous forme de tableau associatif
header('Content-Type: application/json');
echo json_encode(['success' => 'L\'inscription a été effectuée avec succès']);
exit;