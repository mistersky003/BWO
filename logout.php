<?php

if (isset($_COOKIE['user'])) {
    setcookie("user", "", time() - 100, "/");
    header('Location: index');
}

?>