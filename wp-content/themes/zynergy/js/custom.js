$(function(){
    $('#enter').click(function(){
        $(this).fadeOut();
        $('#logo').addClass('toTop');
        $('.landing-banner').addClass('toHide');
        setTimeout(function(){
            $('#nav-icon').css('opacity', '1');
        }, 3000);
        setTimeout(function(){
            $('#header-instagram').css('opacity', '1');
        }, 3500);
        $('main').fadeIn(3500)
    })
    $('#nav-icon').click(function (e) {
        e.preventDefault();
        $(this).toggleClass('open');
        $('.menu-item').toggleClass('open');
        $('.site-header').removeClass('contact-header');
        $('#menu-item-54 a').removeClass('active');
        $('.contact-overlay').removeClass('active');
    })
    $('#menu-item-54 a').on('click', function (e) {
        e.preventDefault();
        $(this).addClass('active');
        $('.contact-overlay').addClass('active');
        $('.site-header').addClass('contact-header');
        $('#menu-item-53 a').removeClass('active');
    })
    $('#menu-item-53').on('click', function (e) {
        e.preventDefault();
        $(this).addClass('active');
        $('.site-header').removeClass('contact-header');
        $('#menu-item-54 a').removeClass('active');
        $('.contact-overlay').removeClass('active');
        $('html, body').animate({
            scrollTop: $("#projects").offset().top
        }, 2000);
    })
})
