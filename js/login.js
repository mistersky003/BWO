$('.btn-login').click(function(){
    
    let email = $('#email').val();
    let password = $('#password').val();
    let error = 02;
    
    /*
    if (email.indexOf('@') > 0){
        error = ""
    }
    */
    
    let ms = "<?php echo $loc['errors']['02'] ?>";
    
    alert(ms);
    
});