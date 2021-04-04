
<!DOCTYPE html>
<html lang="fr">
<head>
     <!-- Meta Tags -->
     <meta charset="utf-8">
     <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
     <!-- Author -->
     <meta name="author" content="Themes Industry">
     <!-- description -->
     <meta name="description" content="MegaOne is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose studio and portfolio HTML5 template with 8 ready home page demos.">
     <!-- keywords -->
     <meta name="keywords" content="Creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, studio, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, studio, masonry, grid, faq">
     <!-- Page Title -->
     <title>ShopAWAY</title>
    
    <!-- Favicon -->
    <link href="{{ asset('templates/food-shop/img/favicon.ico') }}" rel="icon">

    <!-- Bundle -->
    <link href="{{ asset('templates/vendor/css/bundle.min.css') }}" rel="stylesheet">
    <!-- Plugin Css -->
    <link href="{{ asset('templates/food-shop/css/line-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('templates/vendor/css/revolution-settings.min.css') }}" rel="stylesheet">
    <link href="{{ asset('templates/vendor/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('templates/vendor/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('templates/vendor/css/cubeportfolio.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('templates/vendor/css/LineIcons.min.css') }}">
    <link href="{{ asset('templates/vendor/css/wow.css') }}" rel="stylesheet">
    <link href="{{ asset('templates/food-shop/css/settings.css') }}" rel="stylesheet">
    <link href="{{ asset('templates/food-shop/css/blog.css') }}" rel="stylesheet">
    <link href="{{ asset('templates/food-shop/css/style.css') }}" rel="stylesheet">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="90">

<!-- Preloader -->
<div class="preloader">
    <div class="centrize full-width">
        <div class="vertical-center">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
</div>
<!-- Preloader End -->

<!--Header Start-->

<header id="header">
    <div class="upper-nav">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 mt-auto mb-auto">
                    <ul class="d-flex mb-0 top-info">
                        <li class="c-links d-none d-lg-block"><span><i class="lab la-whatsapp"></i></span><a href="#">+(34)609 331754</a></li>
                    </ul>
                </div>
                <div class="col-12 col-lg-6 mt-auto mb-auto d-lg-flex justify-content-center justify-content-lg-end">
                    <ul class="shop-details d-flex">
                        <li>
                            <a href="javascript:void(0)" class="open_search"><i class="las la-search"></i></a>
                        </li>
                        <li><a href="javascript:void(0)" id="open-shop-card"><i class="las la-shopping-bag"></i></a></li>
                    </ul>
                </div>
                <div class="col-12 d-flex justify-content-center align-items-center">
                    <a class="navbar-brand" href="index-food-shop.html"><img src="{{ asset('templates/food-shop/img/logo.png') }}"></a>
                </div>
            </div>
        </div>
    </div>
    <!--Navigation-->
    <nav class="navbar navbar-top-default navbar-expand-lg navbar-simple nav-line">
        <div class="container">
        <div class="row no-gutters w-100">
            <div class="col-6 col-lg-3 offset-3 offset-lg-0">
                <a href="index-food-shop.html" title="Logo" class="logo fixed-nav-items">
                    <!--Logo Default-->
                    <img src="{{ asset('templates/food-shop/img/logo-black.png') }}" alt="logo" class="logo-dark">
                </a>
            </div>
            <!--Nav Links-->
            <div class="col-6 d-none d-lg-flex justify-content-lg-center align-items-lg-center">
                <div class="collapse navbar-collapse" id="megaone">
                    <ul class="navbar-nav ml-auto mr-auto">
                        <li><a class="nav-link active scroll" href="#header">Home</a></li>
                        <li><a class="nav-link" href="food-shop/about-us.html">About Us</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Pages <i class="fas fa-angle-down"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="food-shop/product-listing.html"><i class="las la-angle-double-right"></i> Product Listing</a>
                                <a class="dropdown-item" href="food-shop/product-detail.html"><i class="las la-angle-double-right"></i> Product Detail</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="las la-angle-double-right"></i> Standalone</a>
                            </div>
                        </li>
                        <li><a class="nav-link" href="food-shop/product-listing.html">Shop</a></li>
                        <li><a class="nav-link" href="food-shop/standard-blog.html">Blogs</a></li>
                        <li><a class="nav-link" href="food-shop/contact-us.html">Contact</a></li>
                    </ul>
                </div>
            </div>
            <!--Side Menu Button-->
            <div class="col-3 d-flex justify-content-end align-items-center">

                <ul class="shop-details fixed-nav-items">
                    <li>
                        <a href="javascript:void(0)" class="open_search"><i class="las la-search"></i></a>
                    </li>
                    <li><a href="javascript:void(0)" id="open-shop-card1"><i class="las la-shopping-bag"></i></a></li>
                </ul>
            </div>
        </div>
        </div>
    </nav>
    
    <svg id="header-svg" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="60" viewBox="0 0 100 100" preserveAspectRatio="none">
        <path d="M0 100 C40 0 60 0 100 100 Z"/>
    </svg>
    <a href="javascript:void(0)" class="sidemenu_btn" id="sidemenu_toggle">
        <span></span>
        <span></span>
        <span></span>
    </a>
</header>

<!--Side Nav-->
<div class="side-menu hidden">
    <div class="inner-wrapper">
        <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
        <nav class="side-nav w-100">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link scroll" href="#header">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="food-shop/about-us.html">About Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pages <i class="fas fa-angle-down"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                        <a class="dropdown-item" href="food-shop/product-listing.html"><i class="las la-angle-double-right"></i> Product Listing</a>
                        <a class="dropdown-item" href="food-shop/product-detail.html"><i class="las la-angle-double-right"></i> Product Detail</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="las la-angle-double-right"></i> Standalone</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="food-shop/product-listing.html">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="food-shop/standard-blog.html">Blogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="food-shop/contact-us.html">Contact Us</a>
                </li>
            </ul>
        </nav>

        <div class="side-footer w-100">
            <ul class="social-icons-simple">
                <li><a class="facebook-text-hvr" href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                <li><a class="instagram-text-hvr" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a> </li>
                <li><a class="twitter-text-hvr" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a> </li>
            </ul>
            <p class="text-dark">&copy; 2020 MegaOne. Made With Love by Themesindustry</p>
        </div>
    </div>
</div>
<a id="close_side_menu" href="javascript:void(0);"></a>
<!-- End side menu -->

<!--Header End-->

<!--Home Start-->
<section class="slider-sec" id="slider-sec">
    <div id="rev-slider" class="rev-slider">
    <div id="rev_slider_18_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="megaone-restaurant-1" data-source="gallery" style="background:transparent;padding:0px;">
        <!-- START REVOLUTION SLIDER 5.4.8.1 fullscreen mode -->
        <div id="rev_slider_18_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.8.1">

            <ul>	<!-- SLIDE  -->
                <li data-index="rs-44" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="assets/100x50_3d469-bg-light-1.jpg') }}"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('templates/food-shop/img/slider-img5.jpg') }}"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    <div class="slider-overlay"></div>
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption   tp-resizeme"
                         id="slide-44-layer-2"
                         data-x="['left','left','center','center']" data-hoffset="['0','150','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-50','-50','-50','-50']"
                         data-fontsize="['20','22','22','20']"
                         data-lineheight="['30','30','25','25']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"

                         data-type="text"
                         data-responsive_offset="on"

                         data-frames='[{"delay":270,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 5; white-space: nowrap; font-size: 20px; line-height: 22px; font-weight: 300; color: #000; letter-spacing:0;font-family:'Poppins', sans-serif;">Stay Healthy With</div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption   tp-resizeme"
                         id="slide-44-layer-1"
                         data-x="['left','left','center','center']" data-hoffset="['0','150','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                         data-fontsize="['52','40','42','35']"
                         data-lineheight="['82','82','72','55']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"delay":1080,"split":"chars","splitdelay":0.1,"speed":1500,"split_direction":"forward","frame":"0","from":"sX:0.8;sY:0.8;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 6; white-space: nowrap; font-size: 52px; line-height: 82px; font-weight: 500; color: #79a207 ; letter-spacing: 0;font-family:'Poppins', sans-serif;">Natural Fruits</div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption   tp-resizeme"
                         id="slide-44-layer-3"
                         data-x="['left','left','center','center']" data-hoffset="['0','150','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['70','60','70','70']"
                         data-fontsize="['16','14','14','14']"
                         data-width="['490','490','600','450']"
                         data-height="none"
                         data-whitespace="normal"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"delay":2400,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','center','center']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"
                         style="z-index: 7; min-width: 600px; max-width: 600px; white-space: normal; font-size: 16px; line-height: 26px; font-weight: 400; color: #000; letter-spacing:0;font-family:Poppins;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. tellus lacus faucibus lectus, sed cursused eros ligula non odio. </div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption  tp-resizeme"
                         id="slide-44-layer-4"
                         data-x="['left','left','center','center']" data-hoffset="['0','150','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['138','134','138','150']"
                         data-width="['600','600','600','450']"
                         data-height="none"
                         data-whitespace="normal"
                         data-type="button"
                         data-responsive_offset="on"
                         data-frames='[{"delay":3350,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','center','center']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 8; font-family:Poppins;"><a class="btn web-btn rounded-pill" href="#featured-items">Shop Now</a></div>
                </li>
                <!-- SLIDE  -->
                <li data-index="rs-45" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="assets/100x50_3d469-bg-light-1.jpg') }}"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('templates/food-shop/img/slider-img3.jpg') }}" alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <div class="slider-overlay"></div>
                    <!-- LAYERS -->

                    <!-- LAYER NR. 5 -->
                    <div class="tp-caption   tp-resizeme"
                         id="slide-45-layer-2"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-50','-50','-50','-50']"
                         data-fontsize="['20','20','20','20']"
                         data-lineheight="['30','30','30','25']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"delay":270,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 5; white-space: nowrap; font-size: 20px; line-height: 46px; font-weight: 300; color: #000; letter-spacing:0;font-family:'Poppins', sans-serif;">We Deliver Organic Fruits. </div>

                    <!-- LAYER NR. 6 -->
                    <div class="tp-caption   tp-resizeme"
                         id="slide-45-layer-1"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                         data-fontsize="['52','50','42','35']"
                         data-lineheight="['82','82','72','55']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"

                         data-type="text"
                         data-responsive_offset="on"

                         data-frames='[{"delay":1080,"split":"chars","splitdelay":0.1,"speed":1500,"split_direction":"forward","frame":"0","from":"sX:0.8;sY:0.8;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 6; white-space: nowrap; font-size: 52px; line-height: 82px; font-weight: 500; color: #84b813; letter-spacing: 0;font-family: 'Poppins', sans-serif;">Fresh Organic Food</div>

                    <!-- LAYER NR. 7 -->
                    <div class="tp-caption   tp-resizeme"
                         id="slide-45-layer-3"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['70','60','70','70']"
                         data-fontsize="['16','14','14','14']"
                         data-width="['490','490','600','450']"
                         data-height="none"
                         data-whitespace="normal"

                         data-type="text"
                         data-responsive_offset="on"

                         data-frames='[{"delay":2400,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['center','center','center','center']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 7; min-width: 600px; max-width: 600px; white-space: normal; font-size: 16px; line-height: 26px; font-weight: 400; color: #000; letter-spacing:0;font-family:Poppins;">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. </div>

                    <!-- LAYER NR. 8 -->
                    <div class="tp-caption   tp-resizeme"
                         id="slide-45-layer-4"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['138','138','138','150']"
                         data-width="['600','600','600','450']"
                         data-height="none"
                         data-whitespace="normal"

                         data-type="text"
                         data-responsive_offset="on"

                         data-frames='[{"delay":3350,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['center','center','center','center']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 8; font-family:Poppins,sans-serif;"><a class="btn web-btn scroll rounded-pill" href="#featured-items">Shop Now</a></div>
                </li>
                <!-- SLIDE  -->
                <li data-index="rs-46" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="assets/100x50_3d469-bg-light-1.jpg') }}"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('templates/food-shop/img/slider-img4.jpg') }}"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    <div class="slider-overlay"></div>

                    <!-- LAYER NR. 9 -->
                    <div class="tp-caption   tp-resizeme"
                         id="slide-46-layer-2"
                         data-x="['right','right','center','center']" data-hoffset="['0','150','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-50','-50','-50','-50']"
                         data-fontsize="['20','20','20','20']"
                         data-lineheight="['30','30','35','35']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"

                         data-type="text"
                         data-responsive_offset="on"

                         data-frames='[{"delay":270,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['right','right','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 5; white-space: nowrap; font-size: 28px; line-height: 46px; font-weight: 400; color: #000; letter-spacing:0;font-family:'Poppins', sans-serif;">We care for your </div>

                    <!-- LAYER NR. 10 -->
                    <div class="tp-caption   tp-resizeme"
                         id="slide-46-layer-1"
                         data-x="['right','right','center','center']" data-hoffset="['0','150','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                         data-fontsize="['52','50','42','35']"
                         data-lineheight="['82','82','72','55']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"

                         data-type="text"
                         data-responsive_offset="on"

                         data-frames='[{"delay":1080,"split":"chars","splitdelay":0.1,"speed":1500,"split_direction":"forward","frame":"0","from":"sX:0.8;sY:0.8;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['right','right','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 6; white-space: nowrap; font-size: 52px; line-height: 82px; font-weight: 500; color: #84b813; letter-spacing:0;font-family: 'Poppins', sans-serif;">Natural Fresh Goods</div>

                    <!-- LAYER NR. 11 -->
                    <div class="tp-caption   tp-resizeme"
                         id="slide-46-layer-3"
                         data-x="['right','right','center','center']" data-hoffset="['0','150','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['70','60','70','70']"
                         data-fontsize="['16','14','14','14']"
                         data-width="['490','490','600','450']"
                         data-height="none"
                         data-whitespace="normal"

                         data-type="text"
                         data-responsive_offset="on"

                         data-frames='[{"delay":2400,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['right','right','center','center']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 7; min-width: 600px; max-width: 600px; white-space: normal; font-size: 16px; line-height: 26px; font-weight: 400; color: #000; letter-spacing:0;font-family:Poppins;">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.  </div>

                    <!-- LAYER NR. 12 -->
                    <div class="tp-caption   tp-resizeme"
                         id="slide-46-layer-4"
                         data-x="['right','right','center','center']" data-hoffset="['0','150','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['138','138','138','150']"
                         data-width="['600','600','600','450']"
                         data-height="none"
                         data-whitespace="normal"

                         data-type="text"
                         data-responsive_offset="on"

                         data-frames='[{"delay":3350,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['right','right','center','center']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 8; font-family:Poppins;"><a class="btn rounded-pill web-btn scroll" href="#about">Order Now</a></div>
                </li>

            </ul>
            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>	</div>
    </div>
    <!-- END REVOLUTION SLIDER -->
    <!--SLIDER DOWN ARROW-->
<!--    <svg class="separator__svg" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none" fill="#44A36F" version="1.1" xmlns="http://www.w3.org/2000/svg">-->
<!--        <path d="M 100 100 V 10 L 0 100"/>-->
<!--        <path d="M 30 73 L 100 18 V 10 Z" fill="#308355" stroke-width="0"/>-->
<!--    </svg>-->
    <svg id="bigHalfCircle" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="60" viewBox="0 0 100 100" preserveAspectRatio="none">
        <path d="M0 100 C40 0 60 0 100 100 Z"/>
    </svg>
</div>
</section>
<!--Home End-->

<!--mini services start-->
<section class="mini-services" id="mini-services">
    <div class="container">
        <div class="row no-gutters">
        <div class="col-12 col-md-6 col-lg-3 text-center mini-s">
            <div class="mini-service-card">
                <div class="service-icon"><i class="las la-paper-plane"></i></div>
                <h4 class="mini-service-heading">FREE SHIPPING</h4>
                <span class="small-des">ON $300 ABOVE ORDER</span>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 text-center mini-s">
            <div class="mini-service-card">
                <div class="service-icon"><i class="las la-headset"></i></div>
                <h4 class="mini-service-heading">SUPPORT</h4>
                <span class="small-des">ON $300 ABOVE ORDER</span>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 text-center mini-s">
            <div class="mini-service-card">
                <div class="service-icon"><i class="las la-globe-europe"></i></div>
                <h4 class="mini-service-heading">FREE REFUND</h4>
                <span class="small-des">ON $300 ABOVE ORDER</span>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 text-center mini-s">
            <div class="mini-service-card">
                <div class="service-icon"><i class="las la-phone"></i></div>
                <h4 class="mini-service-heading">CONTACT US</h4>
                <span class="small-des">ON $300 ABOVE ORDER</span>
            </div>
        </div>
    </div>
    </div>
</section>
<!--mini services end-->

<!--featured item sec start-->
<section class="featured-items padding-top padding-bottom" id="featured-items">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="heading-details mb-0">
                    <h4 class="heading">Our Products</h4>
                </div>
            </div>
            <div class="col-12 col-md-8 offset-md-2 text-center mb-4">
                <p class="text">Lorem ipsum is simply dummy text of the printing and type setting has been the industry.</p>
            </div>
        </div>
        <div class="row">
            @foreach($produits as $produit)
            <div class="col-12 col-md-6 col-lg-4 text-center wow slideInUp">
                    <div class="featured-item-card">
                        <div class="item-img">
                            <img src="{{ $produit->imagePrincipale() }}">
                            <div class="item-overlay">
                                <div class="item-btns">
                                    <a href="#" class="btn btn-view"><i class="las la-shopping-bag"></i></a>
                                    <a href="#" class="btn btn-view"><i class="las la-heart"></i></a>
                                    <a href="food-shop/product-detail.html" class="btn btn-view"><i class="las la-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="item-detail">
                            <h4 class="item-name">{{ $produit->nom }}</h4>
                            <ul class="reviews">
                                <li><i class="las la-star"></i></li>
                                <li><i class="las la-star"></i></li>
                                <li><i class="las la-star"></i></li>
                                <li><i class="las la-star"></i></li>
                                <li><i class="las la-star"></i></li>
                            </ul>
                            <p class="item-price">$20</p>
                        </div>
                    </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-12 text-center mt-5">
                <a href="food-shop/product-listing.html" class="btn web-btn rounded-pill">Load More <i class="las la-arrow-right"></i> </a>
            </div>
        </div>
    </div>
</section>
<!--featured item sec end-->

<!--mini banner start-->
<div class="banner padding-bottom padding-top parallax" style="background-image: url('food-shop/img/banner.jpg')">
    <div class="overlay-white"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 offset-md-3 text-center">
                <div class="banner-inner-content">
                    <h4 class="banner-heading"><i class="las la-gifts"></i>Big Sale Today</h4>
                    <p class="banner-text">Get 30% Off</p>
                    <div class="count-down-date">
                        <div class="content">
                            <div class="days">
                                <h4 class="num">00</h4>
                                <span class="text">Days</span>
                            </div>
                            <div class="hours">
                                <h4 class="num">00</h4>
                                <span class="text">Hours</span>
                            </div>
                            <div class="minutes">
                                <h4 class="num">00</h4>
                                <span class="text">Minutes</span>
                            </div>
                            <div class="sec">
                                <h4 class="num">00</h4>
                                <span class="text">Sec</span>
                            </div>
                            <a href="#" class="btn web-btn rounded-pill">Shop Now <i class="las la-external-link-alt"></i> </a>
                        </div>
                        <div class="img-container">
                            <img src="{{ asset('templates/food-shop/img/banner-img.png') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--mini banner end-->

<!--about us section start-->
<section class="about-sec padding-top padding-bottom" id="about-sec">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="heading-details">
                    <h4 class="heading">About Our Farm</h4>
                </div>
            </div>
            <div class="col-12 col-md-8 offset-md-2 text-center">
                <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
        <div class="row services-area">
            <div class="col-12 col-lg-4 services text-center wow fadeInUp" data-wow-delay=".2s">
                <div class="service-card">
                    <div class="image-holder"><i class="las la-campground"></i></div>
                    <h4 class="service-heading">Who We Are?</h4>
                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="#" class="btn web-trans-btn rounded-pill">Read More</a>
                </div>
            </div>
            <div class="col-12 col-lg-4 services text-center wow fadeInUp" data-wow-delay=".3s">
                <div class="service-card">
                    <div class="image-holder"><i class="las la-tractor"></i></div>
                    <h4 class="service-heading">How We Do?</h4>
                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="#" class="btn web-trans-btn rounded-pill">Read More</a>
                </div>
            </div>
            <div class="col-12 col-lg-4 services text-center wow fadeInUp" data-wow-delay=".4s">
                <div class="service-card">
                    <div class="image-holder"><i class="las la-seedling"></i></div>
                    <h4 class="service-heading">What We Grow?</h4>
                    <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href="#" class="btn web-trans-btn rounded-pill">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--about us section end-->

<!--testimonial sec start-->
<section class="testimonial-sec padding-top padding-bottom" id="testimonial-sec">
    <svg id="test-header" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="60" viewBox="0 0 100 100" preserveAspectRatio="none">
        <path d="M0 100 C40 0 60 0 100 100 Z"/>
    </svg>

    <div class="container">
        <div class="testimonial-carousel owl-carousel owl-theme">
            <div class="item text-center">
                <div class="testimonial-review">
                    <div class="review-image">
                        <img src="{{ asset('templates/food-shop/img/review.jpg') }}">
                    </div>
                    <div class="review-detail">
                        <h4 class="test-heading">The Best Organic Store!</h4>
                        <p class="text-des">Lorem ipsum is simply dummy text of the printing and type setting. Lorem Ipsum has been the industry’s is dummy. Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the industry’s standard dummy.</p>
                        <ul class="test-review">
                            <li><a href="#"><i class="las la-star"></i></a></li>
                            <li><a href="#"><i class="las la-star"></i></a></li>
                            <li><a href="#"><i class="las la-star"></i></a></li>
                            <li><a href="#"><i class="las la-star"></i></a></li>
                            <li><a href="#"><i class="las la-star"></i></a></li>
                        </ul>
                    </div>
                    <div class="client-info media-body">
                        <h5 class="client-name mt-0">JOE MARTIN </h5>
                        <p class="client-designation">/ CEO.</p>
                    </div>
                </div>
            </div>
            <div class="item text-center">
                <div class="testimonial-review">
                    <div class="review-image">
                        <img src="{{ asset('templates/food-shop/img/rev1.jpg') }}">
                    </div>
                    <div class="review-detail">
                        <h4 class="test-heading">The Best Organic Store!</h4>
                        <p class="text-des">Lorem ipsum is simply dummy text of the printing and type setting. Lorem Ipsum has been the industry’s is dummy. Lorem ipsum is simply dummy text of the printing and typesetting. Lorem Ipsum has been the industry’s standard dummy.</p>
                        <ul class="test-review">
                            <li><a href="#"><i class="las la-star"></i></a></li>
                            <li><a href="#"><i class="las la-star"></i></a></li>
                            <li><a href="#"><i class="las la-star"></i></a></li>
                            <li><a href="#"><i class="las la-star"></i></a></li>
                            <li><a href="#"><i class="las la-star"></i></a></li>
                        </ul>
                    </div>
                    <div class="client-info media-body">
                        <h5 class="client-name mt-0">JOE MARTIN </h5>
                        <p class="client-designation">/ CEO.</p>
                    </div>
                </div>
            </div>
        </div>

        <a id="customPrevBtn" class="test-btn"><i class="fas fa-angle-left"></i></a>
        <a id="customNextBtn" class="test-btn"><i class="fas fa-angle-right"></i></a>
    </div>

    <svg id="test-footer" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="60" viewBox="0 0 100 100" preserveAspectRatio="none">
        <path d="M0 100 C40 0 60 0 100 100 Z"/>
    </svg>
</section>
<!--testimonial sec end-->

<!--Footer Start-->
<footer class="footer-style-1">
    <div class="container">
        <div class="row align-items-center">
            <!--Social-->
            <div class="col-lg-12">
                <div class="footer-social text-center">
                    <ul class="list-unstyled">
                        <li><a class="wow fadeInUp" href="javascript:void(0);"><i aria-hidden="true" class="lab la-facebook-f"></i></a></li>
                        <li><a class="wow fadeInDown" href="javascript:void(0);"><i aria-hidden="true" class="lab la-twitter"></i></a></li>
                        <li><a class="wow fadeInUp" href="javascript:void(0);"><i aria-hidden="true" class="lab la-google"></i></a></li>
                        <li><a class="wow fadeInDown" href="javascript:void(0);"><i aria-hidden="true" class="lab la-linkedin-in"></i></a></li>
                        <li><a class="wow fadeInUp" href="javascript:void(0);"><i aria-hidden="true" class="lab la-instagram"></i></a></li>
                        <li><a class="wow fadeInDown" href="javascript:void(0);"><i aria-hidden="true" class="las la-envelope"></i></a></li>
                    </ul>
                </div>
            </div>
            <!--Text-->
            <div class="col-lg-12 text-center">
                <p class="company-about fadeIn">© 2020 MegaOne. Made With Love By <a href="javascript:void(0);">Themesindustry</a>
                </p>
            </div>
        </div>
    </div>
</footer>
<!--Footer End-->

<!--Scroll Top Start-->
<span class="scroll-top-arrow"><i class="fas fa-angle-up"></i></span>
<!--Scroll Top End-->

<!--Shop card window Start-->
<section class="shop-card-window hidden" id="shop-card-window">
    <a href="#" id="close-card-window" class="close-card-window"><i class="las la-times"></i></a>
    <div class="shop-card-window-content">
        <h4 class="shop-card-heading">My Bag</h4>
        <div class="d-flex justify-content-center align-items-center">
        <div class="mini-bag">
            <div class="bag-item">
                <div class="item-img">
                    <img src="{{ asset('templates/food-shop/img/item1.jpg') }}">
                </div>
                <div class="item-details">
                    <h4 class="item-name">Product Name</h4>
                    <span class="item-qty">Qty: 2</span>
                    <span class="item-price">Price: $300</span>
                    <a href="#" class="basket"><i class="las la-trash"></i> </a>
                </div>
            </div>
            <div class="bag-item">
                <div class="item-img">
                    <img src="{{ asset('templates/food-shop/img/item2.jpg') }}">
                </div>
                <div class="item-details">
                    <h4 class="item-name">Product Name</h4>
                    <span class="item-qty">Qty: 2</span>
                    <span class="item-price">Price: $300</span>
                    <a href="#" class="basket"><i class="las la-trash"></i> </a>
                </div>
            </div>
            <div class="bag-item">
                <div class="item-img">
                    <img src="{{ asset('templates/food-shop/img/item3.jpg') }}">
                </div>
                <div class="item-details">
                    <h4 class="item-name">Product Name</h4>
                    <span class="item-qty">Qty: 2</span>
                    <span class="item-price">Price: $300</span>
                    <a href="#" class="basket"><i class="las la-trash"></i> </a>
                </div>
            </div>
            <div class="bag-item">
                <div class="item-img">
                    <img src="{{ asset('templates/food-shop/img/item4.jpg') }}">
                </div>
                <div class="item-details">
                    <h4 class="item-name">Product Name</h4>
                    <span class="item-qty">Qty: 2</span>
                    <span class="item-price">Price: $300</span>
                    <a href="#" class="basket"><i class="las la-trash"></i> </a>
                </div>
            </div>
        </div>
        </div>
        <div class="bag-btn">
            <h4 class="total"><span>Total: </span>100$</h4>
            <a href="#" class="btn web-dark-btn rounded-pill">View Bag </a>
            <a href="#" class="btn web-btn rounded-pill">Checkout </a>
        </div>
    </div>
</section>
<!--Shop card window  End-->

<!--Search modal window start-->
<div class="search_block">
    <div class="search_box animated wow fadeInUp d-flex justify-content-center align-items-center">
        <div class="inner">
            <input type="text" name="search" id="search" class="search_input" autocomplete="off" placeholder="Enter Your Keywords.." />
            <button class="search_icon glyphicon glyphicon-search"><i class="fas fa-search"></i> </button>
        </div>
    </div>
    <div class="search-overlay"></div>
</div>
<!--Search modal window end-->

<!-- JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.0.4/popper.js"></script>
<script src="{{ asset('templates/vendor/js/bundle.min.js') }}"></script>

<!-- Plugin Js -->
<script src="{{ asset('templates/vendor/js/jquery.appear.js') }}"></script>
<script src="{{ asset('templates/vendor/js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('templates/vendor/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('templates/vendor/js/parallaxie.min.js') }}"></script>
<!-- REVOLUTION JS FILES -->
<script src="{{ asset('templates/vendor/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('templates/vendor/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('templates/vendor/js/jquery.cubeportfolio.min.js') }}"></script>
<!-- SLIDER REVOLUTION EXTENSIONS -->
<script src="{{ asset('templates/vendor/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('templates/vendor/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('templates/vendor/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('templates/vendor/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('templates/vendor/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('templates/vendor/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('templates/vendor/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('templates/vendor/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('templates/vendor/js/extensions/revolution.extension.video.min.js') }}"></script>

<script src="{{ asset('templates/vendor/js/wow.min.js') }}"></script>
<!-- google map-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJRG4KqGVNvAPY4UcVDLcLNXMXk2ktNfY"></script>
<script src="{{ asset('templates/food-shop/js/map.js') }}"></script>
<!--Tilt Js-->
<!-- custom script-->
<script src="{{ asset('templates/food-shop/js/countdown.js') }}"></script>
<script src="{{ asset('templates/food-shop/js/script.js') }}"></script>

</body>
</html>