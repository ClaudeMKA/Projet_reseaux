<?php

function cleanXss($key)
{
    return trim(strip_tags($_POST[$key]));
}


function validationText($err,$data,$keyError,$min,$max)
{
    if (!empty($data)) {
        if (mb_strlen($data) < $min) {
            $err[$keyError] = 'Veuillez renseigner plus de '.$min.' caractères';
        } elseif (mb_strlen($data) > $max) {
            $err[$keyError] = 'Veuillez renseigner moins de '.$max.' caractères';
        }
    } else {
        $err[$keyError] = 'Veuillez renseigner ce champ';
    }
    return $err;
}

function validationEmail($errors,$email,$entry = 'email')
{
    if (!empty($email)) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[$entry] = 'L\'email n\'est pas valide';
        }
    } else {
        $errors[$entry] = 'Ce champ est obligatoire';
    }
    return $errors;
}

function viewError($errors,$key)
{
    if(!empty($errors[$key])) {
        echo $errors[$key];
    }
}

function getPostValue($key, $data = '')
{
    if(!empty($_POST[$key]) ) {
        echo $_POST[$key];
    } elseif(!empty($data)) {
        echo $data;
    }
}
function isLogged()
{
    if (!empty($_SESSION['user']['id'])) {
        if (is_numeric($_SESSION['user']['id'])) {
            if (!empty($_SESSION['user']['nom'])) {
                /*if (!empty($_SESSION['user']['prenom'])) {*/
                if (!empty($_SESSION['user']['email'])) {
                    return true;
                }
                /* }*/
                /* }*/
            }
            return false;
        }
    }
}

function debug($tableau) {
    echo '<pre style="height:150px;overflow-y: scroll;font-size: .7rem;padding: .6rem;font-family: Consolas, Monospace; background-color: #000;color:#fff;">';
    print_r($tableau);
    echo '</pre>';
}


function showJson($data)
{
    header("Content-type: application/json");
    $json = json_encode($data, JSON_PRETTY_PRINT);
    if ($json) {
        die($json);
    } else {
        die('error in json encoding');
    }
}

function hex_to_dec($hexa){ // $hexa = "2F" par exemple, donc un tableau de caractères
    $correspondance = ["0" => 0, "1" => 1, "2" => 2, "3" => 3, "4" => 4, "5" => 5, "6" => 6, "7" => 7, "8" => 8, "9" => 9, "a" => 10, "b" => 11, "c" => 12, "d" => 13, "e" => 14, "f" => 15];
    $dizaine = $hexa[0]; // à la case 0 du tableau, on a "2"
    $unite = $hexa[1]; // à la case 1 du tableau, on a "F"
    return $correspondance[$dizaine] * 16 + $correspondance[$unite]; // 2 * 16 + 15
}

function dec_to_hex($dec){ // $dec = "254" par exemple, donc un tableau de caractères
    $correspondance = [0,1,2,3,4,5,6,7,8,9,'a','b','c','d','e','f'];
    $dizaine = $correspondance[floor($dec / 16)]; // 15.8.... QU'on arrondit (donc 15)
    $unite = $correspondance[$dec % 16]; // 14
    return $dizaine.$unite; // FE
}


