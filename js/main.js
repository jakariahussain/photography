(function ($) {

    // smoth scroll
    var scroll = new SmoothScroll('a[href*="#"]', {
        ignore: '[data-scroll-ignore]', // Selector for links to ignore (must be a valid CSS selector)
        header: null, // Selector for fixed headers (must be a valid CSS selector)
        speed: 2000,
        offset: 100,
        easing: 'easeInOutCubic',
        customEasing: function (time) {
            return time < 0.5 ? 2 * time * time : -1 + (4 - 2 * time) * time;
        },
    });
    /*============================================= Data-Background =============================================*/
    $("[data-background]").each(function () {
        $(this).css("background-image", "url(" + $(this).attr("data-background") + ")")
    })
    /*============================================= services_area =============================================*/
    $('.banner_area .owl-carousel').owlCarousel({
        margin: 30,
        loop: true,
        animateOut: 'fadeOutDown',
        autoplay: true,
        navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }

    });

    /*============================================= client_section =============================================*/
    $('.inner_about_wrap .owl-carousel').owlCarousel({
        margin: 0,
        loop: true,
        autoplay: true,
        //		navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            400: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }

    });

    /*============================================= Work file =============================================*/
    var $grid = $('.grid').isotope({
        // options
        itemSelector: '.grid-item',
        layoutMode: 'fitRows',
    });
    var $buttonGroup = $('.filters');
    $buttonGroup.on('click', 'li', function (event) {
        $buttonGroup.find('.is-checked').removeClass('is-checked');
        var $button = $(event.currentTarget);
        $button.addClass('is-checked');
        var filterValue = $button.attr('data-filter');
        $grid.isotope({
            filter: filterValue
        });
    });
    /*============================================= client_section =============================================*/
    $('.client_section .owl-carousel').owlCarousel({
        margin: 0,
        loop: true,
        animateOut: 'fadeOutDown',
        autoplay: true,
        smartSpeed: 250,
        navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
        nav: true,
        responsive: {
            0: {
                items: 2
            },
            400: {
                items: 3
            },
            600: {
                items: 4
            },
            1000: {
                items: 6
            }
        }

    });
    /*============================================= modalVideo =============================================*/
    $(".js-video-button").modalVideo({
        youtube: {
            controls: 0,
            nocookie: true
        }
    });
    /*============================================= Wow Js =============================================*/
    new WOW().init();

    /*============================================= MagnificPopup =============================================*/
    $('.gallery-item').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });

    /*============================================= Sticky Menu =============================================*/
    $(window).on('scroll', function () {
        var scroll = $(window).scrollTop();
        if (scroll < 1) {
            $(".sticky").removeClass("sticky-header");
        } else {
            $(".sticky").addClass("sticky-header");
        }
    });
    /*============================================= Bootsnap =============================================*/
    $("input[name='demo1']").TouchSpin({
        step: 1,
        boostat: 5,
        maxboostedstep: 10,
    });
    /*============================================= Select Js =============================================*/
    $('select').niceSelect();


    /*============================================= Select Country Activator =============================================*/
    var input = document.querySelector("#phone");
    window.intlTelInput(input);


})(jQuery);