<?php

@$loc = getLocalization("localization/".$_COOKIE['Language']."/head.json");

/*Link css */

echo "<link rel=\"stylesheet\" href=\"css/head.css\">";

/* Доробити провірку авторизації */

/*Оригінал*/

/*

1

<div id="head">
        <a href=\"index\"><img src="img/logo.png"></a>
        <img src="img/menu.png" id="menu-mobile-icon">
        <a class="log" href="login" >Login</a>
        <div id="menu">
            <a href="programs" >Training programs</a>
            <a href="news" >What's new?</a>
        </div>
    </div>
     <div id="mobile-menu">
            <a href="programs" >Training programs</a>
            <a href="news" >What's new?</a>
     </div>
     
     
2

<div id="head">
        <a href=\"index\"><img src="img/logo.png"></a>
        <img src="img/menu.png" id="menu-mobile-icon">
        <a class="log" href="user?id=0" >User</a>
        <div id="menu">
            <a href="programs" >Training programs</a>
            <a href="news" >What's new?</a>
        </div>
    </div>
     <div id="mobile-menu">
            <a href="programs" >Training programs</a>
            <a href="news" >What's new?</a>
     </div>

*/

if (isset($_COOKIE['user'])) {
    
    /*$myCurl = curl_init();
      curl_setopt_array($myCurl, array(
      CURLOPT_URL => 'http://bodywonly.000webhostapp.com/api/auth/user.php?token=token_user_5e21f198a2716&user_token='.$_COOKIE['user'],
   ));
    
   $response = curl_exec($myCurl);
   curl_close($myCurl);*/
    
   $response = file_get_contents('http://bodywonly.000webhostapp.com/api/auth/user.php?token=token_user_5e21f198a2716&user_token='.$_COOKIE['user'], true);

    
   $user = json_decode($response, true);
   $name = $user['name'];
   $VIP = $user['isVip'];
   $tkn = $user['token'];

    
    if ($VIP) {
      
       echo "<div id=\"head\">
        <a href=\"index\"><img src=\"img/logo.png\"></a>
        <img src=\"img/menu.png\" id=\"menu-mobile-icon\">
        <a class=\"vip-log\" href=\"user?token=".$tkn."\" >".$name."</a>
        <div id=\"menu\">
            <a href=\"programs\" >".$loc['training-programs']."</a>
            <a href=\"news\" >".$loc['whats-new']."</a>
        </div>
    </div>
     <div id=\"mobile-menu\">
            <a href=\"programs\" >".$loc['training-programs']."</a>
            <a href=\"news\" >".$loc['whats-new']."</a>
     </div>"; 
        
    } else {
        
        echo "<div id=\"head\">
        <a href=\"index\"><img src=\"img/logo.png\"></a>
        <img src=\"img/menu.png\" id=\"menu-mobile-icon\">
        <a class=\"log\" href=\"user?token=".$tkn."\">".$name."</a>
        <div id=\"menu\">
            <a href=\"programs\" >".$loc['training-programs']."</a>
            <a href=\"news\" >".$loc['whats-new']."</a>
        </div>
    </div>
     <div id=\"mobile-menu\">
            <a href=\"programs\" >".$loc['training-programs']."</a>
            <a href=\"news\" >".$loc['whats-new']."</a>
     </div>";
        
    }
    
    
} else {
    
    echo "<div id=\"head\">
        <a href=\"index\"><img src=\"img/logo.png\"></a>
        <img src=\"img/menu.png\" id=\"menu-mobile-icon\">
        <a class=\"log\" href=\"login\" >".$loc['login']."</a>
        <div id=\"menu\">
            <a href=\"programs\" >".$loc['training-programs']."</a>
            <a href=\"news\" >".$loc['whats-new']."</a>
        </div>
    </div>
     <div id=\"mobile-menu\">
            <a href=\"programs\" >".$loc['training-programs']."</a>
            <a href=\"news\" >".$loc['whats-new']."</a>
     </div>";
    
}


?>