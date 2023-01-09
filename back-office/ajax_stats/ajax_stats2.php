<?php
require('../../../front-office/asset/inc/function.php');

require('../../../front-office/asset/inc/pdo.php');


$sql = "SELECT COUNT(DISTINCT adresse_ip) as nombre FROM trames";

$query = $pdo->prepare($sql);
$query->execute();
$log = $query->fetchAll();
showJson($log);



