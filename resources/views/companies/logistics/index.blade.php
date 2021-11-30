<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reaching your client globally | Vidash Logistics</title>
    <!--  bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
        integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!--  font Awesome Css  -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <!--    stylesheet for fonts-->
    <link href="{{ asset('logistic/fonts/stylesheet.css') }}" rel="stylesheet">
    <!-- Reset css-->
    <link href="{{ asset('logistic/css/reset.css') }}" rel="stylesheet">

    <!--slick css-->
    <link href="{{ asset('logistic/css/slick.css') }}" rel="stylesheet">
    <!--  owl-carousel css -->
    <link href="{{ asset('logistic/css/owl.carousel.css') }}" rel="stylesheet">
    <!--  YTPlayer css For Background Video -->
    <link href="{{ asset('logistic/css/jquery.mb.YTPlayer.min.css') }}" rel="stylesheet">
    <!--  style css  -->
    <link rel="stylesheet" href="{{ asset('logistic/css/meanmenu.css') }}">
    <link href="{{ asset('logistic/style.css?v=1') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('welcome/images/vidashlogistics.jpg') }}">
    <!--  Responsive Css  -->
    <link href="{{ asset('logistic/css/responsive.css') }}" rel="stylesheet">

    <!--  browser campatibel css files-->
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="js">
    <!--start header area-->
    <div id="preloader"></div>
    <section class="header_area" id="home">
        <!--   start logo & menu markup    -->
        <div class="logo_menu" id="sticker">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-lg-2 col-sm-2 col-xs-6">
                        <div class="logo">
                            <a href="#home"><img width="180px" height="60px"
                                    src="{{ asset('logistic/img/logo.jpg') }}" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-6 col-md-offset-1 col-sm-7 col-lg-offset-1 col-lg-6 mobMenuCol">
                        <nav class="navbar">
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <ul class="nav navbar-nav navbar-right menu">
                                <li class="current-menu-item"><a href="#home">Home</a>
                                </li>
                                <li><a href="#about">About</a></li>
                                <li class="dropdown" ><a href="#company" data-toggle="dropdown"
                                    class="dropdown-toggle" style="background-color: transparent !important">Our
                                    Companies <b class="caret"></b></a>
                                <ul class="dropdown-menu" style="background-color: transparent !important">
                                    <li><a href="{{ route('index') }}">Vidash Group</a></li>
                                    <li><a href="{{ route('paint') }}">Vidash Paint</a></li>
                                    <li><a href="{{ route('property') }}">Vidash Property</a></li>
                                    <li><a href="{{ route('shelter') }}">Vidash Shelter</a></li>
                                </ul>
                            </li>
                                <li><a href="#services">Services</a></li>
                                {{-- <li><a href="#calculator">Cost Calculator</a></li> --}}
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                            <!-- /.navbar-collapse -->
                        </nav>
                    </div>
                    {{-- <div class="col-md-3 col-sm-3 col-xs-4 col-lg-3 signup">
                        <ul class="nav navbar-nav">
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="{{ route('register') }}">{{ __('sign up') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
        <!--   end of logo menu markup     -->
        <!--  start welcome text marup  -->
        <div class="table">
            <div class="cell">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 text-center">
                            <div class="welcome_text">
                                <h1>Get the fastest service </h1>
                                <h1>for your product delivery</h1>
                                <div class="welcome_p">
                                    <p>Moving your product , good and service has been made easier </p>
                                    <p>with our moderm fast tracking logistic system.</p>
                                </div>
                                {{-- <div class="welcome_form">
                                    <form action="#">
                                        <input class="form-control" type="text" placeholder="Enter your product code">
                                        <input class="submit" type="submit" value="Track your product">
                                    </form>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of welcome text markup-->
    </section>
    <!--end of header area-->

    <!--    start about us area-->
    <section class="about_us_area" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="about_us_content">
                        <h2>about us</h2>
                        <p>Our Logistics company plan, implement, and control the movement and storage of your goods,
                            services, or information within a given supply chain and between the points of origin and
                            consumption with our advance technologcal tracking and reporting system.
                        </p>
                        <!--
                            <a href="#">read more <span class="fa fa-long-arrow-right"></span></a>
                        -->
                    </div>
                </div>
                <div class="col-md-offset-1 col-sm-6 col-md-5">
                    <div class="about_car">
                        <img width="541px" height="218px" src="{{ asset('logistic/img/logo.jpg') }}" alt="car">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--   end of about us area-->

    <!--start count up area-->
    <section class="couter_up_area" id="service">
        <div class="table">
            <div class="cell">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-sm-3 text-center">
                            <div class="single_count">
                                <h1 class="counter">126</h1>
                                <h5>Satisfied clients</h5>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3 col-md-offset-1 text-center">
                            <div class="single_count">
                                <h1 class="counter">34</h1>
                                <h5>Branches</h5>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3 col-md-offset-1 text-center">
                            <div class="single_count">
                                <h1 class="counter">120</h1>
                                <h5>Active workers</h5>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-md-offset-1 text-center">
                            <div class="single_count">
                                <h1 class="counter">3546</h1>
                                <h5>Product delivered</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--    end of counter up area-->

    <!--start services area-->
    <section class="about_top" id="services">
        <div class="container">
            <div class="row page-title">
                <div class="col-md-5 col-sm-6">
                    <div class="pricing-desc section-padding-two">
                        <div class="pricing-desc-title">
                            <div class="title">
                                <h2>our services</h2>
                                <p>We render world class services to our customers. Our service include all offered by
                                    our companies but not limited to</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--
                <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                    <div class="about_us_content_title">
                        <ul class="breadcrumbs">
                            <li><a href="#">home</a></li>
                            <li><a href="#">service</a></li>
                        </ul>
                    </div>
                </div>
            -->
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="about_single_item">
                        <div class="item_icon">
                            <img src="{{ asset('logistic/processing.jpg') }}" height="45" width="100" alt="item">
                        </div>
                        <div class="about_single_item_content">
                            <h4>Fastest Processing</h4>
                            <p>Our orders are processed as quick as possible.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="about_single_item">
                        <div class="item_icon">
                            <img src="{{ asset('logistic/tracking.jpg') }}" height="45" width="100" alt="item">
                        </div>
                        <div class="about_single_item_content">
                            <h4>Realtime Tracking</h4>
                            <p>Your orders are tracked in realtime right from the dispatch to the destination.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="about_single_item">
                        <div class="item_icon">
                            <img src="{{ asset('logistic/homedelivery.jpg') }}" height="45" width="100"  alt="item">
                        </div>
                        <div class="about_single_item_content">
                            <h4>Home Delivery</h4>
                            <p>For conveniency, we offer home delivery.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--    start client say area-->
    <section class="client-area" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-xs-12 col-sm-8">
                    <div class="slients-title">
                        <h2>What our clients say</h2>
                        <p>Check out some of our client testimonies</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="single-clients">
                        {{-- <div class="client-img">
                            <img src="{{ asset('logistic/img/client.jpg') }}" alt="client">
                        </div> --}}
                        <div class="client-details">
                            <p>“The best logistic service ever.”</p>
                            <h4>Mr. Wale Coker<span>Civil Servant</span></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="single-clients">
                        {{-- <div class="client-img">
                            <img src="{{ asset('logistic/img/client-2.jpg') }}" alt="client">
                        </div> --}}
                        <div class="client-details">
                            <p>“Fast, trusted. it is nothing but the best.”</p>
                            <h4>John Olufemi <span>UNIABJ. Student</span></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--    end of client area-->

    <!--start Pricing Area -->
    {{-- <section class="calculate_area" id="pricing">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="calculate_title">
                        <h2>Calculate your cost</h2>
                        <p>Get an estimate cost for your logistic servcie</p>
                    </div>
                    <div class="calculate_form">
                        <form action="post">
                            <div class="single_calculate">
                                <input type="text">
                                <label>height</label>
                                <div class="calculate_option">
                                    <select>
                                        <option value="cm">cm</option>
                                        <option value="ml">ml</option>
                                        <option value="cm">cm</option>
                                    </select>
                                </div>
                            </div>
                            <div class="single_calculate">
                                <input type="text">
                                <label>width</label>
                                <div class="calculate_option">
                                    <select>
                                        <option value="cm">cm</option>
                                        <option value="ml">ml</option>
                                        <option value="cm">cm</option>
                                    </select>
                                </div>
                            </div>
                            <div class="single_calculate">
                                <input type="text">
                                <label>length</label>
                                <div class="calculate_option">
                                    <select>
                                        <option value="#">cm</option>
                                        <option value="#">ml</option>
                                        <option value="#">cm</option>
                                    </select>
                                </div>
                            </div>
                            <div class="single_calculate">
                                <input type="text">
                                <label>weight</label>
                                <div class="calculate_option">
                                    <select>
                                        <option value="#">cm</option>
                                        <option value="#">ml</option>
                                        <option value="#">cm</option>
                                    </select>
                                </div>
                            </div>
                            <div class="single_calculate">
                                <label>location</label>
                                <div class="calculate_option selectpadding">
                                    <select>
                                        <option value="#">cm</option>
                                        <option value="#">ml</option>
                                        <option value="#">cm</option>
                                    </select>
                                </div>
                                <div class="calculate_option">
                                    <select>
                                        <option value="#" selected>Location</option>
                                        <option value="#">Abuja</option>
                                        <option value="#">Lagos</option>
                                    </select>
                                </div>
                            </div>
                            <div class="calculat-button">
                                <input type="submit" class="calulate" value="Calculate your cost now">
                            </div>
                            <div class="totla-cost" style="display: none">
                                <h5>Total Cost: <span>$ 30</span></h5>
                                <h5>Duration:: <span>3 days</span></h5>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="">
                        <img src="{{ asset('welcome/images/slider/Logistics.jpeg') }}" height="600" alt="#">
                    </div>
                </div>
            </div>
        </div>

    </section> --}}

    <section class="client-area" id="blog">

    </section>
    <!-- /.End Of Pricing Area-->

    <!--    start contact page content-->
    <section class="contact-page-area" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6 text-left">
                    <div class="about_us_content_title">
                        <h2>contact us</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="contact-form">
                        <h2 class="contact_page_headings">Send us a message</h2>
                        <form method="post" action="http://crazycafe.net">
                            <input type="text" name="username" placeholder="Your name">
                            <input type="email" name="email_address" placeholder="Email address">
                            <input type="text" name="subject" placeholder="Subject">
                            <textarea name="messages" placeholder="Message"></textarea>
                            <input type="submit" name="submit" value="send">
                        </form>
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-1 col-sm-6">
                    <div class="mapouter">
                        <div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas"
                                src="https://maps.google.com/maps?q=vidash%20group%20barumark%20estate%20wuye%20abuja&t=&z=15&ie=UTF8&iwloc=&output=embed"
                                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                                href="https://123movies-to.org"></a><br>
                            <style>
                                .mapouter {
                                    position: relative;
                                    text-align: right;
                                    height: 500px;
                                    width: 100%;
                                }

                            </style><a href="https://www.embedgooglemap.net"></a>
                            <style>
                                .gmap_canvas {
                                    overflow: hidden;
                                    background: none !important;
                                    height: 500px;
                                    width: 100%;
                                }

                            </style>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--   end of slider area-->
    <section class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-3 col-xs-12 col-lg-4">
                    <div class="single-footer">
                        <h2>about us</h2>
                        <p>ABOUT US Our Logistics company plan, implement,
                            and control the movement and storage of your goods, services, or
                            information within a given supply chain and between the points of origin and
                            consumption with our advance technologcal tracking and reporting system.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-3 col-xs-12 col-lg-4">
                    <div class="single-footer">
                        <h2>More links</h2>
                        <ul class="list">
                            <li><a href="{{ route('index') }}">Vidash Group</a></li>
                            <li><a href="{{ route('shelter') }}">Vidash Shelter</a></li>
                            <li><a href="{{ route('property') }}">Vidash Property</a></li>
                            <li><a href="{{ route('paint') }}">Vidash Paint</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-3 col-xs-12 col-lg-4">
                    <div class="single-footer">
                        <h2>Contact us</h2>
                        <ul class="list">
                            <li><a href=""><span class="fa fa-map-marker"></span> Vidash Logistics Ltd</a></li>
                            <li><span class="fa fa-phone"></span><a href="tel:+2348137970207"> 08137970207</a>,<a
                                    href="tel:+2347083399007">07083399007</a></li>
                            <li><span class="fa fa-envelope"> </span><a href="mailto:vidashlogistic@gmail.com">
                                vidashlogistic@gmail.com</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end of footer area-->

    <!--   start copyright text area-->
    <div class="copyright-area">
        <div class="container">
            <div class="col-xs-12 col-sm-6 col-md-6 text-left">
                <div class="footer-text">
                    &copy; <?php echo date('Y'); ?> Vidash Group of Company. All Rights Reserved.
                </div>
            </div>
            <div class="col-xs-12  col-sm-6 col-md-6 text-right">
                <div class="footer-text">
                    {{-- <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-linkedin"></a>
                    <a href="#" class="fa fa-google-plus"></a>
                    <a href="#" class="fa fa-dribbble"></a> --}}
                </div>
            </div>
        </div>
    </div>
    <!--    end of copyright text area-->

    <!--  jquery.min.js  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <!--    bootstrap.min.js-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">
    </script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <!--    jquery.sticky.js-->
    <script src="{{ asset('logistic/js/jquery.sticky.js') }}"></script>
    <!--  owl.carousel.min.js  -->
    <script src="{{ asset('logistic/js/jquery.meanmenu.js') }}"></script>
    <script src="{{ asset('logistic/js/owl.carousel.min.js') }}"></script>
    <!--  jquery.mb.YTPlayer.min.js   -->
    <script src="{{ asset('logistic/js/jquery.mb.YTPlayer.min.js') }}"></script>
    <!--    slick.min.js-->
    <script src="{{ asset('logistic/js/slick.min.js') }}"></script>
    <!--    jquery.nav.js-->
    <script src="{{ asset('logistic/js/jquery.nav.js') }}"></script>
    <!--jquery waypoints js-->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <!--    jquery counterup js-->
    <script src="{{ asset('logistic/js/jquery.counterup.min.js') }}"></script>
    <!--    main.js-->
    <script src="{{ asset('logistic/js/main.js') }}"></script>
</body>

</html>
