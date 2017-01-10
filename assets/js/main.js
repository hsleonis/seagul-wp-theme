jQuery(document).ready(function($) {
    var parallax_height = $('.header-parallax').height();
    var opacity_change = (parallax_height>0)?(1/parallax_height):1;

    $(window).on("scroll", function(e) {
        // Header Parallax Opacity
        var new_opacity = 1-opacity_change*$(this).scrollTop();
        $('.header-parallax .bg-parallax').css('opacity', new_opacity);


        // Navbar background color
        if ( $(this).scrollTop() > ($('.header-parallax').height() || 100) ) {
            $('.navbar').addClass("navbar-scrolled");
        } else {
            $('.navbar').removeClass("navbar-scrolled");
        }
    });

});