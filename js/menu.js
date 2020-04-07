$('#menu-mobile-icon').click( function () {
     if ($('#mobile-menu').is(':hidden')){
        $('#mobile-menu').addClass('active').fadeIn('fast');
     } else {
         $('#mobile-menu').removeClass('active');
     }
});