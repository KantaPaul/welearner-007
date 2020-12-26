jQuery(function($){
    "use stict"
    if ($('.counter_up_count').length > 0) {
        $('.counter_up_count').counterUp({
            delay: 10,
            time: 1000
        });
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
});