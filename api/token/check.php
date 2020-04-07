<?php

if (isset($_GET['token'])){
    
   $mysqli = new mysqli("localhost", "bwo","bwo108");
	$mysqli->query(" SET NAMES 'utf8' "); 
	ini_set("display_errors", 1);
    
    $token = $_GET['token'];
    
    $request = $mysqli->query("SELECT * FROM `bwo`.`token` WHERE `token` = '$token'");
    
    if ($request->num_rows > 0) {
        $res = $request->fetch_assoc();
        $userID = $res['userID'];
        
        $request_acount = $mysqli->query("SELECT * FROM `bwo`.`acount` WHERE `id` = '$userID'");
        
        if ($request_acount->num_rows > 0){
            $info = $request_acount->fetch_assoc();
            echo "{\"user\": \"".$info['name']."\", \"token\": \"".$_GET['token']."\", \"rank\": \"".$res['rank']."\"}";
        }
        
    } else {
        echo "{\"error\": \"02\"}";
    }
    
    $mysqli->close();
    
} else {
    echo "{\"error\": \"00\"}"; 
}
?>