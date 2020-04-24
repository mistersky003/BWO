<?php

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$age = $_POST['age'];
$sex = $_POST['sex'];
$growth = $_POST['growth'];
$weight = $_POST['weight'];

/*
$name = "оооо";
$email = "admin@gmail.com";
$password = "390393909";
$age = 0;
$sex = 0;
$growth = 0;
$weight = 0;
*/

$myCurl = curl_init();
curl_setopt_array($myCurl, array(
    CURLOPT_URL => 'http://bodywonly.000webhostapp.com/api/auth/register.php?token=token_user_5e21f198a2716',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => http_build_query(array(
    "name"  => $name,
    "email"  => $email,
    "password"  => $password,
    "age"  => $age,
    "sex"  => $sex,
    "growth"  => $growth,
    "weight"  => $weight,
    ))
));
$response = curl_exec($myCurl);
curl_close($myCurl);
echo $response;
?>