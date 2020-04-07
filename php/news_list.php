<?php

$mysqli = new mysqli("localhost", "bwo","bwo108");
	$mysqli->query(" SET NAMES 'utf8' "); 
	ini_set("display_errors", 1);
    
    
    $request = "SELECT * FROM `bwo`.`news` ORDER BY `id` DESC";
       
    $NEWS_REQUEST = $mysqli->query($request);

        while ($row = $NEWS_REQUEST->fetch_array()) {
       
            echo "<a href=\"post?id=".$row['id']."\">
         <div id=\"news\">
             <div id=\"fon\"></div>
             <img id=\"icon\" src=\"".$row['image']."\">
                <div id=\"text-block\">
                 <p class=\"title\">".$row['title']."</p>
                 <p class=\"short\">".$row['short']."</p>
                 <p class=\"statictic\">".$row['views']." &#183; ".$row['date']."</p>
             </div>
             
         </div>
        </a>";
       
    }

$mysqli->close();


?>