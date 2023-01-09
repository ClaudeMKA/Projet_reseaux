
<?php
//
//
//require('../../front-office/asset/inc/function.php');
//require('../../front-office/asset/inc/pdo.php');
//function getTrames(){
//    return json_decode(file_get_contents("trames.json"), true);
//}
//$trames = getTrames();
//
//// AVANT DE BOUCLER SUR LES 1000
//
//// $trames[0] = première trame du tableau de 1000 trames
//// 1. récup les valeurs intéressantes :
//// --- récup l'ip avec comme chemin "ip > from (ou dest)" $trame['ip']['from']
////$ipSource = array();
////$ipSource =  $trames[0]["ip"]["from"];
////var_dump($ipSource);
////$date = $trames[0]["date"];
////var_dump($date);
//// $octer1 =  $ipSource[0]. $ipSource[1];
////var_dump($octer1);
////$octer2 =  $ipSource[2]. $ipSource[3];
////var_dump($octer2);
////$octer3 =  $ipSource[4]. $ipSource[5];
////var_dump($octer3);
////$octer4 =  $ipSource[6]. $ipSource[7];
////var_dump($octer4);
////$adresseip = hex_to_dec($octer1);
////$adresseip2 = hex_to_dec($octer2);
////$adresseip3 = hex_to_dec($octer3);
////$adresseip4 = hex_to_dec($octer4);
////
////$adresseip_complete = $adresseip. '.'. $adresseip2. '.' .$adresseip3. '.'. $adresseip4;
////var_dump($adresseip_complete);
//
//for($i = 0; $i < count($trames);$i++) { ?>
<!--    --><?php // $name = $trames[$i]["protocol"]["name"]; ?>
<!--    --><?php // $status = $trames[$i]["status"]; ?>
<!--    --><?php //$identification =  $trames[$i]["identification"];?>
<!--    --><?php // $ttl = $trames[$i]["ttl"]; ?>
<!--    --><?php // $from_ = $trames[$i]["protocol"]["ports"]["from"]; ?>
<!--    --><?php // $dest = $trames[$i]["protocol"]["ports"]["dest"]; ?>
<!--    --><?php //$ipSource =  $trames[$i]["ip"]["from"];?>
<!--    --><?php // $octer1 =  $ipSource[0]. $ipSource[1]; ?>
<!--    --><?php // $octer2 =  $ipSource[2]. $ipSource[3]; ?>
<!--    --><?php // $octer3 =  $ipSource[4]. $ipSource[5]; ?>
<!--    --><?php // $octer4 =  $ipSource[6]. $ipSource[7]; ?>
<!--    --><?php // $adresseip1 = hex_to_dec($octer1); ?>
<!--    --><?php // $adresseip2 = hex_to_dec($octer2); ?>
<!--    --><?php // $adresseip3 = hex_to_dec($octer3); ?>
<!--    --><?php // $adresseip4 = hex_to_dec($octer4); ?>
<!--    --><?php //$adresse_ip = $adresseip1. '.'. $adresseip2. '.' .$adresseip3. '.'. $adresseip4; ?>
<!--    --><?php //echo 'la date est '. ' : ' .$name; ?>
<!--    --><?php //echo 'status '. ' ' .$status; ?>
<!--    --><?php //echo 'ttl '. ' : ' .$ttl; ?>
<!--    --><?php //echo ' le from  est '. ' ' .$from_; ?>
<!--    --><?php //echo ' le dest  est '. ' ' .$dest; ?>
<!--    --><?php //$user_id='' ?>
<!--    --><?php //echo 'l\'identifcation est '. ' ' .$identification; ?>
<!--    --><?php //echo 'votre adresse ip est '. ' ' .$adresse_ip; ?>
<!--    --><?php //if ($i >= 0 AND $i <= 249 ){
//        $user_id = 1 ;
//        $sql = "INSERT INTO trames(adresse_ip,identification,status,ttl,dest,from_,name,user_id)
//    VALUES (:adresse_ip,:identification,:status,:ttl,:dest,:from_ ,:name,:user_id)";
//        $query = $pdo->prepare($sql);
//        $query->bindValue('adresse_ip', $adresse_ip, PDO::PARAM_STR);
//        $query->bindValue('identification', $identification, PDO::PARAM_STR);
//        $query->bindValue('status', $status, PDO::PARAM_STR);
//        $query->bindValue('ttl', $ttl, PDO::PARAM_STR);
//        $query->bindValue('dest', $dest, PDO::PARAM_STR);
//        $query->bindValue('from_', $from_, PDO::PARAM_STR);
//        $query->bindValue('name', $name, PDO::PARAM_STR);
//        $query->bindValue('user_id', $user_id, PDO::PARAM_STR);
//        $query->execute();
//    }?>
<!--    --><?php //if ($i >= 250 AND $i <= 499 ){
//        $user_id = 2 ;
//        $sql = "INSERT INTO trames(adresse_ip,identification,status,ttl,dest,from_,name,user_id)
//    VALUES (:adresse_ip,:identification,:status,:ttl,:dest,:from_ ,:name,:user_id)";
//        $query = $pdo->prepare($sql);
//        $query->bindValue('adresse_ip', $adresse_ip, PDO::PARAM_STR);
//        $query->bindValue('identification', $identification, PDO::PARAM_STR);
//        $query->bindValue('status', $status, PDO::PARAM_STR);
//        $query->bindValue('ttl', $ttl, PDO::PARAM_STR);
//        $query->bindValue('dest', $dest, PDO::PARAM_STR);
//        $query->bindValue('from_', $from_, PDO::PARAM_STR);
//        $query->bindValue('name', $name, PDO::PARAM_STR);
//        $query->bindValue('user_id', $user_id, PDO::PARAM_STR);
//        $query->execute();
//    }?>
<!--    --><?php //if ($i >= 500 AND $i <= 749 ){
//        $user_id = 3 ;
//        $sql = "INSERT INTO trames(adresse_ip,identification,status,ttl,dest,from_,name,user_id)
//    VALUES (:adresse_ip,:identification,:status,:ttl,:dest,:from_ ,:name,:user_id)";
//        $query = $pdo->prepare($sql);
//        $query->bindValue('adresse_ip', $adresse_ip, PDO::PARAM_STR);
//        $query->bindValue('identification', $identification, PDO::PARAM_STR);
//        $query->bindValue('status', $status, PDO::PARAM_STR);
//        $query->bindValue('ttl', $ttl, PDO::PARAM_STR);
//        $query->bindValue('dest', $dest, PDO::PARAM_STR);
//        $query->bindValue('from_', $from_, PDO::PARAM_STR);
//        $query->bindValue('name', $name, PDO::PARAM_STR);
//        $query->bindValue('user_id', $user_id, PDO::PARAM_STR);
//        $query->execute();
//    }?>
<!--    --><?php //if ($i >= 750 AND $i <= 1000 ){
//        $user_id = 4 ;
//        $sql = "INSERT INTO trames(adresse_ip,identification,status,ttl,dest,from_,name,user_id)
//    VALUES (:adresse_ip,:identification,:status,:ttl,:dest,:from_ ,:name,:user_id)";
//        $query = $pdo->prepare($sql);
//        $query->bindValue('adresse_ip', $adresse_ip, PDO::PARAM_STR);
//        $query->bindValue('identification', $identification, PDO::PARAM_STR);
//        $query->bindValue('status', $status, PDO::PARAM_STR);
//        $query->bindValue('ttl', $ttl, PDO::PARAM_STR);
//        $query->bindValue('dest', $dest, PDO::PARAM_STR);
//        $query->bindValue('from_', $from_, PDO::PARAM_STR);
//        $query->bindValue('name', $name, PDO::PARAM_STR);
//        $query->bindValue('user_id', $user_id, PDO::PARAM_STR);
//        $query->execute();
//    }?>
<!---->
<!--    <br></br>-->
<?php //} ?>
