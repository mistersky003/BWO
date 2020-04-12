<?php
$email = $_POST['email'];
$password = $_POST['password'];

$myCurl = curl_init();
curl_setopt_array($myCurl, array(
    CURLOPT_URL => 'http://bodywonly.000webhostapp.com/api/auth/login.php?token=token_user_5e21f198a2716',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => http_build_query(array(
    "email"  => $email,
    "password" => $password,
    ))
));
$response = curl_exec($myCurl);
curl_close($myCurl);
echo $response;
?>