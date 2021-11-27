<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fast Delivery</title>
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
    <link href="{{ asset('logistic/style.css') }}" rel="stylesheet">
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
                            <a href="{{ route('index') }}"><img width="172px" height="37px"
                                    src="{{ asset('logistic/img/logo.jpg') }}" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-6 col-md-offset-1 col-sm-7 col-lg-offset-1 col-lg-6 mobMenuCol">
                        <nav class="navbar">
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <ul class="nav navbar-nav navbar-right menu">
                                <li class="current-menu-item"><a href="{{ route('logistics') }}">home</a>
                                </li>
                                <li><a href="#">about</a></li>
                                <li><a href="#">services</a></li>
                                <li><a href="#">pricing</a></li>
                                <li><a href="#">contact</a></li>
                            </ul>
                            <!-- /.navbar-collapse -->
                        </nav>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-4 col-lg-3 signup">
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
                    </div>
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
                                <h1>for your product</h1>
                                <div class="welcome_p">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam </p>
                                    <p>nibh euismod tincidunt ut laoreet dolore magna.</p>
                                </div>
                                <div class="welcome_form">
                                    <form action="#">
                                        <input class="form-control" type="text" placeholder="Enter your product code">
                                        <input class="submit" type="submit" value="Track your product">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of welcome text markup-->
    </section>
    <!--end of header area-->

    <!--   start about top area-->
    <section class="about_top">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="about_single_item">
                        <div class="item_icon">
                            <img src="{{ asset('logistic/img/item_icon.png') }}" alt="item">
                        </div>
                        <div class="about_single_item_content">
                            <h4>Fastest Delivery</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="about_single_item">
                        <div class="item_icon">
                            <img src="{{ asset('logistic/img/item_icon.png') }}" alt="item">
                        </div>
                        <div class="about_single_item_content">
                            <h4>Fastest Delivery</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="about_single_item">
                        <div class="item_icon">
                            <img src="{{ asset('logistic/img/item_icon.png') }}" alt="item">
                        </div>
                        <div class="about_single_item_content">
                            <h4>Fastest Delivery</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--    end of about top area-->


    <!--    start about us area-->
    <section class="about_us_area" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="about_us_content">
                        <h2>about us</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                            tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                            nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                        </p>
                        <a href="#">read more <span class="fa fa-long-arrow-right"></span></a>
                    </div>
                </div>
                <div class="col-md-offset-1 col-sm-6 col-md-5">
                    <div class="about_car">
                        <img src="{{ asset('logistic/img/about_car.png') }}" alt="car">
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
                                <h5>Product delivered s</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--    end of counter up area-->

    <!--start calculate area-->
    <section class="calculate_area" id="tracking">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-6">
                    <div class="calculate_title">
                        <h2>Calculate your cost</h2>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat,</p>
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
                                <div class="calculate_option padding-riht">
                                    <select>
                                        <option value="#" selected>form</option>
                                        <option value="#">ml</option>
                                        <option value="#">cm</option>
                                    </select>
                                </div>
                            </div>
                            <div class="calculat-button">
                                <input type="submit" class="calulate" value="Calculate your cost now">
                            </div>
                            <div class="totla-cost">
                                <h5>Total Cost: <span>$ 30</span></h5>
                                <h5>Duration:: <span>3 days</span></h5>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="calculat-image">
            <img src="{{ asset('logistic/img/men.png') }}" alt="#">
        </div>
    </section>
    <!--    end of calculate area-->


    <!--    start client say area-->
    <section class="client-area" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-xs-12 col-sm-8">
                    <div class="slients-title">
                        <h2>What our clients say</h2>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat,</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="single-clients">
                        <div class="client-img">
                            <img src="{{ asset('logistic/img/client.jpg') }}" alt="client">
                        </div>
                        <div class="client-details">
                            <p>“Lorem ipsum dolor sit amet, consectetuer adipis cing elit, sed diam nonummy nibh euismod
                                tinci dunt ut laoreet dolore magna aliquam.”</p>
                            <h4>John Doe<span>Student</span></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="single-clients">
                        <div class="client-img">
                            <img src="{{ asset('logistic/img/client-2.jpg') }}" alt="client">
                        </div>
                        <div class="client-details">
                            <p>“Lorem ipsum dolor sit amet, consectetuer adipis cing elit, sed diam nonummy nibh euismod
                                tinci dunt ut laoreet dolore magna aliquam.”</p>
                            <h4>John Doe<span>Student</span></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--    end of client area-->

    <!--start Pricing Area -->
    <section class="pricing-area" id="pricing">
        <div class="table">
            <div class="cell">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-sm-12">
                            <div class="pricing-desc section-padding-two">
                                <div class="pricing-desc-title">
                                    <div class="title">
                                        <h2>Pricing & plans</h2>
                                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie
                                            consequat,</p>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh ut
                                    laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                                    tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="column-out">
            <div class="pricing-slider">
                <ul class="carousel">
                    <li class="items main-pos slides" id="1">
                        <!-- Single Pricing Table -->
                        <div class="single-pricing-table">
                            <div class="pricing-head">
                                <h6 class="price-title">Premium</h6>
                            </div>
                            <div class="price">
                                <p>$450</p>
                                <span class="pricing-status">per month</span>
                            </div>
                            <div class="pricing-body">
                                <ul>
                                    <li>Full website maintance</li>
                                    <li>Free domain & hosting</li>
                                    <li>High quality product</li>
                                    <li>24/7 Customer service</li>
                                </ul>
                                <a href="#" class="price-btn">Get started today</a>
                            </div>
                        </div>
                        <!-- /.End Of Single Pricing Table -->
                    </li>
                    <li class="items right-pos slides" id="2">
                        <!-- Single Pricing Table -->
                        <div class="single-pricing-table">
                            <div class="pricing-head">
                                <h6 class="price-title">Basic</h6>
                            </div>
                            <div class="price">
                                <p>$150</p>
                                <span class="pricing-status">per month</span>
                            </div>
                            <div class="pricing-body">
                                <ul>
                                    <li>Full website maintance</li>
                                    <li>Free domain & hosting</li>
                                    <li>High quality product</li>
                                    <li>24/7 Customer service</li>
                                </ul>
                                <a href="#" class="price-btn">Get started today</a>
                            </div>
                        </div>
                        <!-- /.End Of Single Pricing Table -->
                    </li>
                    <li class="items back-pos slides" id="3">
                        <!-- Single Pricing Table -->
                        <div class="single-pricing-table">
                            <div class="pricing-head">
                                <h6 class="price-title">Basic</h6>
                            </div>
                            <div class="price">
                                <p>$150</p>
                                <span class="pricing-status">per month</span>
                            </div>
                            <div class="pricing-body">
                                <ul>
                                    <li>Full website maintance</li>
                                    <li>Free domain & hosting</li>
                                    <li>High quality product</li>
                                    <li>24/7 Customer service</li>
                                </ul>
                                <a href="#" class="price-btn">Get started today</a>
                            </div>
                        </div>
                        <!-- /.End Of Single Pricing Table -->
                    </li>
                    <li class="items back-pos slides" id="4">
                        <!-- Single Pricing Table -->
                        <div class="single-pricing-table">
                            <div class="pricing-head">
                                <h6 class="price-title">Premium</h6>
                            </div>
                            <div class="price">
                                <p>$450</p>
                                <span class="pricing-status">per month</span>
                            </div>
                            <div class="pricing-body">
                                <ul>
                                    <li>Full website maintance</li>
                                    <li>Free domain & hosting</li>
                                    <li>High quality product</li>
                                    <li>24/7 Customer service</li>
                                </ul>
                                <a href="#" class="price-btn">Get started today</a>
                            </div>
                        </div>
                        <!-- /.End Of Single Pricing Table -->
                    </li>
                    <li class="items back-pos slides" id="5">
                        <!-- Single Pricing Table -->
                        <div class="single-pricing-table">
                            <div class="pricing-head">
                                <h6 class="price-title">Basic</h6>
                            </div>
                            <div class="price">
                                <p>$150</p>
                                <span class="pricing-status">per month</span>
                            </div>
                            <div class="pricing-body">
                                <ul>
                                    <li>Full website maintance</li>
                                    <li>Free domain & hosting</li>
                                    <li>High quality product</li>
                                    <li>24/7 Customer service</li>
                                </ul>
                                <a href="#" class="price-btn">Get started today</a>
                            </div>
                        </div>
                        <!-- /.End Of Single Pricing Table -->
                    </li>
                    <li class="items back-pos slides" id="6">
                        <!-- Single Pricing Table -->
                        <div class="single-pricing-table">
                            <div class="pricing-head">
                                <h6 class="price-title">Basic</h6>
                            </div>
                            <div class="price">
                                <p>$150</p>
                                <span class="pricing-status">per month</span>
                            </div>
                            <div class="pricing-body">
                                <ul>
                                    <li>Full website maintance</li>
                                    <li>Free domain & hosting</li>
                                    <li>High quality product</li>
                                    <li>24/7 Customer service</li>
                                </ul>
                                <a href="#" class="price-btn">Get started today</a>
                            </div>
                        </div>
                        <!-- /.End Of Single Pricing Table -->
                    </li>
                    <li class="items left-pos slides" id="7">
                        <!-- Single Pricing Table -->
                        <div class="single-pricing-table">
                            <div class="pricing-head">
                                <h6 class="price-title">Basic</h6>
                            </div>
                            <div class="price">
                                <p>$150</p>
                                <span class="pricing-status">per month</span>
                            </div>
                            <div class="pricing-body">
                                <ul>
                                    <li>Full website maintance</li>
                                    <li>Free domain & hosting</li>
                                    <li>High quality product</li>
                                    <li>24/7 Customer service</li>
                                </ul>
                                <a href="#" class="price-btn">Get started today</a>
                            </div>
                        </div>
                        <!-- /.End Of Single Pricing Table -->
                    </li>
                </ul>
                <div class="slider-navs">
                    <div class="prev-nav" id="prev"><i class="fa fa-angle-left"></i></div>
                    <div class="next-nav" id="next"><i class="fa fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.End Of Pricing Area -->



    <!--   end of slider area-->
    <section class="footer-area" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-3 col-xs-12 col-lg-4">
                    <div class="single-footer">
                        <h2>about us</h2>
                        <p>ABOUT US Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                            euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim
                            veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
                            commodo consequat.</p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-3 col-xs-12 col-lg-2">
                    <div class="single-footer">
                        <h2>More links</h2>
                        <ul class="list">
                            <li><a href="#">about us.</a></li>
                            <li><a href="#">We Accepts.</a></li>
                            <li><a href="#">news latters</a></li>
                            <li><a href="#">Pricing & plans</a></li>
                            <li><a href="#">Calculate</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 col-lg-3">
                    <div class="single-footer">
                        <h2>We Accepts</h2>
                        <a href="#"><img src="{{ asset('logistic/img/cards_credt_1.png') }}" alt="#"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 col-lg-3">
                    <div class="single-footer clearfix">
                        <h2>news latters</h2>
                        <input type="text" class="form-control">
                        <input type="submit" class="submt-button" value="submit">
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
                    <p>Copyright 2016, All Rights Reserved</p>
                </div>
            </div>
            <div class="col-xs-12  col-sm-6 col-md-6 text-right">
                <div class="footer-text">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-linkedin"></a>
                    <a href="#" class="fa fa-google-plus"></a>
                    <a href="#" class="fa fa-dribbble"></a>
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
