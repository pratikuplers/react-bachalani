var $ = jQuery.noConflict();

$(document).ready(function() {

    $('.banner_slider').slick({
        dots: false,
        arrows: true,
        infinite: true,
        speed: 1000,
        fade: true,
        cssEase: 'linear'
    });

    $('.view_more_projects_slider').slick({
        dots: false,
        arrows: true,
        infinite: true,
        speed: 1000,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
        {
            breakpoint: 767,
            settings: {
            slidesToShow: 2,
            }
        },
        {
            breakpoint: 481,
            settings: {
            slidesToShow: 1,
            }
        }
        ]
    });

    $('.enumenu_ul').responsiveMenu();
      
     // site loader
 $(window).on('load',function() {
    $('html').toggleClass('preload');  
    $('#bachalani-preloader').fadeOut('slow');  
  });



});