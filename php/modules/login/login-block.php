<?php

$loc = getLocalization("localization/".$_COOKIE['Language']."/login/login.json");

/* Link css */

echo "<link rel=\"stylesheet\" href=\"css/login/login-block.css\">";

echo "<div class=\"all\">
         <div id=\"login-block\">
            <p class=\"title\">Login to your acount</p>
            <input type=\"text\" id=\"email\" placeholder=\"Email\" class=\"input\">
            <input id=\"password\" type=\"password\" placeholder=\"Password\" class=\"input\">
            <p class=\"error\"></p>
            <input type=\"submit\" value=\"Login\" class=\"btn-login\">
            <div id=\"info-block\">
                <a href=\"\">Forgot your password?</a>
            </div>
            <div id=\"else-auth\">
                 <p class=\"title\">No account?</p>
                 <a class=\"reg-btn\" href=\"register\">Register</a>
            </div>
         </div> 
     </div>";

?>