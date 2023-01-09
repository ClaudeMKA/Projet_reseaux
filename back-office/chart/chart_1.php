<?php


require('../../../front-office/asset/inc/function.php');

require('../../../front-office/asset/inc/pdo.php');


$sql = "SELECT COUNT(*) as 'nombre', name FROM trames WHERE  ttl < 129 / 2 GROUP BY name ";

$query = $pdo->prepare($sql);
$query->execute();
$tramettl = $query->fetchAll();
showJson($tramettl);


