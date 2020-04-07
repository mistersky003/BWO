<?php

function getUseIDFromToken($userToken) {
    
    $mysqli = new mysqli("localhost", "bwo","bwo108");
	$mysqli->query(" SET NAMES 'utf8' "); 
	ini_set("display_errors", 1);
    
    $id_request = $mysqli->query("SELECT * FROM `bwo`.`acount` WHERE `token` = '$userToken'");
    
    if ($id_request->num_rows > 0) {
        $res = $id_request->fetch_assoc();
        return $res['id'];
    }
    
    $mysqli->close();
    
}

function checkUser ($userID) {
    
    $mysqli = new mysqli("localhost", "bwo","bwo108");
	$mysqli->query(" SET NAMES 'utf8' "); 
	ini_set("display_errors", 1);
    
    $id_request = $mysqli->query("SELECT * FROM `bwo`.`token` WHERE `userID` = '$userID'");
    
    if ($id_request->num_rows > 0) {
        return true;
    } else {
        return false;
    }
    
    $mysqli->close();
    
}

if(isset($_GET['token'])){
    
    $mysqli = new mysqli("localhost", "bwo","bwo108");
	$mysqli->query(" SET NAMES 'utf8' "); 
	ini_set("display_errors", 1);
    
    $id = getUseIDFromToken($_GET['token']);
    $rank = "1";
    $token = "token_user_".uniqid();
   
   if (!checkUser($id)){
   if ($mysqli->query("INSERT INTO `bwo`.`token` (`token` , `rank` , `userID`) VALUES ('$token', '$rank', '$id');")){
       echo "{\"token\": \"".$token."\"}";
       }
   } else {
       echo "{\"error\": \"05\"}"; 
   }
    
    $mysqli->close();
    
} else {
   echo "{\"error\": \"00\"}"; 
}

?>