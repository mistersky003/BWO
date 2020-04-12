<?php

function getAutoLanguage () {
    
  preg_match_all('/([a-z]{1,8}(?:-[a-z]{1,8})?)(?:;q=([0-9.]+))?/', strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"]), $matches); 
  $langs = array_combine($matches[1], $matches[2]);
  foreach ($langs as $n => $v)
  $langs[$n] = $v ? $v : 1;
  arsort($langs);
  $default_lang = key($langs); 
  
  $lang = "en";    
    
  if (($default_lang == "uk") || ($default_lang == "uk-ua") || ($default_lang == "ua")){
     $lang = "ua";  
  } else if (($default_lang == "ru") || ($default_lang == "ru-ru")) {
      $lang = "ru";
  } else if (($default_lang == "en-us") || ($default_lang == "en") ||($default_lang == "en") || ($default_lang == "en-uk")) {
      $lang = "en";
  }
             
  return $lang;
    
}
function setLangCookie ($l) {
    if (!isset($_COOKIE['Language'])) {
        setcookie("Language", $l, time()+3600*10+10*9999);
    }
}

if (!isset($_COOKIE['Language'])) {
   setLangCookie(getAutoLanguage()); 
}

function getLocalization ($filePath) {
    $json = file_get_contents($filePath);
    return json_decode($json, true);
}
?>