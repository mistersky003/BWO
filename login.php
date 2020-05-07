<?php 
if (isset($_COOKIE['user'])){
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
    
    require '/php/modules/login/title-page.php';
    require '/php/modules/head.php';
    require '/php/modules/login/login-block.php';
    require '/php/modules/footer.php';

    ?>
    
</html>
<script src="js/jquery.js"></script>
<script src="js/menu.js"></script>
<script>
    
    function getErrorText (code) {
        $.ajax({
          url: 'localization/getErrorText.php?error=' + code,
          type: 'get',
          success: function(j) {
              return j;
          }
        });
    }

    $('.btn-login').click(function(){
        
    $('.error').text("");
    
    let email = $('#email').val();
    let password = $('#password').val();
        
    if ((email.length < 1) || (password.length < 1)) {
       $.ajax({
                url: 'localization/getErrorText.php?error=07',
                type: 'get',
                success: function(j) {
                   $('.error').text(j);
                }
        });
    } else if (email.indexOf('@') < 1) {
       $.ajax({
                url: 'localization/getErrorText.php?error=08',
                type: 'get',
                success: function(j) {
                   $('.error').text(j);
                }
        });
    } else {
    
    $.ajax({
       url: 'php/testing/login.php',
       type: 'post',
       data: {email: email, password: password},
       dataType: 'json',
       success: function(json) {
          if (typeof json['error'] !== "undefined") {   
             $.ajax({
                url: 'localization/getErrorText.php?error=' + json.error,
                type: 'get',
                success: function(j) {
                   $('.error').text(j);
                }
             });
          }else{
             
              location.href = 'redirect?url=index&cookie_name=user&cookie_value=' + json.token;
              
          }
          
       }
    });
        
    }
});

</script>