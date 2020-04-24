<?php

$loc = getLocalization("localization/".$_COOKIE['Language']."/news/news.json");

/* Link css */

echo "<link rel=\"stylesheet\" href=\"css/news/news-block.css\">";

echo "<div id=\"search-block\">
             <input type=\"text\" placeholder=\"".$loc['pr-search']."\" id=\"word\">
             <p class=\"res-error\">".$loc['error-text']."</p>
         </div>
         
    <div class=\"search\" id=\"news-block\">
    </div>";

echo "<div class=\"all\" id=\"news-block\">";

 $response = file_get_contents("http://bodywonly.000webhostapp.com/api/news/get.php?token=token_user_5e21f198a2716&lang=".$_COOKIE['Language']."&type=new", true);

 $json = json_decode($response, true);   

   for ($i = 0; $i < count($json); $i++) {
       
       echo "<a href=\"post?id=".$json[$i]['id']."\">
         <div id=\"news\">
             <div id=\"fon\"></div>
             <img id=\"icon\" src=\"".$json[$i]['img']."\">
                <div id=\"text-block\">
                 <p class=\"title\">".$json[$i]['title']."</p>
                 <p class=\"short\">".$json[$i]['short']."</p>
                 <p class=\"statictic\">".$json[$i]['views']." &#183; ".$json[$i]['date']."</p>
             </div>
             
         </div>
        </a>";
       
   }


echo "</div>";

?>