<?php

if (isset($_GET['error'])) {
    $json = file_get_contents($_COOKIE['Language']."/errors.json");
    $res = json_decode($json, true);
    echo $res[$_GET['error']];
}

?>