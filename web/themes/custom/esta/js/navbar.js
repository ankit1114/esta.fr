$(function(){
    $('.navbar-toggle, nav').click(function(){
        $('.navbar-toggle').toggleClass('navbar-on');
        $('nav').fadeToggle();
        $('nav').removeClass('nav-hide');
    });
});