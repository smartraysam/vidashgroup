<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> We are passionate in creating & Developing Property Values.| Vidash Group</title>
    <!-- core CSS -->
    <link href="{{ asset('welcome/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('welcome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('welcome/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('welcome/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('welcome/css/owl.transitions.css') }}" rel="stylesheet">
    <link href="{{ asset('welcome/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('welcome/css/main.css?v=2') }}" rel="stylesheet">
    <link href="{{ asset('welcome/css/responsive.css?v=1') }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{ asset('welcome/images/favicon.ico') }}">
    {{-- <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png"> --}}
    <style type="text/css">
            .dropdown:hover .dropdown-menu {
            display: block;
        }
    </style>
</head>
<!--/head-->

<body id="home" class="homepage">

    <header id="header">
        <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{route('index')}}"><img width="120px" height="40px"
                            src="{{ asset('welcome/images/logo.jpg') }}" alt="logo"></a>
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll active"><a href="#home">Home</a></li>
                        <li class="scroll"><a href="#about">About</a></li>
                        <li class="scroll dropdown"><a href="#features"  data-toggle="dropdown"
                            class="dropdown-toggle">Our Companies  <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Vidash Shelter</a></li>
                                <li><a href="#">Vidash Property</a></li>
                                <li><a href="#">Vidash Paint</a></li>
                                <li><a href="#">Vidash Logistics</a></li>
                            </ul>
                        </li>
                        <li class="scroll"><a href="#services">Services</a></li>
                        <li class="scroll"><a href="#portfolio">Portfolio</a></li>
                        <li class="scroll"><a href="#get-in-touch">Contact</a></li>
                    </ul>
                </div>
            </div>
            <!--/.container-->
        </nav>
        <script type="text/javascript">
            $(document).ready(function() {
                $(".dropdown, .btn-group").hover(function() {
                    var dropdownMenu =
                        $(this).children(".dropdown-menu");
                    if (dropdownMenu.is(":visible")) {
                        dropdownMenu.parent().toggleClass("open");
                    }
                });
            });
        </script>
        <!--/nav-->
    </header>
    <!--/header-->

    <section id="main-slider">
        <div class="owl-carousel">
            <div class="item" style="background-image: url(welcome/images/slider/shelter.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2><span>VIDASH SHELTER</span> bringsyou the value for you money</h2>
                                    <p style="font-size: 20px; ">We ensure that our clients have value for their money.Our estate are tailored to deliver value to clients. </p>
                                    <a class="btn btn-primary btn-lg" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.item-->
            <div class="item" style="background-image: url(welcome/images/slider/bg1.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2>Beautifully designed <span> use </span> Vidash paint </h2>
                                    <p style="font-size: 20px">Our quality paint product bring life to your creativity. </p>
                                    <a class="btn btn-primary btn-lg" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item" style="background-image: url(welcome/images/slider/logistics.png);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6" style="margin-top: 50px">
                                <div class="carousel-content" style="color: black">
                                    <h2 style="color:black"></h2>
                                    <p style="font-size: 20px">Moving your goods and service, secured and safely </p>
                                    <a class="btn btn-primary btn-lg" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.item-->
        </div>
        <!--/.owl-carousel-->
    </section>
    <section id="about">
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">About Us</h2>
                <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class="row">
                <div class="col-sm-6 wow fadeInLeft">
                    <h3 class="column-title">Video Intro</h3>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe
                            src="//player.vimeo.com/video/58093852?title=0&amp;byline=0&amp;portrait=0&amp;color=e79b39"
                            frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                </div>

                <div class="col-sm-6 wow fadeInRight">
                    <h3 class="column-title">Multi Capability</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book.</p>

                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book.</p>

                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="nostyle">
                                <li><i class="fa fa-check-square"></i> Ipsum is simply dummy</li>
                                <li><i class="fa fa-check-square"></i> When an unknown</li>
                            </ul>
                        </div>

                        <div class="col-sm-6">
                            <ul class="nostyle">
                                <li><i class="fa fa-check-square"></i> The printing and typesetting</li>
                                <li><i class="fa fa-check-square"></i> Lorem Ipsum has been</li>
                            </ul>
                        </div>
                    </div>

                    <a class="btn btn-primary" href="#">Learn More</a>

                </div>
            </div>
        </div>
    </section>
    <!--/#main-slider-->
    <section id="work-process" class="wow fadein" style="background: #eeeeee !important; color: #d98d01 !important">
        <div class="container">
            <div class="row text-center" style="width: 100%">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="row">
                            <div class="col-4">
                                <h3 style="color: black; margin-bottom: 10px">OUR MISSION</h3>
                                <div class="icon-circle"
                                    style="width: 120px;height: 120px; border: 4px solid #d98d01">
                                    <i class="fa fa-space-shuttle fa-3x" style="margin-top: 25%"></i>
                                </div>
                            </div>
                            <div class="col-8" style="margin-top:10px ">
                                <p style="color: black; font-size: 18px">
                                    To increase our property portfolio, expand our client base while delivering smart
                                    homes with the best living amenities.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="500ms">
                        <div class="row">
                            <div class="col-4">
                                <h3 style="color: black; margin-bottom: 10px">OUR VISION</h3>
                                <div class="icon-circle"
                                    style="width: 120px;height: 120px; border: 4px solid #d98d01">
                                    <i class="fa fa-eye fa-3x" style="margin-top: 25%"></i>
                                </div>
                            </div>
                            <div class="col-8" style="margin-top:10px ">
                                <p style="color: black; font-size: 18px">
                                    Ensure optimum returns to our stake holders while solving the Pan-African housing
                                    deficit.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--/#cta-->

    <section id="features">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Our Awesome Companies</h2>
                <p class="text-center wow fadeInDown">Vidash Group of Companies has the following world class companies
                    offering you the best service:</p>
            </div>
            <div class="row">
                <div class="col-sm-6 wow fadeInLeft" style="margin-top: 25%">
                    <img class="img-responsive" src="{{ asset('welcome/images/logo.jpg') }}" alt="">
                </div>
                <div class="col-sm-6">
                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i>
                                <a href="{{route('shelter')}}">
                                    <img src="{{ asset('welcome/images/vidashshelter.jpg') }}" width="70px"
                                        height="70px" alt="">
                                </a>
                            </i>
                        </div>
                        <div class="media-body">
                            <a href="{{route('shelter')}}">
                                <h4 class="media-heading">Vidash City Shelters Ltd</h4>
                            </a>
                            <p>This is our property development company focused on premiering the integration of
                                creatively innovative technology and professionalism
                                into property development using sustainable methods.</p>
                                <a href="#" class="btn">Learn more</a>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i>
                                <a href="#">
                                    <img src="{{ asset('welcome/images/vidashproperty.jpg') }}" width="70px"
                                        height="70px" alt="">
                                </a>
                            </i>
                        </div>
                        <div class="media-body">
                            <a href="#">
                                <h4 class="media-heading">Vidash Properties Ltd</h4>
                            </a>
                            <p>This is our property development company focused on premiering the integration of
                                creatively innovative technology and professionalism
                                into property development using sustainable methods.</p>
                                <a href="#" class="btn">Learn more</a>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i>
                                <a href="#">
                                    <img src="{{ asset('welcome/images/vidashpaint.jpg') }}" width="70px"
                                        height="40px" alt="">
                                </a>
                            </i>
                        </div>
                        <div class="media-body">
                            <a href="#">
                                <h4 class="media-heading">Vidash Paints Ltd</h4>
                            </a>
                            <p>This is our property development company focused on premiering the integration of
                                creatively innovative technology and professionalism
                                into property development using sustainable methods.</p>
                                <a href="#" class="btn">Learn more</a>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i>
                                <a href="#">
                                    <img src="{{ asset('welcome/images/vidashlogistics.jpg') }}" width="70px"
                                        height="70px" alt="">
                                </a>
                            </i>
                        </div>
                        <div class="media-body">
                            <a href="#">
                                <h4 class="media-heading">Vidash Logistics Ltd </h4>
                            </a>
                            <p>Our Logistics company plan, implement, and control the movement and storage of your goods, services, or information within a given supply chain
                                and between the points of origin and consumption with our advance technologcal tracking and reporting system.</p>
                                <a href="#" class="btn">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="cta2">
        <div class="container">
            <div class="text-center">
                <h2 class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms"><span>PAINT</span> IS TO BEAUTIFY YOUR
                    CREATIVE</h2>
                <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">We give the best quality of paint.</p>
                <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms"><a
                        class="btn btn-primary btn-lg" href="#">Learn more about our paint products</a></p>
                <img class="img-responsive wow fadeIn" src="{{asset('welcome/images/cta2/cta2-img.png')}}" alt="" data-wow-duration="300ms"
                    data-wow-delay="300ms">
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Our Services</h2>
                <p class="text-center wow fadeInDown">We render world class services to our customers. Our service include all offered by our companies but not limited to:</p>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                        <div class="media service-box">
                            <div class="pull-left">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Real Estate Services</h4>
                                <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform
                                    that fosters greater</p>
                            </div>
                        </div>
                    </div>
                    <!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-cubes"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Logistics</h4>
                                <p>Our world class logistic service help you in moving your good and services safely and secure using moderm advenced technolgy.</p>
                            </div>
                        </div>
                    </div>
                    <!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-bar-chart"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Properties Development</h4>
                                <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform
                                    that fosters greater</p>
                            </div>
                        </div>
                    </div>
                    <!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-paint-brush"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Paint Manaufacturing and Sale</h4>
                                <p>Our world class paint manufacturing factory produces quality paint products </p>
                            </div>
                        </div>
                    </div>
                    <!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-building" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Facility Management</h4>
                                <p>We deliver world class Integrated Building Maintenance & Management Services using our local team of experts & professionals,
                                     leveraging our local and international partners. We ensure your facilities are managed and well maintained.</p>
                            </div>
                        </div>
                    </div>
                    <!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="500ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-users"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Consultancy
                                </h4>
                                <p>We are capable of advising clients on the value of their property assets for all purposes and commissioning valuation reports when needed.
                                    We also prepare feasibility and viability reports for proposed developments and offer consultancy services as project managers .</p>
                            </div>
                        </div>
                    </div>
                    <!--/.col-md-4-->
                </div>
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <!--/#services-->

    <section id="portfolio">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Our Works</h2>
                <p class="text-center wow fadeInDown">Our work speaks for us.</p>
            </div>

            <div class="text-center">
                <ul class="portfolio-filter">
                    <li><a class="active" href="#" data-filter="*">All Works</a></li>
                    <li><a href="#" data-filter=".shelter">Vidash Shelter</a></li>
                    <li><a href="#" data-filter=".properties">Vidash Properties</a></li>
                    <li><a href="#" data-filter=".paint">Vidash Paint</a></li>
                    <li><a href="#" data-filter=".logistics">Vidash Logistics</a></li>
                </ul>
                <!--/#portfolio-filter-->
            </div>

            <div class="portfolio-items">
                <div class="portfolio-item creative">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{ asset('welcome/images/portfolio/01.jpg') }}" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 1</h3>
                            Lorem Ipsum Dolor Sit
                            <a class="preview" href="images/portfolio/full.jpg" rel="prettyPhoto"><i
                                    class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <!--/.portfolio-item-->

                <div class="portfolio-item corporate portfolio">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/02.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 2</h3>
                            Lorem Ipsum Dolor Sit
                            <a class="preview" href="images/portfolio/full.jpg" rel="prettyPhoto"><i
                                    class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <!--/.portfolio-item-->

                <div class="portfolio-item creative">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/03.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 3</h3>
                            Lorem Ipsum Dolor Sit
                            <a class="preview" href="images/portfolio/full.jpg" rel="prettyPhoto"><i
                                    class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <!--/.portfolio-item-->

                <div class="portfolio-item corporate">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/04.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 4</h3>
                            Lorem Ipsum Dolor Sit
                            <a class="preview" href="images/portfolio/full.jpg" rel="prettyPhoto"><i
                                    class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <!--/.portfolio-item-->

                <div class="portfolio-item creative portfolio">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/05.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 5</h3>
                            Lorem Ipsum Dolor Sit
                            <a class="preview" href="images/portfolio/full.jpg" rel="prettyPhoto"><i
                                    class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <!--/.portfolio-item-->

                <div class="portfolio-item corporate">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/06.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 5</h3>
                            Lorem Ipsum Dolor Sit
                            <a class="preview" href="images/portfolio/full.jpg" rel="prettyPhoto"><i
                                    class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <!--/.portfolio-item-->

                <div class="portfolio-item creative portfolio">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/07.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 7</h3>
                            Lorem Ipsum Dolor Sit
                            <a class="preview" href="images/portfolio/full.jpg" rel="prettyPhoto"><i
                                    class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <!--/.portfolio-item-->

                <div class="portfolio-item corporate">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="images/portfolio/08.jpg" alt="">
                        <div class="portfolio-info">
                            <h3>Portfolio Item 8</h3>
                            Lorem Ipsum Dolor Sit
                            <a class="preview" href="images/portfolio/full.jpg" rel="prettyPhoto"><i
                                    class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <!--/.portfolio-item-->
            </div>
        </div>
        <!--/.container-->
    </section>
    <!--/#portfolio-->


    <!--/#about-->

    <section id="work-process">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Our Process</h2>
                <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class="row text-center">
                <div class="col-md-2 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="icon-circle">
                            <span>1</span>
                            <i class="fa fa-coffee fa-2x"></i>
                        </div>
                        <h3>MEET</h3>
                    </div>
                </div>
                <div class="col-md-2 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <div class="icon-circle">
                            <span>2</span>
                            <i class="fa fa-bullhorn fa-2x"></i>
                        </div>
                        <h3>PLAN</h3>
                    </div>
                </div>
                <div class="col-md-2 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
                        <div class="icon-circle">
                            <span>3</span>
                            <i class="fa fa-image fa-2x"></i>
                        </div>
                        <h3>DESIGN</h3>
                    </div>
                </div>
                <div class="col-md-2 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="icon-circle">
                            <span>4</span>
                            <i class="fa fa-heart fa-2x"></i>
                        </div>
                        <h3>DEVELOP</h3>
                    </div>
                </div>
                <div class="col-md-2 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="400ms">
                        <div class="icon-circle">
                            <span>5</span>
                            <i class="fa fa-shopping-cart fa-2x"></i>
                        </div>
                        <h3>TESTING</h3>
                    </div>
                </div>
                <div class="col-md-2 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="500ms">
                        <div class="icon-circle">
                            <span>6</span>
                            <i class="fa fa-space-shuttle fa-2x"></i>
                        </div>
                        <h3>LAUNCH</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#work-process-->

    <section id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">

                    <div id="carousel-testimonial" class="carousel slide text-center" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <p><img class="img-circle img-thumbnail" src="images/testimonial/01.jpg" alt=""></p>
                                <h4>Louise S. Morgan</h4>
                                <small>Treatment, storage, and disposal (TSD) worker</small>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut et dolore magna aliqua. Ut enim ad minim veniam</p>
                            </div>
                            <div class="item">
                                <p><img class="img-circle img-thumbnail" src="images/testimonial/01.jpg" alt=""></p>
                                <h4>Louise S. Morgan</h4>
                                <small>Treatment, storage, and disposal (TSD) worker</small>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut et dolore magna aliqua. Ut enim ad minim veniam</p>
                            </div>
                        </div>

                        <!-- Controls -->
                        <div class="btns">
                            <a class="btn btn-primary btn-sm" href="#carousel-testimonial" role="button"
                                data-slide="prev">
                                <span class="fa fa-angle-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="btn btn-primary btn-sm" href="#carousel-testimonial" role="button"
                                data-slide="next">
                                <span class="fa fa-angle-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#testimonial-->

    <section id="get-in-touch">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Get in Touch</h2>
                <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
        </div>
    </section>
    <!--/#get-in-touch-->


    <section id="contact">
        <div id="google-map" style="height:650px" data-latitude="52.365629" data-longitude="4.871331"></div>
        <div class="container-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-8 col-sm-6 col-sm-offset-6">
                        <div class="contact-form">
                            <h3>Contact Info</h3>

                            <address>
                                <strong>Twitter, Inc.</strong><br>
                                795 Folsom Ave, Suite 600<br>
                                San Francisco, CA 94107<br>
                                <abbr title="Phone">P:</abbr> (123) 456-7890
                            </address>

                            <form id="main-contact-form" name="contact-form" method="post" action="#">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email"
                                        required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" placeholder="Subject"
                                        required>
                                </div>
                                <div class="form-group">
                                    <textarea name="message" class="form-control" rows="8" placeholder="Message"
                                        required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#bottom-->
    <!--//container-->
    </footer>
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; <?php echo date('Y'); ?> Vidash Group of Company. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-github"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->
    <script src="{{ asset('welcome/js/jquery.js') }}"></script>
    <script src="{{ asset('welcome/js/bootstrap.min.js') }}"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="{{ asset('welcome/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('welcome/js/mousescroll.js') }}"></script>
    <script src="{{ asset('welcome/js/smoothscroll.js') }}"></script>
    <script src="{{ asset('welcome/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('welcome/js/jquery.isotope.min.js') }}"></script>
    <script src="{{ asset('welcome/js/jquery.inview.min.js') }}"></script>
    <script src="{{ asset('welcome/js/wow.min.js') }}"></script>
    <script src="{{ asset('welcome/js/main.js') }}"></script>
</body>

</html>
