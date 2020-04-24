<?php

function getNews ($sortType, $count, $language) {

    $mysqli = new mysqli("localhost", "bwo","bwo108");
	$mysqli->query(" SET NAMES 'utf8' "); 
	ini_set("display_errors", 1);
    
    $request = "";
    
    if ($sortType == "new") {
        if ($count != "all") {
           $request = "SELECT * FROM `bwo`.`news_".$language."` ORDER BY `id` DESC LIMIT ".$count;
        } else if ($count == "all") {
           $request = "SELECT * FROM `bwo`.`news_".$language."` ORDER BY `id` DESC";
        }
    } else if ($sortType == "all") {
           
        if ($count != "all") {
           $request = "SELECT * FROM `bwo`.`news_".$language."` LIMIT ".$count;
        } else if ($count == "all") {
           $request = "SELECT * FROM `bwo`.`news".$language."`";
        }
        
    }
    
    $NEWS_REQUEST = $mysqli->query($request);
    
    $response = array();
        while ($row = $NEWS_REQUEST->fetch_array()) {
        $news = array();
        $news["id"] = $row["id"];
        $news["img"] = $row["image"];
        $news["title"] = $row["title"];
        $news["short"] = $row["short"];
        $news["full"] = $row["full"];
        $news["author"] = $row["author"];
        $news["views"] = $row["views"];
        $news["date"] = $row["date"];
        array_push($response, $news);
    }
    
    echo json_encode($response); 
    
}

function getNewsById ($id) {
    
    $mysqli = new mysqli("localhost", "bwo","bwo108");
	$mysqli->query(" SET NAMES 'utf8' "); 
	ini_set("display_errors", 1);
    
    $request = "SELECT * FROM `bwo`.`news_".$language."` WHERE `id` = ".$id;
    
    $REQ = $mysqli->query($request);
    
    if ($REQ->num_rows > 0) {
        
    $response = array();
        $row = $REQ->fetch_assoc();
        $news = array();
        $news["id"] = $row["id"];
        $news["img"] = $row["image"];
        $news["title"] = $row["title"];
        $news["short"] = $row["short"];
        $news["full"] = $row["full"];
        $news["author"] = $row["author"];
        $news["views"] = $row["views"];
        $news["date"] = $row["date"];
        array_push($response, $news);
    echo json_encode($response); 
        
    } else if ($REQ->num_rows < 1) {
        echo "{\"error\": \"04\"}"; 
    }
    
}

function search ($q) {
    
    $mysqli = new mysqli("localhost", "bwo","bwo108");
	$mysqli->query(" SET NAMES 'utf8' "); 
	ini_set("display_errors", 1);
    
    $request = "SELECT * FROM `bwo`.`news".$language."` WHERE `author` LIKE '%$q%' OR  `title` LIKE '%$q%' ORDER BY `id` DESC";
    
    $search_request = $mysqli->query($request);
    
    if ($search_request->num_rows > 0) {
        
        $response = array();
        while ($row = $search_request->fetch_array()) {
        $news = array();
        $news["id"] = $row["id"];
        $news["img"] = $row["image"];
        $news["title"] = $row["title"];
        $news["short"] = $row["short"];
        $news["full"] = $row["full"];
        $news["author"] = $row["author"];
        $news["views"] = $row["views"];
        $news["date"] = $row["date"];
        array_push($response, $news);
    }
    
    echo json_encode($response); 
        
    } else if ($search_request->num_rows < 1) {
        echo "{\"error\": \"04\"}"; 
    }
    
}


if (isset($_GET['token']) && isset($_GET['lang'])){
    
    $token = $_GET['token'];
    
    $mysqli = new mysqli("localhost", "bwo","bwo108");
	$mysqli->query(" SET NAMES 'utf8' "); 
	ini_set("display_errors", 1);
    
    $t = $mysqli->query("SELECT * FROM `bwo`.`token` WHERE `token` = '$token'");
   
    if ($t->num_rows > 0) {
        $res_tok = $t->fetch_assoc();
        if ($res_tok['rank'] > 0) {
            
            $language = $_GET['lang'];
            
            if (isset($_GET['type'])){
                if (isset($_GET['count'])){
                   getNews($_GET['type'], $_GET['count'], $language); 
                } else {
                   getNews($_GET['type'], "all");
                }
            } 
            
            if (isset($_GET['id'])){
                getNewsById($_GET['id'], $language);
            }
            
            if (isset($_GET['q'])) {
                search($_GET['q'], $language);
            }
            
        } else {
            echo "{\"error\": \"00\"}";
        }
    } else {
        echo "{\"error\": \"00\"}";
    }
} else {
    echo "{\"error\": \"00\"}"; 
}
                
          

                
                
                
    
?>