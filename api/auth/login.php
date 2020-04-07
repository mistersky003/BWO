<?php

if (isset($_GET['token'])) {
    
    $token = $_GET['token'];
    
    $mysqli = new mysqli("localhost", "bwo","bwo108");
	$mysqli->query(" SET NAMES 'utf8' "); 
	ini_set("display_errors", 1);
    
    $t = $mysqli->query("SELECT * FROM `bwo`.`token` WHERE `token` = '$token'");
   
    if ($t->num_rows > 0) {
        $res_tok = $t->fetch_assoc();
        if ($res_tok['rank'] > 1) {
            
            
       if (isset($_POST['email']) && (isset($_POST['password']))){
    
    $mysqli = new mysqli("localhost", "bwo","bwo108");
	$mysqli->query(" SET NAMES 'utf8' "); 
	ini_set("display_errors", 1);

    $email = $_POST['email'];
    $pass = md5($_POST['password']);

    $request = $mysqli->query("SELECT * FROM `bwo`.`acount` WHERE `email` = '$email' AND `password` = '$pass'");
    
    if ($request->num_rows > 0) {
        $result = $request->fetch_assoc();
        echo "{\"name\": \"".$result['name']."\", \"token\": \"".$result['token']."\", \"acountType\": \"".$result['acountType']."\"}";
    } else {
        echo "{\"error\": \"02\"}";
    }
    
    $mysqli->close();
    
    } else {
       echo "{\"error\": \"01\"}";
       exit;
       }
            
        } else {
           echo "{\"error\": \"00\"}"; 
        }
    } else {
        echo "{\"error\": \"00\"}";
    }    
    
   // $mysqli->close();
    
} else {
    echo "{\"error\": \"00\"}";
}
?>