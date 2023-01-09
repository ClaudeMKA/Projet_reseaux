<?php


require('../../../front-office/asset/inc/function.php');

require('../../../front-office/asset/inc/pdo.php');


$sql = "SELECT * FROM `trames` ORDER BY RAND() LIMIT 5";

$query = $pdo->prepare($sql);
$query->execute();
$log = $query->fetchAll();
showJson($log);
