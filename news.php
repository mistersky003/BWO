<!DOCTYPE html>
<html lang="ua">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="icon" href="img/logo.png">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/fonts.css">
<link rel="stylesheet" href="css/news/news-block.css">
<link rel="stylesheet" href="css/footer.css">
     
     <?php
    
        require '/php/modules/news/title-page.php';
        require '/php/modules/head.php';
     
     ?>
     
     
     <div id="search-block">
             <input type="text" placeholder="Search" id="word">
             <p class="res-error">Nothing found</p>
         </div>
         
    <div class="search" id="news-block">
    </div>
     
     <div class="all" id="news-block">
       
    <!--   
     <div id="empty-block">
         <img src="img/empty-box.png">
         <p>No news found</p>
     </div>
    -->    
      
       
    <!--     
      
        <a href="">
         <div id="news">
             <div id="fon"></div>
             <img id="icon" src="img/a-man-who-is-experiencing-masturbation-before-a-workout.jpg">
                <div id="text-block">
                 <p class="title">Lorem ipsum dolor sit amet, consectetur титдои</p>
                 <p class="short">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati laudantium recusandae, fugiat dolore maxime veritatis totam, mollitia porro alias illo adipisci fugit nisi est repellat.
                 <p class="statictic">10000 &#183; 20.02.2020</p>
             </div>
             
         </div>
        </a>
         
       <a href=""> 
        <div id="news">
             <img id="icon" src="img/program_wallpaper_1.jpg">
                <div id="text-block">
                 <p class="title">Lorem ipsum dolor sit amet, consectetur</p>
                 <p class="short">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati laudantium recusandae, fugiat dolore maxime veritatis totam, mollitia porro alias illo adipisci fugit nisi est repellat. 
                 <p class="statictic">10000 &#183; 20.02.2020</p>
             </div>
             
         </div>
        </a>
         
        <a href="">  
        <div id="news">
             <img id="icon" src="img/a-man-who-is-experiencing-masturbation-before-a-workout.jpg">
                <div id="text-block">
                 <p class="title">Lorem ipsum dolor sit amet, consectetur</p>
                 <p class="short">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati laudantium recusandae, fugiat dolore maxime veritatis totam, mollitia porro alias illo adipisci fugit nisi est repellat.
                 <p class="statictic">10000 &#183; 20.02.2020</p>
             </div>
             
         </div>
        </a> 
    -->  
        
        <?php require_once 'php/news_list.php'; ?>
         
     </div>
     
    
     <div id="footer">
        <div id="footer-block">
           </div>
            <ul>
                <li id="title"><p>Company</p></li>
                <li id="link"><a href="">Contact us</a></li>
                <li id="link"><a href="">News</a></li>
                <li id="link"><a href="">API</a></li>
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
<script src="js/news-controller.js"></script>
<script src="js/errors.js"></script>
<script>  
    
function defaultLoad () {
    $(".search").empty();
    $(".search").hide();
    $(".all").show();
    $(".res-error").hide();
}
    
var NewsController = {
  
    isLoad: false,
    data: null,
    
    append: function () {
       if (this.data != null) {
           let json = JSON.parse(this.data);
           
           $(".search").empty();
           
           for (i=0; i<json.length; i++){
            
               let html = '<a href=\"post?id=' + json[i]['id'] + '\"><div id="news"><img id="icon" src="'+ json[i]['img'] +'"><div id="text-block"><p class="title">'+ json[i]['title'] +'</p><p class="short">'+ json[i]['short'] +'</p><p class="statictic">'+ json[i]['views'] +' &#183; '+ json[i]['date'] +'</p></div></div></a>';
               
               $('.search').append($(html));
               
           }
           
           $('.search').show();
           $('.all').hide();
           
       } 
    },
    
    request: function (q) {
       
        $.ajax({
         url:"http://localhost/BWO/api/news/get.php?token=bwo_125487w2&q=" + q,
         success:function(res){
            let json = JSON.parse(res);
             if (typeof json['error'] !== "undefined") {
                if (json.error == "04"){
                   $('.res-error').show();   
                   $('.all').hide();   
                }
             } else {
                $('.res-error').hide(); 
                NewsController.data = res;
                NewsController.append();
             }
          }
        });
        
    },
    
    getData: function () {
        if (data != null){
            return data;
        }
    }
    
};
    
$( "#word" ).on('input', function(e) {
    let word = $('#word').val();
    if (word.length > 2) {
       NewsController.request($('#word').val()); 
    } else if (word.length < 3) {
        $('.search').hide();
        $('.all').show();
        $('.res-error').hide();
    }
});
    
$(document).ready(function() {
    defaultLoad();
});
    
</script>