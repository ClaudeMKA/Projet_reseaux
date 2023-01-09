<?php
require('../../../front-office/asset/inc/function.php');

require('../../../front-office/asset/inc/pdo.php');


$sql = "SELECT name, COUNT(*) as nombre FROM trames GROUP BY name";

$query = $pdo->prepare($sql);
$query->execute();
$log = $query->fetchAll();
showJson($log);




