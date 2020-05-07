<?php

/* Link css */
echo "<link rel=\"stylesheet\" href=\"css/news/post.css\">";
echo "<link rel=\"stylesheet\" href=\"css/index/news.css\">";

if (isset($_GET['id'])) {
   
   $request = file_get_contents("http://bodywonly.000webhostapp.com/api/news/get.php?token=token_user_5e21f198a2716&lang=".$_COOKIE['Language']."&id=".$_GET['id'], true);
   
   $json = json_decode($request, true);
    
    for ($i = 0; $i < count($json); $i++){
        
        echo "<title>".$json[$i]['title']."</title>";
        
        echo "<div id=\"post-block\">
              <img src=\"".$json[$i]['img']."\" class=\"img\">
         <p class=\"title\">".$json[$i]['title']."</p>
         <div class=\"full\">".$json[$i]['full']."</div>
         <p class=\"information\">".$json[$i]['views']." &#183; ".$json[$i]['date']."</p>
        </div>";
        
    }
   
    echo "<div id=\"news-block\">
        
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
    
    echo "</div></div>";
    
} else {
    echo "<script>location.href = 'index'</script>";
}

?>