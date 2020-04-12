<?php

if (isset($_GET['token']) && isset($_GET['user_token']) {
 
   $myCurl = curl_init();
      curl_setopt_array($myCurl, array(
      CURLOPT_URL => 'http://bodywonly.000webhostapp.com/api/auth/login.php?token=token_user_5e21f198a2716',
   ));
    
   $response = curl_exec($myCurl);
   curl_close($myCurl);
   echo $response;   
}
?>