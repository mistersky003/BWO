<?php

$VIP = true;

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

if (isset($_COOKIE['auth_token'])) {
    
    if ($VIP) {
      
       echo "<div id=\"head\">
        <a href=\"index\"><img src=\"img/logo.png\"></a>
        <img src=\"img/menu.png\" id=\"menu-mobile-icon\">
        <a class=\"vip-log\" href=\"user?id=0\" >User</a>
        <div id=\"menu\">
            <a href=\"programs\" >Training programs</a>
            <a href=\"news\" >What's new?</a>
        </div>
    </div>
     <div id=\"mobile-menu\">
            <a href=\"programs\" >Training programs</a>
            <a href=\"news\" >What's new?</a>
     </div>"; 
        
    } else {
        
        echo "<div id=\"head\">
        <a href=\"index\"><img src=\"img/logo.png\"></a>
        <img src=\"img/menu.png\" id=\"menu-mobile-icon\">
        <a class=\"log\" href=\"user?id=0\" >User</a>
        <div id=\"menu\">
            <a href=\"programs\" >Training programs</a>
            <a href=\"news\" >What's new?</a>
        </div>
    </div>
     <div id=\"mobile-menu\">
            <a href=\"programs\" >Training programs</a>
            <a href=\"news\" >What's new?</a>
     </div>";
        
    }
    
    
} else {
    
    echo "<div id=\"head\">
        <a href=\"index\"><img src=\"img/logo.png\"></a>
        <img src=\"img/menu.png\" id=\"menu-mobile-icon\">
        <a class=\"log\" href=\"login\" >Login</a>
        <div id=\"menu\">
            <a href=\"programs\" >Training programs</a>
            <a href=\"news\" >What's new?</a>
        </div>
    </div>
     <div id=\"mobile-menu\">
            <a href=\"programs\" >Training programs</a>
            <a href=\"news\" >What's new?</a>
     </div>";
    
}


?>