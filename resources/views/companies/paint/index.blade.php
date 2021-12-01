<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>Building the world affordable shelter | Vidash Shelter</title>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Custom Fonts -->
    <link rel="stylesheet" href="{{ asset('buildshelter/custom-font/fonts.css') }}" />
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('buildshelter/css/bootstrap.min.css') }}" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('buildshelter/css/font-awesome.min.css') }}" />
    <!-- Bootsnav -->
    <link rel="stylesheet" href="{{ asset('buildshelter/css/bootsnav.css') }}">
    <!-- Fancybox -->
    <link rel="stylesheet" type="text/css" href="{{ asset('buildshelter/css/jquery.fancybox.css?v=2.1.5') }}"
        media="screen" />
    <!-- Custom stylesheet -->
    <link rel="shortcut icon" href="{{ asset('welcome/images/vidashpaint.jpg') }}">

    <link rel="stylesheet" href="{{ asset('buildshelter/css/custom.css') }}" />
    <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
</head>

<body>

    <!-- Preloader -->

    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
            </div>
        </div>
    </div>

    <!--End off Preloader -->

    <!-- Header -->
    <header>
        <!-- Top Navbar -->
        <div class="top_nav">
            <div class="container">
                <ul class="list-inline info">
                    <li><span class="fa fa-phone"> </span><a href="tel:+2347061396988"> 07061396988</a>,<a
                            href="tel:+2347083399007">07083399007</a></li>
                    <li><span class="fa fa-envelope"> </span><a href="mailto:vidashpaints@gmail.com">
                            vidashpaints@gmail.com</a></li>
                    <li><a href="#"><span class="fa fa-clock-o"></span> Mon - Sat 9:00 - 17:00</a></li>
                </ul>
                <ul class="list-inline social_icon">
                    {{-- <li><a href=""><span class="fa fa-facebook"></span></a></li>
                        <li><a href=""><span class="fa fa-twitter"></span></a></li>
                        <li><a href=""><span class="fa fa-behance"></span></a></li>
                        <li><a href=""><span class="fa fa-dribbble"></span></a></li>
                        <li><a href=""><span class="fa fa-linkedin"></span></a></li>
                        <li><a href=""><span class="fa fa-youtube"></span></a></li> --}}
                </ul>
            </div>
        </div><!-- Top Navbar end -->

        <!-- Navbar -->
        <nav class="navbar bootsnav">
            <!-- Top Search -->
            <div class="top-search">
                <div class="container">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                    </div>
                </div>
            </div>

            <div class="container">
                <!-- Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
                <!-- Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href=""><img class="logo"
                            src="{{ asset('welcome/images/vidashpaint.jpg') }}" width="180" height="80" alt=""></a>
                </div>
                <!-- Navigation -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav menu">
                        <li><a href="">Home</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li class="dropdown"><a href="#company" data-toggle="dropdown" class="dropdown-toggle">Our
                                Companies <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('index') }}">Vidash Group</a></li>

                                <li><a href="{{ route('shelter') }}">Vidash Shelter</a></li>
                                <li><a href="{{ route('property') }}">Vidash Property</a></li>
                                <li><a href="{{ route('logistics') }}">Vidash Logistics</a></li>
                            </ul>
                        </li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#contact_form">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav><!-- Navbar end -->
    </header><!-- Header end -->


    <section id="home" class="home">
        <!-- Carousel -->
        <div id="carousel" class="carousel slide" data-ride="carousel" style="width:100%">
            <!-- Carousel-inner -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="{{ asset('welcome/images/slider/bg1.jpg') }}" alt="Construction">
                    <div class="overlay">
                        <div class="carousel-caption">
                            <h3>We are Certified Engineers</h3>
                            <h1>Construction Services</h1>
                            <h1 class="second_heading">Creative & Professional</h1>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                                quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</p>
                            <a class="btn know_btn">know more</a>
                            <a class="btn know_btn">view project</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="{{ asset('paintPhotos/cta2-img.png') }}" alt="Construction">
                    <div class="overlay">
                        <div class="carousel-caption">
                            <h3>We are Certified Estate Professionals</h3>
                            <h1>Real Esate Services</h1>
                            <h1 class="second_heading">Creative & Professional</h1>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                                quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</p>
                            <a class="btn know_btn">know more</a>
                            <a class="btn know_btn">view project</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="{{asset('welcome/images/header.png')}}" alt="Construction">
                    <div class="overlay">
                        <div class="carousel-caption">
                            <h3>We are Certified Engineers</h3>
                            <h1>Construction Services</h1>
                            <h1 class="second_heading">Creative & Professional</h1>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                                quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</p>
                            <a class="btn know_btn">know more</a>
                            <a class="btn know_btn">view project</a>
                        </div>
                    </div>
                </div>
            </div><!-- Carousel-inner end -->



            <!-- Controls -->
            <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div><!-- Carousel end-->

    </section>


    <!-- About -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-6">
                    <div class="about_content">
                        <h2>Welcome to Our Company</h2>
                        <h3>More about us</h3>
                        <p>We are a property development company focused on premiering the integration of creatively
                            innovative technology and professionalism into property development using sustainable
                            methods.,</p>
                        <p> VIDASH consist of highly regarded built environment professionals geared towards providing
                            our clients with satisfaction </p>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-lg-offset-1" style="border-radius: 20px;padding: 15px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); " >
                    <div class="about_banner">
                        <img src="{{asset('paintPhotos/Image12.jpeg')}}" width="400px" height="500px" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section><!-- About end -->

    <!-- Why us -->
    <section id="why_us">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="head_title">
                        <h2>WHY CHOOSE US?</h2>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                            consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam
                            est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</p>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="why_us_item">
                        <span class="fa fa-leaf"></span>
                        <h4>We deliver quality</h4>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                            consequuntur magni </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="why_us_item">
                        <span class="fa fa-futbol-o"></span>
                        <h4>Always on time</h4>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                            consequuntur magni</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="why_us_item">
                        <span class="fa fa-group"></span>
                        <h4>We are pasionate</h4>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                            consequuntur magni</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="why_us_item">
                        <span class="fa fa-line-chart"></span>
                        <h4>Professional Services</h4>
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                            consequuntur magni</p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Why us end -->


    <section id="portfolio">
        <div class="container portfolio_area text-center">
            <h2>Made with love</h2>
            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
                dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia
                dolor sit amet, consectetur, adipisci velit,</p>
            <!--
                <div id="filters">
                    <button class="button is-checked" data-filter="*">Show All</button>
                    <button class="button" data-filter=".topez">Vidash City Shelters (TOPAZ)</button>
                    <button class="button" data-filter=".sapphire">Vidash City Shelters (Sapphire)</button>
                    <button class="button" data-filter=".emerald">Vidash City Shelters (Emerald)</button>
                    <button class="button" data-filter=".gold">Vidash City Shelters (Gold)</button>
                </div>
            -->

            <!-- Portfolio grid -->
            <div class="grid">
                <div class="grid-sizer"></div>
                <div class="grid-item grid-item--width2 grid-item--height2 topez sapphire emerald gold">
                    <img alt="" src="{{ asset('paintPhotos/Image11.jpeg') }}">
                    <div class="portfolio_hover_area">
                        <a class="fancybox" href="{{ asset('paintPhotos/Image11.jpeg') }}"
                            data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><span
                                class="fa fa-search"></span></a>
                        
                    </div>
                </div>

                <div class="grid-item topez sapphire  gold">
                    <img alt="" src="{{ asset('paintPhotos/Image05.jpeg') }}">
                    <div class="portfolio_hover_area">
                        <a class="fancybox" href="{{ asset('paintPhotos/Image05.jpeg') }}"
                            data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><span
                                class="fa fa-search"></span></a>
                        
                    </div>
                </div>

                <div class="grid-item topez sapphire  gold">
                    <img alt="" src="{{ asset('paintPhotos/Image09.jpeg') }}">
                    <div class="portfolio_hover_area">
                        <a class="fancybox" href="{{ asset('paintPhotos/Image09.jpeg') }}"
                            data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><span
                                class="fa fa-search"></span></a>
                        
                    </div>
                </div>

                <div class="grid-item  sapphire emerald gold">
                    <img alt="" src="{{ asset('paintPhotos/Image02.jpeg') }}">
                    <div class="portfolio_hover_area">
                        <a class="fancybox" href="{{ asset('paintPhotos/Image02.jpeg') }}"
                            data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><span
                                class="fa fa-search"></span></a>
                        
                    </div>
                </div>

                <div class="grid-item topez sapphire emerald ">
                    <img alt="" src="{{ asset('paintPhotos/Image07.jpeg') }}">
                    <div class="portfolio_hover_area">
                        <a class="fancybox" href="{{ asset('paintPhotos/Image07.jpeg') }}"
                            data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><span
                                class="fa fa-search"></span></a>
                        
                    </div>
                </div>

                <div class="grid-item topez sapphire  gold">
                    <img alt="" src="{{ asset('paintPhotos/Image14.jpeg') }}">
                    <div class="portfolio_hover_area">
                        <a class="fancybox" href="{{ asset('paintPhotos/Image14.jpeg') }}"
                            data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><span
                                class="fa fa-search"></span></a>
                        
                    </div>
                </div>
                <div class="grid-item topez sapphire emerald ">
                    <img alt="" src="{{ asset('paintPhotos/Image12.jpeg') }}">
                    <div class="portfolio_hover_area">
                        <a class="fancybox" href="{{ asset('paintPhotos/Image12.jpeg') }}"
                            data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><span
                                class="fa fa-search"></span></a>
                        
                    </div>
                </div>

                <div class="grid-item topez sapphire  gold">
                    <img alt="" src="{{ asset('paintPhotos/Image13.jpeg') }}">
                    <div class="portfolio_hover_area">
                        <a class="fancybox" href="{{ asset('paintPhotos/Image13.jpeg') }}"
                            data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><span
                                class="fa fa-search"></span></a>
                        
                    </div>
                </div>

                <div class="grid-item topez sapphire  gold">
                    <img alt="" src="{{ asset('paintPhotos/Image01.jpeg') }}">
                    <div class="portfolio_hover_area">
                        <a class="fancybox" href="{{ asset('paintPhotos/Image01.jpeg') }}"
                            data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><span
                                class="fa fa-search"></span></a>
                    </div>
                </div>
            </div><!-- Portfolio grid end -->
        </div>
    </section><!-- Portfolio end -->

    <!-- Testimonial -->
    <section id="testimonial">
        <div class="container text-center testimonial_area">
            <h2>Customer Reviews</h2>
            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
                dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia
                dolor sit amet, consectetur, adipisci velit,</p>

            <div class="row">
                <div class="col-md-4">
                    <div class="testimonial_item">
                        <div class="testimonial_content text-left">
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                                quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</p>
                        </div>
                        <img src="buildshelter/images/testimonial_img1.png" alt="Testimonial" />
                        <p class="worker_name">john smith</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial_item">
                        <div class="testimonial_content">
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                                quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</p>
                        </div>
                        <img src="buildshelter/images/testimonial_img2.png" alt="Testimonial" />
                        <p class="worker_name">john smith</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial_item">
                        <div class="testimonial_content">
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                                quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</p>
                        </div>
                        <img src="buildshelter/images/testimonial_img1.png" alt="Testimonial" />
                        <p class="worker_name">john smith</p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Testimonial end -->

    <!-- Contact form -->
    <section id="contact_form">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Do you have any questions?</h2>
                    <h2 class="second_heading">Feel free to contact us!</h2>
                </div>
                <form role="form" class="form-inline text-right col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="5" id="msg" placeholder="Message"></textarea>
                    </div>
                    <button type="submit" class="btn submit_btn">Submit</button>
                </form>
            </div>
        </div>
    </section><!-- Contact form end -->

    <!-- Footer -->
    <footer>
        <!-- Footer top -->
        <div class="container footer_top">
            <div class="row">
                <div class="col-lg-4 col-sm-8">
                    <div class="footer_item">
                        <h4>About Company</h4>
                        <img class="logo" src="{{ asset('welcome/images/vidashpaint.jpg') }}" height="120"
                            width="80" alt="Vidash paint" />
                        <p>We are a property development company focused on premiering the integration of creatively
                            innovative technology and professionalism into property development using sustainable
                            methods.
                            VIDASH consist of highly regarded built environment professionals geared towards providing
                            our clients with satisfaction</p>

                        <ul class="list-inline footer_social_icon">
                            {{-- <li><a href=""><span class="fa fa-facebook"></span></a></li>
                                <li><a href=""><span class="fa fa-twitter"></span></a></li>
                                <li><a href=""><span class="fa fa-youtube"></span></a></li>
                                <li><a href=""><span class="fa fa-google-plus"></span></a></li>
                                <li><a href=""><span class="fa fa-linkedin"></span></a></li> --}}
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-5">
                    <div class="footer_item">
                        <h4>Explore link</h4>
                        <ul class="list-unstyled footer_menu">
                            <li><a href="{{ route('index') }}"><span class="fa fa-play"></span>Vidash Group</a>
                            <li><a href="{{ route('property') }}"><span class="fa fa-play"></span> Vidash
                                    Property</a>
                            <li><a href="{{ route('logistics') }}"><span class="fa fa-play"></span> Vidash
                                    Logistics</a>
                            <li><a href="{{ route('shelter') }}"><span class="fa fa-play"></span> Vidash
                                    Shelter</a>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-5">
                    <div class="footer_item">
                        <h4>Contact us</h4>
                        <ul class="list-unstyled footer_contact">
                            <li><a href=""><span class="fa fa-map-marker"></span> Vidash City Paint Ltd</a></li>
                            <li><span class="fa fa-phone"></span><a href="tel:+2347061396988"> 07061396988</a>,<a
                                    href="tel:+2347083399007">07083399007</a></li>
                            <li><span class="fa fa-envelope"> </span><a
                                    href="mailto:vidashgroup@gmail.com">vidashpaints@gmail.com</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- Footer top end -->

        <!-- Footer bottom -->
        <div class="footer_bottom text-center">
            <p class="wow fadeInRight">
                &copy; Copyright <?php echo date('Y'); ?> Vidash Group of Company. All Rights Reserved.
            </p>
        </div><!-- Footer bottom end -->
    </footer><!-- Footer end -->

    <!-- JavaScript -->
    <script src="{{ asset('buildshelter/js/jquery-1.12.1.min.js') }}"></script>
    <script src="{{ asset('buildshelter/js/bootstrap.min.js') }}"></script>

    <!-- Bootsnav js -->
    <script src="{{ asset('buildshelter/js/bootsnav.js') }}"></script>

    <!-- JS Implementing Plugins -->
    <script src="{{ asset('buildshelter/js/isotope.js') }}"></script>
    <script src="{{ asset('buildshelter/js/isotope-active.js') }}"></script>
    <script src="{{ asset('buildshelter/js/jquery.fancybox.js') }}"></script>

    <script src="{{ asset('buildshelter/js/jquery.scrollUp.min.js') }}"></script>

    <script src="{{ asset('buildshelter/js/main.js?v=1') }}"></script>
</body>

</html>
