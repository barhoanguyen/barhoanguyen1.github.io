<?php
    /*
        Template Name: bar-and-pub 
    */
?>
<!DOCTYPE html>
<!--[if lt IE 8 ]>
<html lang="en" class="ie7">
<![endif]-->
<!--[if IE 8 ]>
<html lang="en" class="ie8">
<![endif]-->
<!--[if IE 9 ]>
<html lang="en" class="ie9">
<![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en"><!--<![endif]-->
<head>
    <title>My Bar</title>
    <meta charset="utf-8">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/ favicon.ico" type="image/x-icon">
    <!--Animate.css-->
    <link href="<?php bloginfo('template_directory'); ?>/css/animate.css" media="screen" rel="stylesheet">
    <!--PrettyPhoto-->
    <link href="<?php bloginfo('template_directory'); ?>/css/prettyPhoto.css" media="screen" rel="stylesheet">
    <!--FontAwesome-->
    <link href="<?php bloginfo('template_directory'); ?>/css/font-awesome.css" media="screen" rel="stylesheet">
    <!--DateTime Picker-->
    <link href="<?php bloginfo('template_directory'); ?>/css/jquery.datetimepicker.css" media="screen" rel="stylesheet">
    <!-- Mobile menu (mmenu) -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/jquery.mmenu.all.css"/>
    <!-- Style CSS -->
    
    <link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css" media="screen" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/style.css" media="screen" rel="stylesheet">
    <!-- Modernizr Library -->
    <script src="<?php bloginfo('template_directory'); ?>/js/lib/modernizr.min.js"></script>
    <style>iframe {width:100%;height:100%;}</style>

</head>
<body><!-- Loading Spinner -->
<div class="spinner">
    <div class="line1"></div>
    <div class="line2"></div>
    <div class="line3"></div>
    <div class="line4"></div>
</div>
<!--/ Loading Spinner -->
<div id="page" class="hfeed site invisible">
         <header class="fly-header-site fly-header-type-2 fly-sticky-header-on">
        <div class="container">
            <div class="fly-wrap-logo">
                <a class="fly-logo" href="<?php bloginfo('template_directory'); ?>/index.html">
                    <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="Logo"/>
                </a>
            </div>
            <div class="fly-nav-wrap">
                <nav class="fly-site-navigation primary-navigation" id="fly-menu-primary">
                    <ul class="fly-nav-menu">
                        <li><a href="<?php bloginfo('template_directory'); ?>/index.html">HOME</a>                      
                        </li>
                        <li><a href="<?php bloginfo('template_directory'); ?>/story.html">STORY</a></li>
                        <li><a href="<?php bloginfo('template_directory'); ?>/menu.html">MENU</a></li>
                        <li><a href="<?php bloginfo('template_directory'); ?>/photo.html">PHOTO</a></li>
                        <li class="menu-item-has-children"><a href="<?php bloginfo('template_directory'); ?>/contact.html">CONTACT</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <div id="main" class="site-main" role="main">
        <!--Slider Full-->
        <section class="fly-slider-full">
            <div class="main-carousel default">
                <div id="myCarousel" class="carousel slide">
                    <div class="carousel-inner">
                        <!-- Carousel items -->
                        <div class="item active parallax" style="background-image:url(<?php bloginfo('template_directory'); ?>/images/Home-Slider/slide-1.jpg);">
                            <div class="container">
                                <div class="fly-itable">
                                    <div class="fly-icell">
                                        <div class="fly-wrap-text-slider">
                                            <h1 class="fly-slider-title-before"><br><br><br>Best Bar in Japan Town, HCMC</h1>
                                            <div class="fly-slider-divider"></div>
                                            <h2 class="fly-slider-title-after">Come join us for a drink...or two.</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Carousel items -->
                        <div class="item parallax" style="background-image:url(<?php bloginfo('template_directory'); ?>/images/Home-Slider/slide-2.jpg);">
                            <div class="container">
                                <div class="fly-itable">
                                    <div class="fly-icell">
                                        <div class="fly-wrap-text-slider">
                                            <h1 class="fly-slider-title-before"><br><br><br>Beautiful Girls!</h1>
                                            <div class="fly-slider-divider"></div>
                                            <h2 class="fly-slider-title-after">Young, Friendly and can speak multiple languages.</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Carousel items -->
                        <div class="item parallax" style="background-image:url(<?php bloginfo('template_directory'); ?>/images/Home-Slider/slide-3.jpg);">
                            <div class="container">
                                <div class="fly-itable">
                                    <div class="fly-icell">
                                        <div class="fly-wrap-text-slider">
                                            <h1 class="fly-slider-title-before"><br><br><br>Beers, Wine, Bottles. </h1>
                                            <div class="fly-slider-divider"></div>
                                            <h2 class="fly-slider-title-after">Choose your drink!</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Carousel Indicator-->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                </div>
            </div>
        </section>
        <!--End Slider Full-->
        <!-- Section quick nav -->
        <section class="fly-quick-nav">
            <div class="container-fluid">
                <div class="row">
                    <div class="fly-quick-nav-item col-sm-6" style="background-image: url('<?php bloginfo('template_directory'); ?>/images/Quick-Menu/bg-1.jpg')">
                        <i class="fly-quick-nav-icon flyicon-cutlery"></i>
                        <h4 class="fly-quick-nav-before-title">Come have a drink.</h4>
                        <h3 class="fly-quick-nav-title">Menu</h3>
                        <a class="fly-btn fly-btn-1 fly-btn-md fly-btn-color-3 fly-btn-quick-nav" href="<?php bloginfo('template_directory'); ?>/menu.html"><span>MORE</span></a>
                    </div>
                    <div class="fly-quick-nav-item col-sm-6" style="background-image: url('<?php bloginfo('template_directory'); ?>/images/Quick-Menu/bg-4.jpg')">
                        <i class="fly-quick-nav-icon flyicon-gift"></i>
                        <h4 class="fly-quick-nav-before-title">Say Hi</h4>
                        <h3 class="fly-quick-nav-title">Contact Us</h3>
                        <a class="fly-btn fly-btn-1 fly-btn-md fly-btn-color-3 fly-btn-quick-nav" href="<?php bloginfo('template_directory'); ?>/contact.html"><span>MORE</span></a>
                    </div>
                    <div class="fly-quick-nav-item col-sm-6" style="background-image: url('<?php bloginfo('template_directory'); ?>/images/Quick-Menu/bg-3.jpg')">
                        <i class="fly-quick-nav-icon flyicon-notebook"></i>
                        <h4 class="fly-quick-nav-before-title">Hello.</h4>
                        <h3 class="fly-quick-nav-title">Our Story</h3>
                        <a class="fly-btn fly-btn-1 fly-btn-md fly-btn-color-3 fly-btn-quick-nav" href="<?php bloginfo('template_directory'); ?>/story.html"><span>MORE</span></a>
                    </div>
                    <div class="fly-quick-nav-item col-sm-6" style="background-image: url('<?php bloginfo('template_directory'); ?>/images/Quick-Menu/bg-2.jpg')">
                        <i class="fly-quick-nav-icon flyicon-portait"></i>
                        <h4 class="fly-quick-nav-before-title">TAKE A LOOK</h4>
                        <h3 class="fly-quick-nav-title">AT OUR PHOTOS</h3>
                        <a class="fly-btn fly-btn-1 fly-btn-md fly-btn-color-3 fly-btn-quick-nav" href="<?php bloginfo('template_directory'); ?>/photo.html"><span>MORE</span></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Section quick nav -->
  <!--Contact Form Wrap-->
        <div class="fly-divider-space space-md" style="height: 70px;"></div>
        <section class="fly-wrap-contact-form container-min">
            <div class="container">
                <div class="row"><h2 class="fly-contact-form-info-title">We’d Love to hear<br>from you</h2>

                    <div class="fly-contact-form-title-divider"></div>
                    <div class="fly-contact-form-info-block"><p class="fly-contact-street"> My Bar<br> my address</p>

                        <p class="fly-contact-phone"> Phone. 0909700700 </p>

                        <p class="fly-contact-email"><a href="/cdn-cgi/l/email-protection#1b72757d745b7d776278747d7d7e7e356e70"><span class="__cf_email__" data-cfemail="167f7870795672797a7a7e796365737477643875797b">My Email</span></a></p>

                        <div class="fly-contact-work-program"><h4>WE ARE OPEN FOR YOU</h4>

                            <p>Daily 7pm - 1am</p>
</div>
                    </div>
                  
                </div>
            </div>
        </section>
        <div class="fly-divider-space space-md"></div>
        <!--End Contact Form Wrap-->
        <!--Google Maps-->
        <section class="google-maps">
        <div class="mapouter"><div class="gmap_canvas"><iframe height="500" id="gmap_canvas" src=" https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3526124267487!2d106.63918861483657!3d10.784282261997419!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752fe7efcecbd5%3A0xb4734cea965dd333!2zVHLGsOG7nW5nIMSR4bqhaSBo4buNYyBWxINuIEhp4bq_bg!5e0!3m2!1svi!2s!4v1669692437962!5m2!1svi!2s" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br><style>.mapouter{position:relative;text-align:right;}</style><style>iframe {width:100%;height:100%;}</style><style>.gmap_canvas {overflow:hidden;background:none!important; height:500px;}</style></div></div>
        </section>
        <!--End Google Maps-->
    </div>
    <!--Footer-->
    <footer class="fly-site-footer">
        <div class="container">
            <div class="row">
                <div class="fly-divider-space space-sm"></div>
            </div>
            <div class="row">
                <div class="fly-footer-content clearfix">
                   
                    <a class="fly-footer-logo" href="./"> <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="Footer Logo"/> </a>

                    <div class="fly-footer-info"> My bar<br> my address<br>
                        <a href="callto:0762 903 161">0909700700</a><br>Open Daily 7 PM - 1 AM
                    </div>
                    <div class="fly-social">
                        <a class="fly-social-link" href="https://www.instagram.com/dollhouse_bar.invietnam/?hl=en" target="_blank"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="fly-divider-space space-sm"></div>
            </div>
        </div>
        <div class="fly-footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="fly-copyright-text"> © My Bar
                        
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- main JS libs  -->
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="<?php bloginfo('template_directory'); ?>/js/lib/jquery-1.11.3.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/lib/bootstrap.min.js"></script>

<!--[if lt IE 9]>
<script src="js/lib/html5shiv.js"></script>
<script src="js/lib/respond.min.js"></script>
<![endif]-->

<!-- Touch Swipe Plugin -->
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.touchSwipe.min.js"></script>
<!--CarouFredSel Plugin-->
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.carouFredSel-6.2.1-packed.js"></script>
<!--Categories Slider-->
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.prettyPhoto.js"></script>
<!-- DateTime Picker -->
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.datetimepicker.js"></script>
<!-- Scroll To Top Button -->
<script src="<?php bloginfo('template_directory'); ?>/js/scrollTo.min.js"></script>
<!-- gMap -->
<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<!-- Parallax -->
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.parallax-1.1.3.js"></script>
<!-- Mobile menu (mmenu) -->
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.mmenu.min.all.js"></script>
<!--General JS-->
<script src="<?php bloginfo('template_directory'); ?>/js/general.js"></script>
</body>
</html>