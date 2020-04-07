<!DOCTYPE html>
<html lang="ua">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="google-signin-scope" content="profile email">
<meta name="google-signin-client_id" content="696524589663-5i8d9cqkv468g6q8624u8e302ddppt3r.apps.googleusercontent.com">
<script src="https://apis.google.com/js/platform.js" async defer></script>
<link rel="icon" href="img/logo.png">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/fonts.css">
<link rel="stylesheet" href="css/head.css">
<link rel="stylesheet" href="css/login/login-block.css">
<link rel="stylesheet" href="css/footer.css">
<title>BWO | Login</title>
    <div id="head">
        <img src="img/logo.png">
        <img src="img/menu.png" id="menu-mobile-icon">
        <div id="menu">
            <a href="programs" >Training programs</a>
            <a href="news" >What's new?</a>
            <a href="login" >Login</a>
            <a href="register" >Register</a>
        </div>
    </div>
     <div id="mobile-menu">
            <a href="programs" >Training programs</a>
            <a href="news" >What's new?</a>
            <a href="login" >Login</a>
            <a href="register" >Register</a>
     </div>
     
     <div class="all">
         <div id="login-block">
            <p class="title">Register your acount</p>
            <input type="text" placeholder="Email" class="input">
            <input type="password" placeholder="Password" class="input">
            <input type="submit" value="Login" class="btn-login">
            <div id="info-block">
                <a href="">Forgot your password?</a>
            </div>
            <div id="else-auth">
                 <p class="title">Continue with</p>
                 <div id="i" class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>
                 <br>
                 <div id="i" class="fb-login-button" data-width="" data-size="large" data-button-type="continue_with" data-auto-logout-link="false" data-use-continue-as="true"></div>
            </div>
         </div> 
     </div>
     
     <div id="footer">
        <div id="footer-block">
           </div>
            <ul>
                <li id="title"><p>Company</p></li>
                <li id="link"><a href="">Contact us</a></li>
                <li id="link"><a>News</a></li>
                <li id="link"><a>API</a></li>
            </ul>
            <ul>
                <li id="title"><p>App</p></li>
                <li id="link"><a>BWO for android</a></li>
            </ul>
            <div id="info-block">
                <p>Copyright © BWO 2020 - <script>var d = new Date();
  var n = d.getFullYear();  document.write(n);</script></p>
            </div>
     </div>
</html>
<script src="js/jquery.js"></script>
<script src="js/menu.js"></script>