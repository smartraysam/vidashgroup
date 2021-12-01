<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Building the world affordable shelter | Vidash Shelter</title>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- Custom Fonts -->
        <link rel="stylesheet" href="{{asset('buildshelter/custom-font/fonts.css')}}" />
        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{asset('buildshelter/css/bootstrap.min.css')}}" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset('buildshelter/css/font-awesome.min.css')}}" />
        <!-- Bootsnav -->
        <link rel="stylesheet" href="{{asset('buildshelter/css/bootsnav.css')}}">
        <!-- Fancybox -->
        <link rel="stylesheet" type="text/css" href="{{asset('buildshelter/css/jquery.fancybox.css?v=2.1.5')}}" media="screen" />
        <!-- Custom stylesheet -->
        <link rel="shortcut icon" href="{{ asset('welcome/images/vidashshelter.jpg') }}">

        <link rel="stylesheet" href="{{asset('buildshelter/css/custom.css')}}" />
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
                        <li><span class="fa fa-phone">  </span><a href="tel:+2347061396988">   07061396988</a>,<a
                            href="tel:+2347083399007">07083399007</a></li>
                        <li><span class="fa fa-envelope">  </span><a href="mailto:vidashgroup@gmail.com">   vidashcityshelterslimited@gmail.com</a></li>
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
                        <a class="navbar-brand" href=""><img class="logo" src="{{asset('welcome/images/vidashshelter.jpg')}}" width="180" height="80" alt=""></a>
                    </div>
                    <!-- Navigation -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav menu">
                            <li><a href="">Home</a></li>
                            <li><a href="#about">About Us</a></li>
                            <li class="dropdown"><a href="#company" data-toggle="dropdown"
                                class="dropdown-toggle">Our
                                Companies <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('index') }}">Vidash Group</a></li>
                                <li><a href="{{ route('property') }}">Vidash Property</a></li>
                                <li><a href="{{ route('paint') }}">Vidash Paint</a></li>
                                <li><a href="{{ route('logistics') }}">Vidash Logistics</a></li>
                            </ul>
                        </li>
                            <li><a href="#services">Services</a></li>
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
                        <img src="{{asset('welcome/images/slider/shelter.jpg')}}" alt="Construction">
                        <div class="overlay">
                            <div class="carousel-caption">
                                <h3>Beautiful Homes</h3>
                                <h1>Vidash Shelters</h1>
                                <h1 class="second_heading">Creative & Professional</h1>
                                <a href="#about" class="btn know_btn">know more</a>
                                <a href="#portfolio" class="btn know_btn">view project</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{asset('welcome/images/slider/advert.jpeg')}}" alt="Construction">
                        <div class="overlay">
                            <div class="carousel-caption">
                                <h3>Selling now....</h3>
                                <h1>Vidash Gold & Emerald</h1>
                                <a  href="#contact_form" class="btn know_btn">Contact Us Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{asset('welcome/images/slider/advert1.jpeg')}}" alt="Construction">
                        <div class="overlay">
                            <div class="carousel-caption">
                                <h3>Selling now....</h3>
                                <h1>Vidash Topaz & Sapp</h1>
                                <a  href="#contact_form" class="btn know_btn">Contact Us Now</a>
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

        <section id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-6" style="padding-top: 10px; padding-bottom: 40px">
                        <div class="about_content">
                          
                            <h2>Who we are?</h2>
                            <p>We are a property development company focused on premiering the integration of creatively
                                 innovative technology and professionalism into property development using sustainable methods. 
                            </p>  
                            <p> VIDASH consist of highly regarded built environment professionals geared towards providing our clients with satisfaction</p>
                            <p> Our shelter cities are location at </p> 
                            <ul>
                            <li>TOPAZ:  Off Gbaupe Road, Behind Aco Phase II, Airport Road, Abuja, Nigeria</li> 
                            
                            <li>Sapphire:  Aco Behind Vidash City Shelters (Emerald), Airport Road, Abuja, Nigeria</li> 
                            <li>Emerald:  Lugbe, By Aco Estate, Behind Mantrac, Just After Arab Contractor, Airport Road, Abuja, Nigeria.</li> 
                            <li>Gold: Lugbe 1 Extension, Off Idu Train Station Road, Behind Nigerian Army Housing Estate, Idu Axis, Abuja, Nigeria.</li> 
                            
                            </ul> 
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 fadeInLeft" style="padding-top: 100px;padding-bottom: 40px">
                        <div class="about_content">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe width=""
                                        src="{{asset('buildshelter/City-Logo-Reveal-Render-Here_2.mp4')}}"
                                        frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- About end -->

        <section id="missionvision" style="background: #fedb5d none repeat scroll 0 0; padding: 27px 0 32px;margin-top:20px">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Our Mission</h2>
                        <p> To increase our property portfolio, expand our client base while delivering smart homes with the best living amenities..</p>
                    </div>
    
                    <div class="col-md-6">
                        <h2>Our Vision</h2>
                        <p> Ensure optimum returns to our stake holders while solving the Pan-African housing deficit..</p>
                    </div>
    
                </div>
            </div>
        </section>

        <!-- Why us -->
        <section id="why_us">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="head_title">
                            <h2>Getting started</h2>
                            <h3>We Are Ready To Help You With</h3>
                           <p>With our experience, we are ready to help you create a modern property with an easy step.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="why_us_item">
                            <span class="fa fa-leaf"></span>
                            <h4>CHOOSE YOUR TYPE</h4>
                            <p>First step look for what property model you like and also choose the location. If you have ,please choose the type of property you like </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="why_us_item">
                            <span class="fa fa-building"></span>
                            <h4>SEE THE PROPERTY DIRECTLY</h4>
                            <p>If you have found the property that you like , Please contact the number listed then you can schedule to see the property directly</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="why_us_item">
                            <span class="fa fa-group"></span>
                            <h4>LET NEGOTIAITE</h4>
                            <p>If you feel you are in accordance in with the property model and have seen the property directly then make a payment.</p>
                        </div>
                    </div>
                  
                </div>
            </div>
        </section><!-- Why us end -->

        <!-- Services -->
        <section id="services" style="margin-bottom: 30px">
            <div class="container">
                <h2 style="margin: 20px">OUR SERVICES</h2>
                <h3 style="text-align: center; font-size: 15px; margin-bottom: 15px;text-transform: lowercase !important">We offer the following service through our shelter packages.</h3>
                <div class="row">
                    <div class="col-md-4">
                        <div class="service_item">
                            <img src="buildshelter/images/service_img1.jpg" alt="Our Services" />
                            <h3>CONSTRUCTION MANAGEMENT</h3>
                         
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service_item">
                            <img src="buildshelter/images/service_img2.jpg" alt="Our Services" />
                            <h3>RENOVATION</h3>
                           
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service_item">
                            <img src="buildshelter/images/service_img3.jpg" alt="Our Services" />
                            <h3>ARCHITECTURE</h3>
                          
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- Services end -->

        <!-- Portfolio -->
        <section id="portfolio">
            <div class="container portfolio_area text-center">
                <h2>Made with love</h2>
               <p>We have shelter located at the following:.</p>
                <div id="filters">
                    <button class="button is-checked" data-filter="*">Show All</button>
                    <button class="button" data-filter=".topez">TOPAZ</button>
                    <button class="button" data-filter=".sapphire">Sapphire</button>
                    <button class="button" data-filter=".emerald">Emerald</button>
                    <button class="button" data-filter=".gold">Gold</button>
                </div>
                <!-- Portfolio grid -->
                <div class="grid">
                    <div class="grid-sizer"></div>
                    <div class="grid-item topez sapphire emerald gold">
                        <img alt="" src="{{asset('works/IMG_0280.JPG')}}" >
                        <div class="portfolio_hover_area">
                            <a class="fancybox" href="{{asset('works/IMG_0280.JPG')}}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><span class="fa fa-search"></span></a>
                           
                        </div>
                    </div>

                    <div class="grid-item topez sapphire  gold">
                        <img alt="" src="{{asset('works/IMG_0276.JPG')}}" >
                        <div class="portfolio_hover_area">
                            <a class="fancybox" href="{{asset('works/IMG_0276.JPG')}}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><span class="fa fa-search"></span></a>
                           
                        </div>
                    </div>

                    <div class="grid-item topez sapphire  gold">
                        <img alt="" src="{{asset('works/IMG_0276.JPG')}}" >
                        <div class="portfolio_hover_area">
                            <a class="fancybox" href="{{asset('works/IMG_0276.JPG')}}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><span class="fa fa-search"></span></a>
                           
                        </div>
                    </div>

                    <div class="grid-item  sapphire emerald gold">
                        <img alt="" src="{{asset('works/IMG_0284.JPG')}}" >
                        <div class="portfolio_hover_area">
                            <a class="fancybox" href="{{asset('works/IMG_0284.JPG')}}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><span class="fa fa-search"></span></a>
                           
                        </div>
                    </div>

                    <div class="grid-item topez sapphire emerald ">
                        <img alt="" src="{{asset('works/IMG_0314 tt.jpg')}}" >
                        <div class="portfolio_hover_area">
                            <a class="fancybox" href="{{asset('works/IMG_0314 tt.jpg')}}g" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><span class="fa fa-search"></span></a>
                           
                        </div>
                    </div>

                    <div class="grid-item topez sapphire  gold">
                        <img alt="" src="{{asset('works/IMG_0315 tt.jpg')}}" >
                        <div class="portfolio_hover_area">
                            <a class="fancybox" href="{{asset('works/IMG_0315 tt.jpg')}}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><span class="fa fa-search"></span></a>
                           
                        </div>
                    </div>
                    <div class="grid-item topez sapphire emerald ">
                        <img alt="" src="{{asset('works/IMG_0314 tt.jpg')}}" >
                        <div class="portfolio_hover_area">
                            <a class="fancybox" href="{{asset('works/IMG_0314 tt.jpg')}}g" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><span class="fa fa-search"></span></a>
                           
                        </div>
                    </div>

                    <div class="grid-item topez sapphire  gold">
                        <img alt="" src="{{asset('works/IMG_0315 tt.jpg')}}" >
                        <div class="portfolio_hover_area">
                            <a class="fancybox" href="{{asset('works/IMG_0315 tt.jpg')}}" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><span class="fa fa-search"></span></a>
                           
                        </div>
                    </div>
                </div><!-- Portfolio grid end -->
            </div>
        </section><!-- Portfolio end -->

        <!-- Testimonial -->
        <section id="testimonial">
            <div class="container text-center testimonial_area">
                <h2>Customer Reviews</h2>
                <p>Hear what our customers have to know.</p>
    
                <div class="row">
                    <div class="col-md-4">
                        <div class="testimonial_item">
                            <div class="testimonial_content text-left">
                                <p>Its nothing but the best. Highly recommend.</p>
                            </div>
                            <p class="worker_name">Engr S. Morgan </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="testimonial_item">
                            <div class="testimonial_content">
                                <p>A professional consultation at it best.</p>
                            </div>
                            <p class="worker_name">Mr John Solomon</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="testimonial_item">
                            <div class="testimonial_content">
                                <p>No 1, estate service provider, beyoud the reach</p>
                            </div>
    
                            <p class="worker_name">Mr.Tunde Olagoke</p>
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
        </section>

        <!-- Footer -->
        <footer>
            <!-- Footer top -->
            <div class="container footer_top">
                <div class="row">
                    <div class="col-lg-4 col-sm-8">
                        <div class="footer_item">
                            <h4>About Company</h4>
                            <img class="logo" src="{{asset('welcome/images/vidashshelter.jpg')}}" height="120" width="80" alt="Vidash shelter" />
                            <p>We are a property development company focused on premiering the integration of creatively innovative technology and professionalism into property development using sustainable methods.
                                VIDASH consist of highly regarded built environment professionals geared towards providing our clients with satisfaction</p>

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
                                <li><a href="{{route('index')}}"><span class="fa fa-play"></span>Vidash Group</a>
                                <li><a href="{{route('property')}}"><span class="fa fa-play"></span> Vidash Property</a>
                                <li><a href="{{route('logistics')}}"><span class="fa fa-play"></span> Vidash Logistics</a>
                                <li><a href="{{route('paint')}}"><span class="fa fa-play"></span> Vidash Paint</a>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-5">
                        <div class="footer_item">
                            <h4>Contact us</h4>
                            <ul class="list-unstyled footer_contact">
                                <li><a href=""><span class="fa fa-map-marker"></span> Vidash City Shelters Ltd</a></li>
                                <li><span class="fa fa-phone"></span><a href="tel:+2347061396988">   07061396988</a>,<a
                                    href="tel:+2347083399007">07083399007</a></li>
                                <li><span class="fa fa-envelope"> </span><a href="mailto:vidashcityshelterslimited@gmail.com"> vidashcityshelterslimited@gmail.com</a></li>

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
        <script src="{{asset('buildshelter/js/jquery-1.12.1.min.js')}}"></script>
        <script src="{{asset('buildshelter/js/bootstrap.min.js')}}"></script>

        <!-- Bootsnav js -->
        <script src="{{asset('buildshelter/js/bootsnav.js')}}"></script>

        <!-- JS Implementing Plugins -->
        <script src="{{asset('buildshelter/js/isotope.js')}}"></script>
        <script src="{{asset('buildshelter/js/isotope-active.js')}}"></script>
        <script src="{{asset('buildshelter/js/jquery.fancybox.js')}}"></script>

        <script src="{{asset('buildshelter/js/jquery.scrollUp.min.js')}}"></script>

        <script src="{{asset('buildshelter/js/main.js?v=1')}}"></script>
    </body>
</html>

