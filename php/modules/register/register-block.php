<?php

$loc = getLocalization("localization/".$_COOKIE['Language']."/register/register.json");

/* Link css */

echo "<link rel=\"stylesheet\" href=\"css/login/login-block.css\">";

echo "<div id=\"login-block\">
            <p class=\"title\">".$loc['create-your-own-acount']."</p>
            <input id=\"name\" type=\"text\" placeholder=\"".$loc['pr-name']."\" class=\"input\">
            <input id=\"email\" type=\"text\" placeholder=\"".$loc['pr-email']."\" class=\"input\">
            <input id=\"password\" type=\"password\" placeholder=\"".$loc['pr-password']."\" class=\"input\">
            <input id=\"re-password\" type=\"password\" placeholder=\"".$loc['pr-re-password']."\" class=\"input\">
            <p class=\"title\">".$loc['personal-data']."</p>
            <input id=\"age\" type=\"number\" placeholder=\"".$loc['pr-age']."\" class=\"input\">
            <input id=\"growth\" type=\"number\" placeholder=\"".$loc['pr-growth']."\" class=\"input-data\">
            <input id=\"weight\" type=\"number\" placeholder=\"".$loc['pr-weight']."\" class=\"input-data\">
            <p class=\"title\">".$loc['sex']."</p>
            <select id=\"sex-chose\">
                <option value=\"male\">".$loc['sl-male']."</option>
                <option value=\"female\">".$loc['sl-female']."</option>
            </select>
            <p class=\"error\"></p>
            <input type=\"submit\" value=\"".$loc['btn-register']."\" class=\"btn-login\">
         </div> ";

?>