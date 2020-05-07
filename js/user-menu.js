$('.vip-log').click( function () {
     if ($('#fon-user-menu').is(':hidden') && $('#user-menu').is(':hidden')){
        $('#fon-user-menu').addClass('active').fadeIn('fast');
         $('#user-menu').addClass('active').fadeIn('fast');
     }
});

$('#log-auth').click( function () {
     if ($('#fon-user-menu').is(':hidden') && $('#user-menu').is(':hidden')){
        $('#fon-user-menu').addClass('active').fadeIn('fast');
         $('#user-menu').addClass('active').fadeIn('fast');
     }
});

$('#btn-close').click( function () {
     if ($('#user-menu').is(':visible')){
        $('#fon-user-menu').removeClass('active');
         $('#user-menu').removeClass('active');
     }
});