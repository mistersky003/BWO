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
    
      <?php
           require '/php/modules/change-password/title-page.php';
           require '/php/modules/head.php'; 
           require '/php/modules/change-password/change-block.php'; 
           require '/php/modules/footer.php';
      ?>
    
</html>
<script src="js/jquery.js"></script>
<script src="js/menu.js"></script>
<script>
    
    $('.btn-login').click(function (){
       
        let old_password = $('#old-password').val();
        let new_password = $('#new-password').val();
        let rep_password = $('#rep-new-password').val();
        
        if (old_password.length < 6) {
            
            $.ajax({
                url: 'localization/getErrorText.php?error=09',
                type: 'get',
                success: function(j) {
                   $('.error').text(j);
                }
            });
            
        } else if (new_password.length < 6) {
            
            $.ajax({
                url: 'localization/getErrorText.php?error=09',
                type: 'get',
                success: function(j) {
                   $('.error').text(j);
                }
            });
            
        } else if (rep_password.length < 6) {
            
            $.ajax({
                url: 'localization/getErrorText.php?error=09',
                type: 'get',
                success: function(j) {
                   $('.error').text(j);
                }
            });
            
        } else if (new_password != rep_password) {
            
            $.ajax({
                url: 'localization/getErrorText.php?error=10',
                type: 'get',
                success: function(j) {
                   $('.error').text(j);
                }
            });
              
        } else {
            
            $('.error').text("");
            alert ("Next step...");
            
        }
        
    });
    
</script>