<?php require '/localization/language.php'; ?>

<!DOCTYPE html>
<html lang="ua">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="icon" href="img/havicon.png">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/fonts.css">
     
     <?php
    
        require '/php/modules/news/title-page.php';
        require '/php/modules/head.php';
        require '/php/modules/news/news-block.php';
        require '/php/modules/footer.php';
    
     ?>
     
     
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
         url:"php/testing/search?q=" + q,
         success:function(res){
            let json = JSON.parse(res);
             if (typeof json['error'] !== "undefined") {
                if (json.error == "11"){
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
       NewsController.request(word); 
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