<?php

$loc = getLocalization("localization/".$_COOKIE['Language']."/index/news-block.json");

/* Link css */

echo "<link rel=\"stylesheet\" href=\"css/index/news.css\">";

echo "<div id=\"news-block\">
        
        <p class=\"title-block-new\">".$loc['title-news']."</p>
        
        <div id=\"nws-all\">";
            
            
           $response = file_get_contents("http://bodywonly.000webhostapp.com/api/news/get.php?token=token_user_5e21f198a2716&lang=".$_COOKIE['Language']."&type=new&count=3", true); 
            
           $json = json_decode($response, true);   

           for ($i = 0; $i < count($json); $i++) {

       echo "<a href=\"post?id=".$json[$i]['id']."\">
         <div id=\"news\">
             <div id=\"op\"></div>
             <img src=\"".$json[$i]['img']."\" class=\"icon\">
             <p class=\"title\">".$json[$i]['title']."</p>
         </div>
         </a>";
         
         }
         
         
        echo "</div><div id=\"btn-c\"><a href=\"news\" class=\"more\">".$loc['btn-more']."</a> 
        </div></div>";



?>