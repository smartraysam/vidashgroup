<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> We are passionate in creating & Developing Property Values.| Vidash Group</title>
    <!-- core CSS -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('welcome/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('welcome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('welcome/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('welcome/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('welcome/css/owl.transitions.css') }}" rel="stylesheet">
    <link href="{{ asset('welcome/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('welcome/css/main.css?v=3') }}" rel="stylesheet">
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
                    <a class="navbar-brand" href="{{ route('index') }}"><img width="180px" height="80px"
                            src="{{ asset('welcome/images/logo.jpg') }}" alt="logo"></a>
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll active"><a href="#home">Home</a></li>
                        <li class="scroll"><a href="#about">About</a></li>
                        <li class="scroll dropdown"><a href="#company" data-toggle="dropdown"
                                class="dropdown-toggle">Our
                                Companies <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('shelter') }}">Vidash Shelter</a></li>
                                <li><a href="{{ route('property') }}">Vidash Property</a></li>
                                <li><a href="{{ route('paint') }}">Vidash Paint</a></li>
                                <li><a href="{{ route('logistics') }}">Vidash Logistics</a></li>
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
        <!--/nav-->
    </header>
    <!--/header-->

    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    <section id="main-slider">
        <div class="owl-carousel">
            <div class="item" style="background-image: url(welcome/images/slider/shelter.jpg);">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2><span>VIDASH SHELTER</span> bringsyou the value for you money</h2>
                                    <p style="font-size: 20px; ">We ensure that our clients have value for their
                                        money.Our estate are tailored to deliver value to clients. </p>
                                    <a class="btn btn-primary btn-lg" href="{{ route('shelter') }}">Read More</a>
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
                                    <p style="font-size: 20px">Our quality paint product bring life to your creativity.
                                    </p>
                                    <a class="btn btn-primary btn-lg" href="{{ route('paint') }}">Read More</a>
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
                                    <a class="btn btn-primary btn-lg" href="{{ route('logistics') }}">Read More</a>
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
    <section id="about" style="padding-bottom: 50px !important">
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">About Us</h2>
                <p class="text-center wow fadeInDown" style="font-size: 15px">VIDASH Group is comprised of several
                    distinct business divisions,
                    though each and every one of them is devoted to the same ideals. They all create and provide
                    services of outstanding quality and value.
                    Our core business is the City Shelters and Property, although our Group has activities in several
                    other business areas</p>
            </div>

            <div class="row">
                <div class="col-sm-6 wow fadeInLeft">
                    <h3 class="column-title">Our History</h3>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe
                            src="//player.vimeo.com/video/58093852?title=0&amp;byline=0&amp;portrait=0&amp;color=e79b39"
                            frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>
                    <p style="margin-top: 20px">
                        VIDASH began as a property in January, 2017. Over the years, the company has undertaken many
                        challenging projects and accumulated experiences in design and building solutions,
                        project management services, and other services.
                        We also provide design inputs and engineering solutions as value-added services to our clients.
                        Our objective is to provide our clients with an I am assured experience when we are chosen to
                        execute their projects.
                        Our emphasis on clear communication and follow-through procedures to ensures the client's
                        objectives are top priority in the planning and execution of all our projects.
                    </p>

                </div>

                <div class="col-sm-6 wow fadeInRight" style="padding-left:40px">
                    <h3 class="column-title">Our Core Values</h3>
                    <p>The Group’s commitment to sustainable business practices and client satisfaction is reiterated in
                        the Group’s underlying values.
                        The Group’s core values are driven through five key areas of business practice.</p>

                    <h3 class="column-title">What sets us apart</h3>

                    <p>We are 100% privately owned & operated by a director who takes personal pride in every project
                        that the company delivers, striving to always exceed expectations of clients and consultants.
                        Above all, we are determined to become a top-class Real Estate firm by developing into a total
                        solution provider that uses experience accumulated from various projects around the world to
                        develop and provide value to customers.
                    </p>

                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="nostyle">
                                <li><i class="fa fa-check-square"></i> SAFETY: - Completing every project with zero
                                    injuries</li>
                                <li><i class="fa fa-check-square"></i> QUALITY: - A can-do culture and track record of
                                    honouring commitment </li>
                                <li><i class="fa fa-check-square"></i> IDEAS: - Innovation in all operations and
                                    continually striving for improvement </li>
                                <li><i class="fa fa-check-square"></i> TEAMWORK: - Working together to achieve our goals
                                </li>

                            </ul>
                        </div>

                        <div class="col-sm-6">
                            <ul class="nostyle">
                                <li><i class="fa fa-check-square"></i> INTEGRITY: - Our top level goal is always to
                                    build integrity by being honest and open with our clients (i.e. subscribers in our
                                    real estate and property). We recognize that without a high level of trust, the
                                    vital relationships that can make or break a project will dissolve.
                                    Open and honest communication with each other and all project stakeholders </li>

                            </ul>
                        </div>
                    </div>

                    {{-- <a class="btn btn-primary" href="#">Learn More</a> --}}

                </div>
            </div>
        </div>
    </section>
    <!--/#main-slider-->
    <section id="work-process" class="wow fadein"
        style="background: #eeeeee !important; color: #d98d01 !important; padding-top: 50px !important;padding-bottom: 50px !important;">
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
                                <p style="color: black; font-size: 15px">
                                    To provide sustainable and increasing value to clients, shareholders and staff,
                                    through a business model that continually innovates in all that it does.
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
                                <p style="color: black; font-size: 15px">
                                    To be recognized as a global partner that provides excellence in the delivery of
                                    subsurface engineering solutions.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--/#cta-->

    <section id="company" style="margin-top: 50px">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Our Awesome Companies</h2>
                <p class="text-center wow fadeInDown">Vidash Group of Companies has the following world class companies
                    offering you the best service:</p>
            </div>
            <div class="row">
                <div class="col-sm-6 wow fadeInLeft" style="margin-top: 8%">
                    <img class="img-responsive" src="{{ asset('welcome/images/4279117-2048x1861.png') }}" alt="">
                </div>
                <div class="col-sm-6">
                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i>
                                <a href="#">
                                    <img src="{{ asset('welcome/images/vidashshelter.jpg') }}" width="70px"
                                        height="70px" alt="">
                                </a>
                            </i>
                        </div>
                        <div class="media-body">
                            <a href="{{ route('shelter') }}">
                                <h4 class="media-heading">Vidash City Shelters Ltd</h4>
                            </a>
                            <p>This is our property development company focused on premiering the integration of
                                creatively innovative technology and professionalism
                                into property development using sustainable methods.</p>
                            <a href="{{ route('shelter') }}" class="btn">Learn more</a>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i>
                                <a href="{{ route('property') }}">
                                    <img src="{{ asset('welcome/images/vidashproperty.jpg') }}" width="70px"
                                        height="70px" alt="">
                                </a>
                            </i>
                        </div>
                        <div class="media-body">
                            <a href="{{ route('property') }}">
                                <h4 class="media-heading">Vidash Properties Ltd</h4>
                            </a>
                            <p>This is our property development company focused on premiering the integration of
                                creatively innovative technology and professionalism
                                into property development using sustainable methods.</p>
                            <a href="{{ route('property') }}" class="btn">Learn more</a>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i>
                                <a href="{{ route('paint') }}">
                                    <img src="{{ asset('welcome/images/vidashpaint.jpg') }}" width="70px"
                                        height="40px" alt="">
                                </a>
                            </i>
                        </div>
                        <div class="media-body">
                            <a href="{{ route('paint') }}">
                                <h4 class="media-heading">Vidash Paints Ltd</h4>
                            </a>
                            <p>This is our property development company focused on premiering the integration of
                                creatively innovative technology and professionalism
                                into property development using sustainable methods.</p>
                            <a href="{{ route('paint') }}" class="btn">Learn more</a>
                        </div>
                    </div>

                    <div class="media service-box wow fadeInRight">
                        <div class="pull-left">
                            <i>
                                <a href="{{ route('logistics') }}">
                                    <img src="{{ asset('welcome/images/vidashlogistics.jpg') }}" width="70px"
                                        height="70px" alt="">
                                </a>
                            </i>
                        </div>
                        <div class="media-body">
                            <a href="{{ route('logistics') }}">
                                <h4 class="media-heading">Vidash Logistics Ltd </h4>
                            </a>
                            <p>Our Logistics company plan, implement, and control the movement and storage of your
                                goods, services, or information within a given supply chain
                                and between the points of origin and consumption with our advance technologcal tracking
                                and reporting system.</p>
                            <a href="{{ route('logistics') }}" class="btn">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="cta2">
        <div class="container">
            <div class="text-center">
                <h2 class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms"><span>PAINT</span> IS TO
                    BEAUTIFY YOUR
                    CREATIVE</h2>
                <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">We give the best quality of
                    paint.</p>
                <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms"><a
                        class="btn btn-primary btn-lg" href="{{ route('paint') }}">Learn more about our paint
                        products</a></p>
                <img class="img-responsive wow fadeIn" src="{{ asset('welcome/images/cta2/cta2-img.png') }}" alt=""
                    data-wow-duration="300ms" data-wow-delay="300ms">
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Our Services</h2>
                <p class="text-center wow fadeInDown">We render world class services to our customers. Our service
                    include all offered by our companies but not limited to:</p>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-12 col-sm-12 col-lg-6 wow fadeInUp" data-wow-duration="300ms"
                        data-wow-delay="0ms">
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

                    <div class="col-md-12 col-sm-12 col-lg-6 wow fadeInUp" data-wow-duration="300ms"
                        data-wow-delay="100ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-cubes"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Logistics</h4>
                                <p>Our world class logistic service help you in moving your good and services safely and
                                    secure using moderm advenced technolgy.</p>
                            </div>
                        </div>
                    </div>
                    <!--/.col-md-4-->

                    <div class="col-md-12 col-sm-12 col-lg-6 wow fadeInUp" data-wow-duration="300ms"
                        data-wow-delay="200ms">
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

                    <div class="col-md-12 col-sm-12 col-lg-6 wow fadeInUp" data-wow-duration="300ms"
                        data-wow-delay="300ms">
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

                    <div class="col-md-12 col-sm-12 col-lg-6 wow fadeInUp" data-wow-duration="300ms"
                        data-wow-delay="400ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-building" aria-hidden="true"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Facility Management</h4>
                                <p>We deliver world class Integrated Building Maintenance & Management Services using
                                    our local team of experts & professionals,
                                    leveraging our local and international partners. We ensure your facilities are
                                    managed and well maintained.</p>
                            </div>
                        </div>
                    </div>
                    <!--/.col-md-4-->

                    <div class="col-md-12 col-sm-12 col-lg-6 wow fadeInUp" data-wow-duration="300ms"
                        data-wow-delay="500ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-users"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Consultancy
                                </h4>
                                <p>We are capable of advising clients on the value of their property assets for all
                                    purposes and commissioning valuation reports when needed.
                                    We also prepare feasibility and viability reports for proposed developments and
                                    offer consultancy services as project managers .</p>
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
                </ul>
                <!--/#portfolio-filter-->
            </div>

            <div class="portfolio-items">
                <div class="portfolio-item shelter">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{ asset('works/shelter1.JPG') }}" alt="">
                        <div class="portfolio-info">
                            <h3>Vidash Shelter</h3>
                            Grey City One Ongoing
                            <a class="preview" href="{{ asset('works/shelter1.JPG') }}" rel="prettyPhoto"><i
                                    class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>

                <!--/.portfolio-item-->

                <div class="portfolio-item properties">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{ asset('works/SDD 1.jpg') }}" alt="">
                        <div class="portfolio-info">
                            <h3>Vidash Properties</h3>
                            Semi-Detached Duplex
                            <a class="preview" href="{{ asset('works/SDD 2.jpg') }}" rel="prettyPhoto"><i
                                    class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item shelter">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{ asset('works/IMG_0280.JPG') }}" alt="">
                        <div class="portfolio-info">
                            <h3>Vidash Shelter</h3>
                            Grey City One Ongoing
                            <a class="preview" href="{{ asset('works/IMG_0280.JPG') }}" rel="prettyPhoto"><i
                                    class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item properties">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{ asset('works/SDP1.jpg') }}" alt="">
                        <div class="portfolio-info">
                            <h3>Vidash Properties</h3>
                            A Semi-Detached PentHouse
                            <a class="preview" href="{{ asset('works/SDP1.jpg') }}" rel="prettyPhoto"><i
                                    class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>


                <div class="portfolio-item shelter">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{ asset('works/IMG_0312 tt.jpg') }}" alt="">
                        <div class="portfolio-info">
                            <h3>Vidash Shelter</h3>
                            Grey City Two Ongoing
                            <a class="preview" href="{{ asset('works/IMG_0312 tt.jpg') }}"
                                rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item shelter">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{ asset('works/IMG_0314 tt.jpg') }}" alt="">
                        <div class="portfolio-info">
                            <h3>Vidash Shelter</h3>
                            Grey City Two Ongoing
                            <a class="preview" href="{{ asset('works/IMG_0314 tt.jpg') }}"
                                rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item shelter">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{ asset('works/IMG_0315 tt.jpg') }}" alt="">
                        <div class="portfolio-info">
                            <h3>Vidash Shelter</h3>
                            Grey City Two Ongoing
                            <a class="preview" href="{{ asset('works/IMG_0315 tt.jpg') }}"
                                rel="prettyPhoto"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <!--/.portfolio-item-->
                <!--/.portfolio-item-->

                <div class="portfolio-item shelter">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{ asset('works/IMG_0276.JPG') }}" alt="">
                        <div class="portfolio-info">
                            <h3>Vidash Shelter</h3>
                            Grey City One Ongoing
                            <a class="preview" href="{{ asset('works/IMG_0276.JPG') }}" rel="prettyPhoto"><i
                                    class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <!--/.portfolio-item-->

                <div class="portfolio-item shelter">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{ asset('works/IMG_0277.JPG') }}" alt="">
                        <div class="portfolio-info">
                            <h3>Vidash Shelter</h3>
                            Grey City One Ongoing
                            <a class="preview" href="{{ asset('works/IMG_0277.JPG') }}" rel="prettyPhoto"><i
                                    class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <!--/.portfolio-item-->

                <div class="portfolio-item properties">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{ asset('works/TDP4.jpg') }}" alt="">
                        <div class="portfolio-info">
                            <h3>Vidash Properties</h3>
                            A Terrace Duplex PentHouse
                            <a class="preview" href="{{ asset('works/TDP4.jpg') }}" rel="prettyPhoto"><i
                                    class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <!--/.portfolio-item-->

                <div class="portfolio-item properties">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{ asset('works/TD 3.jpg') }}" alt="">
                        <div class="portfolio-info">
                            <h3>Vidash Properties</h3>
                            A Terrace Duplex
                            <a class="preview" href="{{ asset('works/TD 3.jpg') }}" rel="prettyPhoto"><i
                                    class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <!--/.portfolio-item-->


                <!--/.portfolio-item-->

                <div class="portfolio-item properties">
                    <div class="portfolio-item-inner">
                        <img class="img-responsive" src="{{ asset('works/DD 4.jpg') }}" alt="">
                        <div class="portfolio-info">
                            <h3>Vidash Properties</h3>
                            A Fully Detached Duplex
                            <a class="preview" href="{{ asset('works/DD 4.jpg') }}" rel="prettyPhoto"><i
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
                <h2 class="section-title text-center wow fadeInDown">Corporate Philosophy</h2>
                <p class="text-center wow fadeInDown">Our project management and execution philosophy.</p>
                <p class="text-center wow fadeInDown">We take pride in our delivery, thus our clients can always be
                    assured that only the most experienced
                    and qualified people are serving them,
                    at all times.</p>
            </div>

            <div class="row text-center">
                <div class="col-md-2 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                        <div class="icon-circle">
                            <span>1</span>
                            <i class="fa fa-coffee fa-2x"></i>
                        </div>
                        <h3>PLANNING</h3>
                        <p>Create detailed schedule and resource plan to meet client's project objective</p>
                    </div>
                </div>
                <div class="col-md-2 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <div class="icon-circle">
                            <span>2</span>
                            <i class="fa fa-bullhorn fa-2x"></i>
                        </div>
                        <h3>COMMUNICATION</h3>
                        <p>Communicate clearly with all project stakeholders</p>
                    </div>
                </div>

                <div class="col-md-2 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="icon-circle">
                            <span>3</span>
                            <i class="fa fa-edit fa-2x"></i>
                        </div>
                        <h3>DESIGN</h3>
                        <p>We convert your idea in creative designs</p>
                    </div>
                </div>

                <div class="col-md-2 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
                        <div class="icon-circle">
                            <span>4</span>
                            <i class="fa fa-building fa-2x"></i>
                        </div>
                        <h3>DEVELOP</h3>
                        <p>Track project progress and fine-tune deviations</p>
                    </div>
                </div>
                <div class="col-md-2 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="400ms">
                        <div class="icon-circle">
                            <span>5</span>
                            <i class="fa fa-eye fa-2x"></i>
                        </div>
                        <h3>SUPERVISION</h3>
                        <p>Supervise closely on quality of work done</p>
                    </div>
                </div>
                <div class="col-md-2 col-md-4 col-xs-6">
                    <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="500ms">
                        <div class="icon-circle">
                            <span>6</span>
                            <i class="fa fa-space-shuttle fa-2x"></i>
                        </div>
                        <h3>LAUNCH</h3>
                        <p>Complete and commission the project on time</p>
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
                                <p><img class="img-circle img-thumbnail" src="" alt=""></p>
                                <h4>Mr John Solomon</h4>
                                <small>CEO. Lenzy Technology</small>
                                <p>Its nothing but the best. Highly recommend.</p>
                            </div>
                            <div class="item">
                                <p><img class="img-circle img-thumbnail" src="" alt=""></p>
                                <h4>Engr. S. Morgan</h4>
                                <small>Technical Consultant. UK</small>
                                <p>A professional consultation at it best.</p>
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

    {{-- <section id="get-in-touch">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Get in Touch</h2>
                <p class="text-center wow fadeInDown">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
        </div>
    </section> --}}
    <!--/#get-in-touch-->


    <section id="contact">
        {{-- <div id="google-map" style="height:650px" data-latitude="52.365629" data-longitude="4.871331"></div> --}}
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
        <div class="container-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-8 col-sm-6 col-sm-offset-6">
                        <div class="contact-form">
                            <h3>Contact Info</h3>

                            <address>
                                <strong>VIDASH GROUP OF COMPANIES LTD.</strong><br>
                                Dx15, BARUMARK ESTATE, WUYE, ABUJA<br>
                                <abbr title="Phone">Tel: </abbr><a href="tel:+2347061396988">07061396988</a>,<a
                                    href="tel:+2347083399007">07083399007</a><br>
                                <abbr title="Phone">Email: </abbr> <a
                                    href="mailto:vidashgroup@gmail.com">vidashgroup@gmail.com</a><br>

                            </address>

                            <form method="POST" enctype="multipart/form-data"
                                action="{{ route('contactus.store') }}">
                                @csrf
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
                {{-- <div class="col-sm-6">
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
                </div> --}}
            </div>
        </div>
    </footer>
    <!--/#footer-->


    <script src="{{ asset('welcome/js/jquery.js') }}"></script>
    <script src="{{ asset('welcome/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('welcome/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('welcome/js/mousescroll.js') }}"></script>
    <script src="{{ asset('welcome/js/smoothscroll.js') }}"></script>
    <script src="{{ asset('welcome/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('welcome/js/jquery.isotope.min.js') }}"></script>
    <script src="{{ asset('welcome/js/jquery.inview.min.js') }}"></script>
    <script src="{{ asset('welcome/js/wow.min.js') }}"></script>
    <script src="{{ asset('welcome/js/main.js?v=0') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#home').focus();
            $(".dropdown, .btn-group").hover(function() {
                var dropdownMenu =
                    $(this).children(".dropdown-menu");
                if (dropdownMenu.is(":visible")) {
                    dropdownMenu.parent().toggleClass("open");
                }
            });
        });
    </script>
</body>

</html>
