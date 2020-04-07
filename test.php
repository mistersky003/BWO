<!DOCTYPE html>
<html lang="en">
<h1>Email</h1>
<input id="2" type="text">
<br>
<h1>Password</h1><br>
<input id="3" type="text">
<br>
<h1 style="color: red;"></h1>
<br>
<input type="submit" value="Log in" id="login">
</html>
<script src="js/jquery.js"></script>
<script>

$('#login').click( function () {
     let a = $("#2").val();
     let b = $("#3").val();
    
     $.ajax({
         url:"https://bodywonly.000webhostapp.com/api/auth/login.php?token=token_user_5e21f198a2716",
         method:"POST",
         data:{email:b, password:b},
         success:function(res){
               alert(res);
            }
        })
     
});

</script>