<?php

if (isset($_GET['url'])) {
    
        if (isset($_GET['cookie_name'])) {
         
           if (isset($_GET['unset'])) {
               
               if ($_GET['unset']){
               
                  unset($_COOKIE[$_GET['cookie_name']]);
                  header("Location: ".$_GET['url']);
               
               }
                   
           } else if (isset($_GET['cookie_value'])) {
             
                if (!isset($_COOKIE[$_GET['cookie_name']])) {
                    setcookie($_GET['cookie_name'], $_GET['cookie_value'], time()+3600*99999999999, '/');
                    
                    header("Location: ".$_GET['url']);
                    
                } else {
                    unset($_COOKIE[$_GET['cookie_name']]);
                    setcookie($_GET['cookie_name'], $_GET['cookie_value'], time()+3600*99999999999, '/');
                    
                    header("Location: ".$_GET['url']);
                    
                 } 
              }
        } else {
           header("Location: ".$_GET['url']); 
        } 
} else {
    echo "Incorrect syntax...";
}

?>