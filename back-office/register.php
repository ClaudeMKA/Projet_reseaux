<?php
require('../../front-office/asset/inc/pdo.php');
require('../../front-office/asset/inc/function.php');

session_start();
if(isLogged()) {
    header('Location: index.php');
}

if(!isLogged()) {
    header('../front-office/login.php');
}


