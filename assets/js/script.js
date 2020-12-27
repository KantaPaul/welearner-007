jQuery(function($){
    "use stict"
    if ($('.counter_up_count').length > 0) {
        $('.counter_up_count').counterUp({
            delay: 10,
            time: 1000
        });
    }

    if ($('.header-fixed').length > 0) {
        $(window).on('scroll', function () {
            let scroll_height = $(window).scrollTop();
            if (scroll_height > 400) {
                $('.header-fixed').addClass('fixed-top');
            } else {
                $('.header-fixed').removeClass('fixed-top');
            }
        })
    }

    if ($('.reviewer_carousel').length > 0) {
        let $this = $('.reviewer_carousel'),
            items = $this.data('slider-item'),
            loop = $this.data('slider-loop'),
            autoplay = $this.data('slider-autoplay');
        $this.owlCarousel({
            loop:loop,
            autoplay:autoplay,
            responsive:{
                0:{
                    items:1,
                    margin: 0,
                },
                600:{
                    items:2,
                    margin: 65,
                },
                1000:{
                    items:Number(items),
                    margin: 130,
                }
            }
        })
    }
    if ($('.creator_carousel').length > 0) {
        let $this = $('.creator_carousel'),
            items = $this.data('slider-item'),
            loop = $this.data('slider-loop'),
            autoplay = $this.data('slider-autoplay');
        $this.owlCarousel({
            loop:loop,
            autoplay:autoplay,
            responsive:{
                0:{
                    items:1,
                    margin: 0,
                },
                600:{
                    items:2,
                    margin: 30,
                },
                1000:{
                    items:Number(items),
                    margin: 60,
                }
            }
        })
    }

    if ($('.navbar-nav').length > 0) {
        $('.navbar-nav').find('a[href*=\\#]:not([href=\\#])').on('click', function () {
            if (location.pathname.replace( /^\//, '' ) == this.pathname.replace( /^\//, '' ) && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice( 1 ) + ']');
                if (target.length) {
                    $('html,body').animate( {
                        scrollTop: (target.offset().top - 80)
                    }, 1000 );
                    if (!$('.navbar-toggler').hasClass('collapsed')) {
                        $(this).parents('.header-standard').find('.navbar-toggler').trigger("click");
                    }
                    return false;
                }
            }
        });
    }
});