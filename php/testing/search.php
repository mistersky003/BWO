<?php
/*
   $url = "http://bodywonly.000webhostapp.com/api/news/get.php?token=token_user_5e21f198a2716&lang=".$_COOKIE['Language']."&q=".$_GET['q'];

   $myCurl = curl_init();
      curl_setopt_array($myCurl, array(
      CURLOPT_URL => $url,
   ));
    
   $response = curl_exec($myCurl);
   curl_close($myCurl);
   echo $response; 
   */

   $response = file_get_contents("http://bodywonly.000webhostapp.com/api/news/get.php?token=token_user_5e21f198a2716&lang=".$_COOKIE['Language']."&q=".$_GET['q'], true);

   echo $response;
?>