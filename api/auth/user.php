<?php

if (isset($_GET['token']) && isset($_GET['user_token'])) {
    
    $mysqli = new mysqli("localhost", "bwo","bwo108");
	$mysqli->query(" SET NAMES 'utf8' "); 
	ini_set("display_errors", 1);
    
    $token = $_GET['user_token'];
    
    $request = $mysqli->query("SELECT * FROM `bwo`.`acount` WHERE `token` = '$token'"); 
    
        
    if ($request->num_rows > 0) {
       $res = $request->fetch_assoc();
       echo "{\"id\": \"".$res['id']."\",
       \"name\": \"".$res['name']."\",
       \"email\": \"".$res['email']."\",
       \"age\": \"".$res['age']."\",
       \"growth\": \"".$res['grows']."\",
       \"weight\": \"".$res['weight']."\",
       \"isVip\": \"".$res['isVip']."\",
       \"acountType\": \"".$res['acountType']."\",
       \"token\": \"".$res['token']."\", 
       \"date\": \"".$res['date']."\"}";
    } else {
        echo "{\"error\": \"02\"}";
    }
} else {
    echo "{\"error\": \"00\"}";
}

?>