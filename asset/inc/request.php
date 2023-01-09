<?php
require 'pdo.php';

function getAllUser() {
    global $pdo;
    $sql = "SELECT * FROM user";
    $query = $pdo->prepare($sql);
    $query->execute();
    return $query->fetchAll();
}

function getUserById($id) {
    global $pdo;
    $sql = "SELECT * FROM user WHERE id = :id";
    $query = $pdo->prepare($sql);
    $query->bindValue('id',$id, PDO::PARAM_INT);
    $query->execute();
    return $query->fetch();
}

function updateUser($id, $nom, $prenom, $email)
{
    global $pdo;
    $sql = "UPDATE user SET nom = :nom,prenom = :prenom,email = :email,modified_at = NOW() WHERE id = :id";
    $query = $pdo->prepare($sql);
    $query->bindValue('nom', $nom, PDO::PARAM_STR);
    $query->bindValue('prenom', $prenom, PDO::PARAM_STR);
    $query->bindValue('email', $email, PDO::PARAM_STR);
    $query->bindValue('id', $id, PDO::PARAM_INT);
    $query->execute();
}

