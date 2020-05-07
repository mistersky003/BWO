<?php
if (!isset($_COOKIE['user'])){
    header("Location: index");
}

require '/localization/language.php';

?>

<!DOCTYPE html>
<html lang="ua">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="icon" href="img/havicon.png">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/fonts.css">
<link rel="stylesheet" href="css/settings/settings-block.css">
    
      <?php
           require '/php/modules/settings/title-page.php';
           require '/php/modules/head.php';
           require '/php/modules/user-menu.php'; 
    ?>
    
    <div class="all">
        <div id="settings-block">
        <p class="title">Налаштування</p>
        <div id="change-password-block">
            <p class="sub-title">Зміна паролю</p> 
            <a href="change-password" class="s-link">Змінити пароль</a>
        </div>
    </div>
    </div>
    
    
    <?php 
    require '/php/modules/footer.php';?>
    
</html>
<script src="js/jquery.js"></script>
<script src="js/menu.js"></script>