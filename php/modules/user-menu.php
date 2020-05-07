<?php

@$loc = getLocalization("localization/".$_COOKIE['Language']."/user-menu.json");

$response = file_get_contents('http://bodywonly.000webhostapp.com/api/auth/user.php?token=token_user_5e21f198a2716&user_token='.$_COOKIE['user'], true);

    
   $user = json_decode($response, true);
   $name = $user['name'];
   $VIP = $user['isVip'];
   $tkn = $user['token'];

/* Link css */

echo "<link rel=\"stylesheet\" href=\"css/user/menu.css\">";

echo "<div id=\"fon-user-menu\"></div>
         <div id=\"user-menu\">
         <img id=\"btn-close\" src=\"img/icons-menu/close-btn.png\">";
    
    if ($VIP) {
       
        echo "<div id=\"vip-user\">
              <img id=\"crown\" src=\"img/icons-menu/crown.jpg\">
              <img src=\"img/icons-menu/user-icon-standart.png\">
              <p id=\"name-user\">".$name."</p>
          </div>";
        
        echo "<div id=\"menu-links-block\">
              <div id=\"link\">
                  <a href=\"\">".$loc['personal-data']."</a>
                  <a href=\"\">".$loc['my-training-programs']."</a>
                  <a href=\"settings\">".$loc['settings']."</a>
                  <a href=\"logout\">".$loc['exit']."</a>
              </div>
              <div id=\"vip-link\">
                  <p>".$loc['vip-opportunities']."</p>
                  <a href=\"\">".$loc['add-news']."</a>
                  <a href=\"\">".$loc['api-access']."</a>
              </div>
          </div></div>";
        
    } else {
        
        echo "<div id=\"user\">
              <img src=\"img/icons-menu/user-icon-standart.png\">
              <p id=\"name-user\">Mister_Sky</p>
          </div> 
         
          <div id=\"menu-links-block\">
              <div id=\"link\">
                  <a href=\"\">".$loc['personal-data']."</a>
                  <a href=\"\">".$loc['my-training-programs']."</a>
                  <a href=\"settings\">".$loc['settings']."</a>
                  <a href=\"logout\">".$loc['exit']."</a>
              </div></div></div>";
        
    }

   echo "<script src=\"js/jquery.js\"></script>";
   echo "<script src=\"js/user-menu.js\"></script>";

?>