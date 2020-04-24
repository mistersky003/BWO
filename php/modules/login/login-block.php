<?php

$loc = getLocalization("localization/".$_COOKIE['Language']."/login/login.json");

/* Link css */

echo "<link rel=\"stylesheet\" href=\"css/login/login-block.css\">";

echo "<div class=\"all\">
         <div id=\"login-block\">
            <p class=\"title\">".$loc['login-to-your-acount']."</p>
            <input type=\"text\" id=\"email\" placeholder=\"".$loc['email-pl']."\" class=\"input\">
            <input id=\"password\" type=\"password\" placeholder=\"".$loc['password-pl']."\" class=\"input\">
            <p class=\"error\"></p>
            <input type=\"submit\" value=\"".$loc['login-btn']."\" class=\"btn-login\">
            <div id=\"info-block\">
                <a href=\"\">".$loc['forgot-password']."</a>
            </div>
            <div id=\"else-auth\">
                 <p class=\"title\">".$loc['no-acount']."</p>
                 <a class=\"reg-btn\" href=\"register\">".$loc['register-btn']."</a>
            </div>
         </div> 
     </div>";

?>