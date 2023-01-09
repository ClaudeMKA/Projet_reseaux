<?php
require('../../../front-office/asset/inc/function.php');

require('../../../front-office/asset/inc/pdo.php');


$sql = "SELECT COUNT(*)AS nombre FROM user;";

$query = $pdo->prepare($sql);
$query->execute();
$log = $query->fetchAll();
showJson($log);

