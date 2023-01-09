<?php

require('../../../front-office/asset/inc/function.php');

require('../../../front-office/asset/inc/pdo.php');


$sql = "SELECT COUNT(*) as nombre FROM trames WHERE ttl = 100";

$query = $pdo->prepare($sql);
$query->execute();
$log = $query->fetchAll();
showJson($log);




