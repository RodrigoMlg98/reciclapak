$(function() {
    var owl = $(".owl-carousel");
    owl.owlCarousel({
        items: 1,
        margin: 10,
        loop: true,
        /* nav: true, */
        autoplay: true,
        autoplayTimeout: 5000,
        animateOut: 'fadeOut',
        autoHeight:true,
        responsiveClass:true,
        responsive : {
            // breakpoint from 0 up
            0:{
                items:1,
                nav:false,
                loop:true
            },
            600:{
                items:1,
                nav:false,
                loop:true
            },
            1000:{
                items:1,
                nav:false,
                loop:true
            }
        }
    });
});

