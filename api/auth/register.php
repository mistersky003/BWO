<?php

function checkUserInDB($name, $acountType){
    
    $mysqli = new mysqli("localhost", "bwo","bwo108");
	$mysqli->query(" SET NAMES 'utf8' "); 
	ini_set("display_errors", 1);
    
    $request = $mysqli->query("SELECT * FROM `bwo`.`acount` WHERE `name` = '$name' AND `acountType` = '$acountType'");
    
    if($request->num_rows > 0) {
        return true;
    } else {
        return false;
    }
    
    $mysqli->close();
    
}

if (isset($_GET['token'])){
    
    $token = $_GET['token'];
    
    $mysqli = new mysqli("localhost", "bwo","bwo108");
	$mysqli->query(" SET NAMES 'utf8' "); 
	ini_set("display_errors", 1);
    
    $token_request = $mysqli->query("SELECT * FROM `bwo`.`token` WHERE `token` = '$token'");
    
    if ($token_request->num_rows > 0){
        $open_token = $token_request->fetch_assoc();
        if ($open_token['rank'] > 1) {
           
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = md5($_POST['password']);
            $age = $_POST['age'];
            $growth = $_POST['growth'];
            $weight = $_POST['weight'];
            $isVIP = "false";
            $acountType = "local";
            $token = "user_".uniqid();
            $date = date("Y-m-d H:i:s");
            
           /*
            $name = "Admin";
            $email = "admin@gmail.com";
            $password = md5("123лдт");
            $age = 12;
            $growth = 170;
            $weight = 60;
            $isVIP = false;
            $acountType = "local";
            $token = "user_".uniqid();
            $date = date("Y-m-d H:i:s");
            */
            
            if (!checkUserInDB($name, $acountType)){
            
            $add_request = "INSERT INTO `bwo`.`acount` (`id` ,`name` ,`email` ,`age` ,`growth` ,`weight` ,`password` ,`isVip` ,`acountType` ,`token` ,`date`)VALUES (NULL , '$name', '$email', '$age', '$growth', '$weight', '$password', '$isVIP', '$acountType', '$token', '$date');";
    
    if ($mysqli->query($add_request)){
         echo "{\"name\": \"".$name."\", \"token\": \"".$token."\", \"acountType\": \"".$acountType."\"}";
    }
} else {
          echo "{\"error\": \"04\"}";       
         }
            
        } else {
           echo "{\"error\": \"00\"}"; 
        }
    }
   
} else {
   echo "{\"error\": \"00\"}"; 
}

?>