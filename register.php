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
<link rel="icon" href="img/logo.png">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/fonts.css">

    <?php 
    
       require '/php/modules/register/title-page.php';
       require '/php/modules/head.php';
       require '/php/modules/register/register-block.php';
       require '/php/modules/footer.php';

    ?>
     
</html>
<script src="js/jquery.js"></script>
<script src="js/menu.js"></script>
<script>

    $('.btn-login').click(function() {
        
        $('.error').text("");
        
        var name = $('#name').val();
        var email = $('#email').val();
        var password = $('#password').val();
        var re_password = $('#re-password').val();
        var age = $('#age').val();
        var growth = $('#growth').val();
        var weight = $('#weight').val();
        var sex = $('#sex-chose').val();
        
        if (name.length < 1) {
            
            $.ajax({
                url: 'localization/getErrorText.php?error=07',
                type: 'get',
                success: function(j) {
                   $('.error').text(j);
                }
            });
            
        } else if (email.length < 1) {
            
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
            
        } else if (password.length < 6) {
            
             $.ajax({
                url: 'localization/getErrorText.php?error=09',
                type: 'get',
                success: function(j) {
                   $('.error').text(j);
                }
            });
                   
        } else if (password != re_password) {
            
             $.ajax({
                url: 'localization/getErrorText.php?error=10',
                type: 'get',
                success: function(j) {
                   $('.error').text(j);
                }
            });
                   
        } else if ((age.length < 1) || (growth.length < 1) || (weight.length < 1))  {
            
               $.ajax({
                url: 'localization/getErrorText.php?error=07',
                type: 'get',
                success: function(j) {
                   $('.error').text(j);
                }
            });
                     
        } else {
        
            $.ajax({
               url: 'php/testing/register.php',
               type: 'post',
               data: {name: name, email: email, password: password, age: age, sex: sex, growth: growth, weight: weight},
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
          
                   } else {
                       alert(1);
                     //$('.error').text("You acount had been register!");
                    // location.href = 'redirect?url=login';
                       
                   }
          
              }
             });
            //$('.error').text("You acount had been register!");
        }
        
    });
    
</script>