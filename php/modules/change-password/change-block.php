<?php

$loc = getLocalization("localization/".$_COOKIE['Language']."/change-password/change-password.json");

/* Link css */

echo "<link rel=\"stylesheet\" href=\"css/login/login-block.css\">";

echo "<div class=\"all\">
         <div id=\"login-block\">
            <p class=\"title\">".$loc['title-change-pass']."</p>
            <input id=\"old-password\" type=\"password\" placeholder=\"".$loc['pr-old-password']."\" class=\"input\">
            <input id=\"new-password\" type=\"password\" placeholder=\"".$loc['pr-new-password']."\" class=\"input\">
            <input id=\"rep-new-password\" type=\"password\" placeholder=\"".$loc['pr-re-new-password']."\" class=\"input\">
            <p class=\"error\"></p>
            <input type=\"submit\" value=\"".$loc['btn-change']."\" class=\"btn-login\">
         </div> 
     </div>";


?>