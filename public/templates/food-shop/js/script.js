$(window).on("load", function () {

    "use strict";

    /* ===================================
            Loading Timeout
     ====================================== */

    $('.side-menu').removeClass('hidden');
    $('.shop-card-window').removeClass('hidden');

    setTimeout(function(){
        $('.preloader').fadeOut();
    }, 1000);

});


jQuery(function ($) {


    "use strict";

    $(window).on('scroll', function () {
        if ($(this).scrollTop() > 260) { // Set position from top to add class
            $('header').addClass('header-appear');
        }
        else {
            $('header').removeClass('header-appear');
        }
    });

    //scroll to appear
    $(window).on('scroll', function () {
        if ($(this).scrollTop() > 500)
            $('.scroll-top-arrow').fadeIn('slow');
        else
            $('.scroll-top-arrow').fadeOut('slow');
    });

    //Click event to scroll to top
    $(document).on('click', '.scroll-top-arrow', function () {
        $('html, body').animate({scrollTop: 0}, 800);
        return false;
    });

    $(".scroll").on("click", function (event) {
        event.preventDefault();
        $("html,body").animate({
            scrollTop: $(this.hash).offset().top - 60}, 1200);
    });

    /* ===================================
        Side Menu
    ====================================== */
    if ($("#sidemenu_toggle").length) {
        $("#sidemenu_toggle").on("click", function () {
            $(".pushwrap").toggleClass("active");
            $(".side-menu").addClass("side-menu-active"), $("#close_side_menu").fadeIn(700)
        }), $("#close_side_menu").on("click", function () {
            $(".side-menu").removeClass("side-menu-active"), $(this).fadeOut(200), $(".pushwrap").removeClass("active")
        }), $(".side-nav .navbar-nav .scroll").on("click", function () {
            $(".side-menu").removeClass("side-menu-active"), $("#close_side_menu").fadeOut(200), $(".pushwrap").removeClass("active")
        }), $("#btn_sideNavClose").on("click", function () {
            $(".side-menu").removeClass("side-menu-active"), $("#close_side_menu").fadeOut(200), $(".pushwrap").removeClass("active")
        });
    }


    /* =====================================
          Parallax
       ====================================== */

    if($(window).width() < 780) {
        $('.parallax').addClass("parallax-disable");
    } else {
        $('.parallax').removeClass("parallax-disable");

        // parallax
        $(".parallax").parallaxie({
            speed: 0.55,
            offset: 0,
        });
    }

    /* ===================================
      Owl Carousel
     ====================================== */

    $('.slider-wrap').owlCarousel({
        items: 4,
        autoplay: 1500,
        smartSpeed: 1500,
        autoplayHoverPause: true,
        slideBy: 1,
        loop: true,
        margin:0,
        dots: false,
        nav: false,
        responsive: {
            1200: {
                items: 4,
            },
            768: {
                items: 3,
            },
            480: {
                items: 2,
            },
            320: {
                items: 1,
            },
        }
    });
    $('.best-products-carousel').owlCarousel({
        items: 4,
        autoplay: 1500,
        smartSpeed: 1500,
        autoplayHoverPause: true,
        slideBy: 1,
        loop: true,
        margin:30,
        dots: false,
        nav: false,
        responsive: {
            1200: {
                items: 4,
            },
            768: {
                items: 3,
            },
            480: {
                items: 2,
            },
            320: {
                items: 1,
            },
        }
    });
    $('#sponser-tags').owlCarousel({

        loop: true,
        margin: 20,
        slideSpeed: 5000,
        slideTransition: 'linear',
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 10000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 4
            },
        }

    });
    //Testimonial Slider
    $('.testimonial-carousel').owlCarousel({
        loop: true,
        smartSpeed: 800,
        responsiveClass: true,
        nav:false,
        dots:false,
        autoplay: true,
        margin:0,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
            },
            480: {
                items: 1,
            },
            992: {
                items: 1,
            }
        }
    });
    $('#customNextBtn').click(function() {
        var owl = $('.testimonial-carousel');
        owl.owlCarousel();
        owl.trigger('next.owl.carousel');
    });
    $('#customPrevBtn').click(function() {
        var owl = $('.testimonial-carousel');
        owl.owlCarousel();
        owl.trigger('prev.owl.carousel', [300]);
    });




    /* =====================================
               slider js
     ====================================== */
    if ($(".rev-slider").length) {

        $("#rev_slider_18_1").show().revolution({
            sliderType:"standard",
            jsFileLocation:"//revslider.ads:7080/revslider/public/assets/js/",
            sliderLayout:"fullscreen",
            dottedOverlay:"none",
            delay:9000,
            navigation: {
                keyboardNavigation: "off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation: "off",
                mouseScrollReverse: "default",
                onHoverStop: "off",
                arrows: {
                    style: "gyges",
                    enable: true,
                    hide_onmobile: true,
                    hide_under: 767,
                    hide_onleave: false,
                    tmp: '',
                    left: {
                        h_align: "left",
                        v_align: "center",
                        h_offset: 20,
                        v_offset: 0
                    },
                    right: {
                        h_align: "right",
                        v_align: "center",
                        h_offset: 20,
                        v_offset: 0
                    }
                }
            },
            responsiveLevels: [1240, 1025, 778, 480],
            visibilityLevels: [1240, 1025, 778, 480],
            // gridwidth: [1140, 1025, 768, 480],
            gridwidth: [1140, 1025, 768, 480],
            // gridheight: [660, 650, 600, 490],
            gridheight: [660, 660, 600, 490],
            lazyType:"none",
            shadow:0,
            spinner:"off",
            stopLoop:"off",
            stopAfterLoops:-1,
            stopAtSlide:-1,
            shuffle:"off",
            autoHeight:"off",
            fullScreenAutoWidth:"off",
            fullScreenAlignForce:"off",
            fullScreenOffsetContainer: "",
            fullScreenOffset: "",
            disableProgressBar:"on",
            hideThumbsOnMobile:"off",
            hideSliderAtLimit:0,
            hideCaptionAtLimit:0,
            hideAllCaptionAtLilmit:0,
            debugMode:false,
            fallbacks: {
                simplifyAll:"off",
                nextSlideOnWindowFocus:"off",
                disableFocusListener:false,
            }
        });

    }


    /* =====================================
                shop card js
       ====================================== */
    $("#open-shop-card").on('click',function () {
        $("#shop-card-window").addClass('active');
    });
    $("#close-card-window").on('click',function () {
        $("#shop-card-window").removeClass('active');
    });

    $("#open-shop-card1").on('click',function () {
        $("#shop-card-window").addClass('active');
    });

    /* =====================================
               search box js
      ====================================== */
    // $("#open-search-window").on('click',function () {
    //     $("#search-box-window").addClass('active');
    // });
    // $("#close-search-window").on('click',function () {
    //     $("#search-box-window").removeClass('active');
    // });
    //
    // $("#open-search-window1").on('click',function () {
    //     $("#search-box-window").addClass('active');
    // });

    /*===================================
          Price Range
    ======================================*/

    if ($("#slider-range").length) {
        var marginSlider = document.getElementById('slider-range');

        noUiSlider.create(marginSlider, {
            start: [0, 800],
            margin: 30,
            step: 1,
            connect: true,
            range: {
                'min': 0,
                'max': 1000
            },

        });

        var marginMin = document.getElementById('min-p'),
            marginMax = document.getElementById('max-p');

        marginSlider.noUiSlider.on('update', function (values, handle) {
            if (handle) {
                var str = values[handle]
                var res = str.split(".");
                marginMax.innerHTML = "$" + res[0];
            } else {
                var str = values[handle]
                var res = str.split(".");
                marginMin.innerHTML = "$" + res[0] + " - ";
            }
        });
    }

    /* ===================================
     Product Listing Owl Changes Images
  ====================================== */

    $('.product-listing-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
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

    /*===================================
          Swiper Sync Slider
======================================*/
    if ($("#gallery").length) {
        var galleryTop = new Swiper('#gallery', {
            effect: 'fade',
            direction: 'vertical',
            spaceBetween: 10,
            slidesPerView: 1,
            slidesPerGroup: 1,
            loop: true,
            initialSlide: 0,
            centeredSlides: true,
            loopAdditionalSlides: 5,
            touchRatio: 0.2,

        });

        var galleryThumbs = new Swiper('#thumbs', {
            direction: 'vertical',
            spaceBetween: 10,
            slidesPerView: 3,
            slidesPerGroup: 1,
            loop: true,
            initialSlide: 0,
            centeredSlides: true,
            loopAdditionalSlides: 3,
            touchRatio: 0.2,
            slideToClickedSlide: true
        });

        galleryTop.controller.control = galleryThumbs;
        galleryThumbs.controller.control = galleryTop;
    }


    /*===================================
              Input Number Counter
    ======================================*/


    $('.count').prop('disabled', true);
    $(document).on('click', '.plus', function () {
        $('.count').val(parseInt($('.count').val()) + 1);

    });
    $(document).on('click', '.minus', function () {
        $('.count').val(parseInt($('.count').val()) - 1);
        if ($('.count').val() == 0) {
            $('.count').val(1);

        }
    });

    /*===================================
              //Sticky Filter Nav
    ======================================*/
    var sidebar = $('#product-filter-nav');
    if (sidebar.length) {
        Stickyfill.add(sidebar);
    }
    /*===================================
              open search box window
     ======================================*/
    $('.open_search').on('click', function(event){
        event.stopPropagation();
        $('.search_block').toggleClass('visible');
        $('.search_block .search_input').focus();
        $('.search-overlay').addClass('overlayer');
        $('#sidemenu_toggle').fadeOut(2);
    });
    // close icon script

    $('body').on('click', function(){
        $('.search_block').removeClass('visible');
        $('.search-overlay').removeClass('overlayer');
        $('#sidemenu_toggle').fadeIn(2);
    });

    $('.search_box').on('click', function(event){
        event.stopPropagation();
    });

    $('.search_input').on('keyup', function(event){
        if($(this).val() !== ''){
            $(this).addClass('typing');
        } else {
            $(this).removeClass('typing');
        }
    });

    $(document).on('keyup',function(e){
        if(e.keyCode===27){
            $('.search_block').removeClass('visible');
            $('.search-overlay').removeClass('overlayer');
            $('#sidemenu_toggle').fadeIn(2);
        }
    });
    /* ===================================
              Wow Effects
    ======================================*/
    var wow = new WOW(
        {
            boxClass:'wow',      // default
            animateClass:'animated', // default
            offset:0,          // default
            mobile:false,       // default
            live:true        // default
        }
    );
    wow.init();

});
