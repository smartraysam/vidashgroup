<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vidash Property | Home</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('welcome/images/vidashproperty.jpg') }}" type="image/png">

    <!-- Font awesome -->
    <link href="{{ asset('propertyassets/css/font-awesome.css') }}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ asset('propertyassets/css/bootstrap.css') }}" rel="stylesheet">
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('propertyassets/css/slick.css?v=5') }}">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('propertyassets/css/nouislider.css') }}">
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="{{ asset('propertyassets/css/jquery.fancybox.css') }}" type="text/css"
        media="screen" />
    <!-- Theme color -->
    <link id="switcher" href="{{ asset('propertyassets/css/theme-color/default-theme.css') }}" rel="stylesheet">

    <!-- Main style sheet -->
    <link href="{{ asset('propertyassets/css/style.css?v=4') }}" rel="stylesheet">


    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="aa-price-range">
    <!-- Pre Loader -->
    <div id="aa-preloader-area">
        <div class="pulse"></div>
    </div>
    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-angle-double-up"></i></a>
    <!-- END SCROLL TOP BUTTON -->

    <!-- Start header section -->
    <header id="aa-header" style="background-color: black">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-header-area">
                        <div class="row">
                            <div class="col-12">
                                <div class="aa-header-left">
                                    <div class="aa-telephone-no">
                                        <span class="fa fa-phone" style="margin-left: 5px"> </span><a style="color: white" href="tel:+2347061396988"> 07061396988</a>,<a
                                            href="tel:+2347083399007" style="color: white">07083399007</a>
                                    </div>
                                    <div class="aa-email hidden-xs">
                                        <span class="fa fa-envelope"> </span><a href="mailto:vidashpaints@gmail.com">
                                            vidashpaints@gmail.com</a>
                                    </div>
                                  
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End header section -->

    <!-- Start menu section -->
    <section id="aa-menu-area" style="background-color: gray">
        <nav class="navbar navbar-default main-navbar" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- LOGO -->

                    <!-- Image based logo -->
                    <a class="navbar-brand" href="#"><img src="{{ asset('welcome/images/vidashproperty.jpg') }}" style="margin-left: 10px"
                            width="100" height="60" alt="logo"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul id="top-menu" class="nav navbar-nav navbar-right aa-main-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li class=""><a href="#about">About Us</a></li>
                        <li class=""><a href="#properties">Properties</a></li>

                        <li class="dropdown"><a href="#company" data-toggle="dropdown" class="dropdown-toggle">Our
                                Companies <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('shelter') }}">Vidash Shelter</a></li>
                                <li><a href="{{ route('property') }}">Vidash Property</a></li>
                                <li><a href="{{ route('paint') }}">Vidash Paint</a></li>
                                <li><a href="{{ route('logistics') }}">Vidash Logistics</a></li>
                            </ul>
                        </li>
                        <li><a href="#profolio">Service</a></li>

                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>
    </section>
    <!-- End menu section -->

    <!-- Start slider  -->
    <section id="aa-slider">
        <div class="aa-slider-area">
            <!-- Top slider -->
            <div class="aa-top-slider">
                <!-- Top slider single slide -->
                <div class="aa-top-slider-single">
                    <img src="{{ asset('welcome/images/slider/4bsdpfv.jpeg') }}" alt="img">
                    <!-- Top slider content -->
                    <div class="aa-top-slider-content">
                        <span class="aa-top-slider-catg">Duplex</span>
                        <h2 class="aa-top-slider-title">1560 Square Feet</h2>
                        <p class="aa-top-slider-location"><i class="fa fa-map-marker"></i>South Beach, Miami (USA)</p>
                        <span class="aa-top-slider-off">30% OFF</span>
                        {{-- <p class="aa-top-slider-price">₦460,000</p> --}}
                        <a href="#" class="aa-top-slider-btn">Read More <span
                                class="fa fa-angle-double-right"></span></a>
                    </div>
                    <!-- / Top slider content -->
                </div>
                <!-- / Top slider single slide -->
                <!-- Top slider single slide -->
                <div class="aa-top-slider-single">
                    <img src="{{ asset('welcome/images/4bsdpfs.jpeg') }}" alt="img">
                    <!-- Top slider content -->
                    <div class="aa-top-slider-content">
                        <span class="aa-top-slider-catg">Duplex</span>
                        <h2 class="aa-top-slider-title">1560 Square Feet</h2>
                        <p class="aa-top-slider-location"><i class="fa fa-map-marker"></i>South Beach, Miami (USA)</p>
                        <span class="aa-top-slider-off">30% OFF</span>
                        {{-- <p class="aa-top-slider-price">₦460,000</p> --}}
                        <a href="#" class="aa-top-slider-btn">Read More <span
                                class="fa fa-angle-double-right"></span></a>
                    </div>
                    <!-- / Top slider content -->
                </div>
                <!-- / Top slider single slide -->
                <!-- Top slider single slide -->
                <div class="aa-top-slider-single">
                    <img src="{{ asset('welcome/images/slider/advert.jpeg') }}" alt="img">
                    <!-- Top slider content -->
                    <div class="aa-top-slider-content">
                        <span class="aa-top-slider-catg">Duplex</span>
                        <h2 class="aa-top-slider-title">1560 Square Feet</h2>
                        <p class="aa-top-slider-location"><i class="fa fa-map-marker"></i>South Beach, Miami (USA)</p>
                        <span class="aa-top-slider-off">30% OFF</span>
                        {{-- <p class="aa-top-slider-price">₦460,000</p> --}}
                        <a href="#" class="aa-top-slider-btn">Read More <span
                                class="fa fa-angle-double-right"></span></a>
                    </div>
                    <!-- / Top slider content -->
                </div>
                <!-- / Top slider single slide -->
                <!-- Top slider single slide -->
                <div class="aa-top-slider-single">
                    <img src="{{ asset('welcome/images/areiwview.jpg') }}" alt="img">
                    <!-- Top slider content -->
                    <div class="aa-top-slider-content">
                        <span class="aa-top-slider-catg">Duplex</span>
                        <h2 class="aa-top-slider-title">1560 Square Feet</h2>
                        <p class="aa-top-slider-location"><i class="fa fa-map-marker"></i>South Beach, Miami (USA)</p>
                        <span class="aa-top-slider-off">30% OFF</span>
                        {{-- <p class="aa-top-slider-price">₦460,000</p> --}}
                        <a href="#" class="aa-top-slider-btn">Read More <span
                                class="fa fa-angle-double-right"></span></a>
                    </div>
                    <!-- / Top slider content -->
                </div>
                <!-- / Top slider single slide -->
                <!-- Top slider single slide -->
                <div class="aa-top-slider-single">
                    <img src="{{ asset('welcome/images/slider/advert1.jpeg') }}" alt="img">
                    <!-- Top slider content -->
                    <div class="aa-top-slider-content">
                        <span class="aa-top-slider-catg">Duplex</span>
                        <h2 class="aa-top-slider-title">1560 Square Feet</h2>
                        <p class="aa-top-slider-location"><i class="fa fa-map-marker"></i>South Beach, Miami (USA)</p>
                        <span class="aa-top-slider-off">30% OFF</span>
                        {{-- <p class="aa-top-slider-price">₦460,000</p> --}}
                        <a href="#" class="aa-top-slider-btn">Read More <span
                                class="fa fa-angle-double-right"></span></a>
                    </div>
                    <!-- / Top slider content -->
                </div>
                <!-- / Top slider single slide -->
                <!-- Top slider single slide -->
                <div class="aa-top-slider-single">
                    <img src="{{ asset('works/VR.jpg') }}" alt="img">
                    <!-- Top slider content -->
                    <div class="aa-top-slider-content">
                        <span class="aa-top-slider-catg">Duplex</span>
                        <h2 class="aa-top-slider-title">1560 Square Feet</h2>
                        <p class="aa-top-slider-location"><i class="fa fa-map-marker"></i>South Beach, Miami (USA)</p>
                        <span class="aa-top-slider-off">30% OFF</span>
                        {{-- <p class="aa-top-slider-price">₦4,600,000</p> --}}
                        <a href="#" class="aa-top-slider-btn">Read More <span
                                class="fa fa-angle-double-right"></span></a>
                    </div>
                    <!-- / Top slider content -->
                </div>
                <!-- / Top slider single slide -->
            </div>
        </div>
    </section>
    <!-- End slider  -->

    <!-- Advance Search -->
    <section id="aa-advance-search">
        <div class="container">
            <div class="aa-advance-search-area">
                <div class="form">
                    <div class="aa-advance-search-top">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="aa-single-advance-search">
                                    <input type="text" placeholder="Type Your Location">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="aa-single-advance-search">
                                    <select>
                                        <option value="0" selected>Category</option>
                                        <option value="1">Flat</option>
                                        <option value="2">Land</option>
                                        <option value="3">Plot</option>
                                        <option value="4">Commercial</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="aa-single-advance-search">
                                    <select>
                                        <option value="0" selected>Type</option>
                                        <option value="1">Flat</option>
                                        <option value="2">Land</option>
                                        <option value="3">Plot</option>
                                        <option value="4">Commercial</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="aa-single-advance-search">
                                    <select>
                                        <option value="0" selected>Type</option>
                                        <option value="1">Flat</option>
                                        <option value="2">Land</option>
                                        <option value="3">Plot</option>
                                        <option value="4">Commercial</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="aa-single-advance-search">
                                    <input class="aa-search-btn" type="submit" value="Search">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="aa-advance-search-bottom">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="aa-single-filter-search">
                                    <span>AREA (SQ)</span>
                                    <span>FROM</span>
                                    <span id="skip-value-lower" class="example-val">30.00</span>
                                    <span>TO</span>
                                    <span id="skip-value-upper" class="example-val">100.00</span>
                                    <div id="aa-sqrfeet-range"
                                        class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="aa-single-filter-search">
                                    <span>PRICE (₦)</span>
                                    <span>FROM</span>
                                    <span id="skip-value-lower2" class="example-val">30.00</span>M
                                    <span>TO</span>
                                    <span id="skip-value-upper2" class="example-val">100.00</span>M
                                    <div id="aa-price-range"
                                        class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Advance Search -->

    <!-- About us -->
    <section id="aa-about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-about-us-area">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="aa-about-us-left">
                                    <img src="{{ asset('welcome/images/4279117-2048x1861.png') }}" alt="image">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="aa-about-us-right">
                                    <div class="aa-title">
                                        <h2>About Us</h2>
                                        <span></span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat ab dignissimos
                                        vitae maxime adipisci blanditiis rerum quae quos! Id at rerum maxime modi fugit
                                        vero corrupti, ad atque sit laborum ipsum sunt blanditiis suscipit odio, aut
                                        nostrum assumenda nobis rem a maiores temporibus non commodi laboriosam,
                                        doloremque expedita! Corporis, provident?</p>
                                    <ul>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, blanditiis.
                                        </li>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia.</li>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, blanditiis.
                                        </li>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / About us -->

    <!-- Latest property -->
    <section id="aa-latest-property">
        <div class="container">
            <div class="aa-latest-property-area">
                <div class="aa-title">
                    <h2>Latest Properties</h2>
                    <span></span>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum sit ea nobis quae vero
                        voluptatibus.</p>
                </div>
                <div class="aa-latest-properties-content">
                    <div class="row">
                        <div class="col-md-4">
                            <article class="aa-properties-item">
                                <a href="#" class="aa-properties-item-img">
                                    <img weight="370px" height="220px" src="{{ asset('works/DD 1.jpg') }}" alt="img">
                                </a>
                                <div class="aa-tag for-sale">
                                    For Sale
                                </div>
                                <div class="aa-properties-item-content">
                                    <div class="aa-properties-info">
                                        <span>5 Rooms</span>
                                        <span>2 Beds</span>
                                        <span>3 Baths</span>
                                        <span>1100 SQ FT</span>
                                    </div>
                                    <div class="aa-properties-about">
                                        <h3><a href="#">Appartment Title</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero
                                            ducimus quibusdam odit vitae.</p>
                                    </div>
                                    <div class="aa-properties-detial">
                                        {{-- <span class="aa-price">
                                            ₦35000
                                        </span> --}}
                                        <a href="#" class="aa-secondary-btn">View Details</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-4">
                            <article class="aa-properties-item">
                                <a href="#" class="aa-properties-item-img">
                                    <img weight="370px" height="220px" src="{{ asset('works/SDD 1.jpg') }}" alt="img">
                                </a>
                                <div class="aa-tag for-rent">
                                    For Sale
                                </div>
                                <div class="aa-properties-item-content">
                                    <div class="aa-properties-info">
                                        <span>5 Rooms</span>
                                        <span>2 Beds</span>
                                        <span>3 Baths</span>
                                        <span>1100 SQ FT</span>
                                    </div>
                                    <div class="aa-properties-about">
                                        <h3><a href="#">Appartment Title</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero
                                            ducimus quibusdam odit vitae.</p>
                                    </div>
                                    <div class="aa-properties-detial">
                                        {{-- <span class="aa-price">
                                            ₦11000
                                        </span> --}}
                                        <a href="#" class="aa-secondary-btn">View Details</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-4">
                            <article class="aa-properties-item">
                                <a href="#" class="aa-properties-item-img">
                                    <img weight="370px" height="220px" src="{{ asset('works/SDP1.jpg') }}" alt="img">
                                </a>
                                <div class="aa-tag sold-out">
                                    For Sale
                                </div>
                                <div class="aa-properties-item-content">
                                    <div class="aa-properties-info">
                                        <span>5 Rooms</span>
                                        <span>2 Beds</span>
                                        <span>3 Baths</span>
                                        <span>1100 SQ FT</span>
                                    </div>
                                    <div class="aa-properties-about">
                                        <h3><a href="#">Appartment Title</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero
                                            ducimus quibusdam odit vitae.</p>
                                    </div>
                                    <div class="aa-properties-detial">
                                        {{-- <span class="aa-price">
                                            ₦15000
                                        </span> --}}
                                        <a href="#" class="aa-secondary-btn">View Details</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-4">
                            <article class="aa-properties-item">
                                <a href="#" class="aa-properties-item-img">
                                    <img weight="370px" height="220px" src="{{ asset('works/SDP6.jpg') }}" alt="img">
                                </a>
                                <div class="aa-tag for-sale">
                                    For Sale
                                </div>
                                <div class="aa-properties-item-content">
                                    <div class="aa-properties-info">
                                        <span>5 Rooms</span>
                                        <span>2 Beds</span>
                                        <span>3 Baths</span>
                                        <span>1100 SQ FT</span>
                                    </div>
                                    <div class="aa-properties-about">
                                        <h3><a href="#">Appartment Title</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero
                                            ducimus quibusdam odit vitae.</p>
                                    </div>
                                    <div class="aa-properties-detial">
                                        {{-- <span class="aa-price">
                                            ₦35000
                                        </span> --}}
                                        <a href="#" class="aa-secondary-btn">View Details</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-4">
                            <article class="aa-properties-item">
                                <a href="#" class="aa-properties-item-img">
                                    <img weight="370px" height="220px" src="{{ asset('works/TDP 1.jpg') }}" alt="img">
                                </a>
                                <div class="aa-tag sold-out">
                                    For Sale
                                </div>
                                <div class="aa-properties-item-content">
                                    <div class="aa-properties-info">
                                        <span>5 Rooms</span>
                                        <span>2 Beds</span>
                                        <span>3 Baths</span>
                                        <span>1100 SQ FT</span>
                                    </div>
                                    <div class="aa-properties-about">
                                        <h3><a href="#">Appartment Title</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero
                                            ducimus quibusdam odit vitae.</p>
                                    </div>
                                    <div class="aa-properties-detial">
                                        {{-- <span class="aa-price">
                                            ₦11000
                                        </span> --}}
                                        <a href="#" class="aa-secondary-btn">View Details</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-4">
                            <article class="aa-properties-item">
                                <a href="#" class="aa-properties-item-img">
                                    <img weight="370px" height="220px" src="{{ asset('works/VR.jpg') }}" alt="img">
                                </a>
                                <div class="aa-tag for-rent">
                                    For Sale
                                </div>
                                <div class="aa-properties-item-content">
                                    <div class="aa-properties-info">
                                        <span>5 Rooms</span>
                                        <span>2 Beds</span>
                                        <span>3 Baths</span>
                                        <span>1100 SQ FT</span>
                                    </div>
                                    <div class="aa-properties-about">
                                        <h3><a href="#">Appartment Title</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim molestiae vero
                                            ducimus quibusdam odit vitae.</p>
                                    </div>
                                    <div class="aa-properties-detial">
                                        {{-- <span class="aa-price">
                                            ₦15000
                                        </span> --}}
                                        <a href="#" class="aa-secondary-btn">View Details</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Latest property -->

    <!-- Service section -->
    <section id="aa-service">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-service-area">
                        <div class="aa-title">
                            <h2>Our Service</h2>
                            <span></span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum sit ea nobis quae vero
                                voluptatibus.</p>
                        </div>
                        <!-- service content -->
                        <div class="aa-service-content">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="aa-single-service">
                                        <div class="aa-service-icon">
                                            <span class="fa fa-home"></span>
                                        </div>
                                        <div class="aa-single-service-content">
                                            <h4><a href="#">Property Sale</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto
                                                repellendus quasi asperiores itaque dolorem at.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="aa-single-service">
                                        <div class="aa-service-icon">
                                            <span class="fa fa-check"></span>
                                        </div>
                                        <div class="aa-single-service-content">
                                            <h4><a href="#">Property Rent</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto
                                                repellendus quasi asperiores itaque dolorem at.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="aa-single-service">
                                        <div class="aa-service-icon">
                                            <span class="fa fa-crosshairs"></span>
                                        </div>
                                        <div class="aa-single-service-content">
                                            <h4><a href="#">Property Development</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto
                                                repellendus quasi asperiores itaque dolorem at.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="aa-single-service">
                                        <div class="aa-service-icon">
                                            <span class="fa fa-bar-chart-o"></span>
                                        </div>
                                        <div class="aa-single-service-content">
                                            <h4><a href="#">Market Analysis</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto
                                                repellendus quasi asperiores itaque dolorem at.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Service section -->

    <!-- Promo Banner Section -->
    <section id="aa-promo-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-promo-banner-area">
                        <h3>Find Your Best Property</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, ex illum corporis
                            quibusdam numquam quisquam optio explicabo. Officiis odit quia odio dignissimos eius
                            repellat id!</p>
                        <a href="#" class="aa-view-btn">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Promo Banner Section -->

    <!-- Our Agent Section-->
    {{-- <section id="aa-agents">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-agents-area">
                        <div class="aa-title">
                            <h2>Our Agents</h2>
                            <span></span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum sit ea nobis quae vero
                                voluptatibus.</p>
                        </div>
                        <!-- agents content -->
                        <div class="aa-agents-content">
                            <ul class="aa-agents-slider">
                                <li>
                                    <div class="aa-single-agents">
                                        <div class="aa-agents-img">
                                            <img src="/propertyassets/img/agents/agent-1.png" alt="agent member image">
                                        </div>
                                        <div class="aa-agetns-info">
                                            <h4><a href="#">Philip Smith</a></h4>
                                            <span>Top Agent</span>
                                            <div class="aa-agent-social">
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="aa-single-agents">
                                        <div class="aa-agents-img">
                                            <img src="/propertyassets/img/agents/agent-5.png" alt="agent member image">
                                        </div>
                                        <div class="aa-agetns-info">
                                            <h4><a href="#">Adam Barney</a></h4>
                                            <span>Expert Agent</span>
                                            <div class="aa-agent-social">
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="aa-single-agents">
                                        <div class="aa-agents-img">
                                            <img src="/propertyassets/img/agents/agent-3.png" alt="agent member image">
                                        </div>
                                        <div class="aa-agetns-info">
                                            <h4><a href="#">Paul Walker</a></h4>
                                            <span>Director</span>
                                            <div class="aa-agent-social">
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="aa-single-agents">
                                        <div class="aa-agents-img">
                                            <img src="/propertyassets/img/agents/agent-4.png" alt="agent member image">
                                        </div>
                                        <div class="aa-agetns-info">
                                            <h4><a href="#">John Smith</a></h4>
                                            <span>Jr. Agent</span>
                                            <div class="aa-agent-social">
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="aa-single-agents">
                                        <div class="aa-agents-img">
                                            <img src="/propertyassets/img/agents/agent-1.png" alt="agent member image">
                                        </div>
                                        <div class="aa-agetns-info">
                                            <h4><a href="#">Philip Smith</a></h4>
                                            <span>Top Agent</span>
                                            <div class="aa-agent-social">
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="aa-single-agents">
                                        <div class="aa-agents-img">
                                            <img src="/propertyassets/img/agents/agent-5.png" alt="agent member image">
                                        </div>
                                        <div class="aa-agetns-info">
                                            <h4><a href="#">Adam Barney</a></h4>
                                            <span>Expert Agent</span>
                                            <div class="aa-agent-social">
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="aa-single-agents">
                                        <div class="aa-agents-img">
                                            <img src="/propertyassets/img/agents/agent-3.png" alt="agent member image">
                                        </div>
                                        <div class="aa-agetns-info">
                                            <h4><a href="#">Paul Walker</a></h4>
                                            <span>Director</span>
                                            <div class="aa-agent-social">
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="aa-single-agents">
                                        <div class="aa-agents-img">
                                            <img src="/propertyassets/img/agents/agent-4.png" alt="agent member image">
                                        </div>
                                        <div class="aa-agetns-info">
                                            <h4><a href="#">John Smith</a></h4>
                                            <span>Jr. Agent</span>
                                            <div class="aa-agent-social">
                                                <a href="#"><i class="fa fa-facebook"></i></a>
                                                <a href="#"><i class="fa fa-twitter"></i></a>
                                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- / Our Agent Section-->

    <!-- Client Testimonial -->
    <section id="aa-client-testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-client-testimonial-area">
                        <div class="aa-title">
                            <h2>What Client Say</h2>
                            <span></span>
                            <p>Our customer reviews, will give your assurance</p>
                        </div>
                        <!-- testimonial content -->
                        <div class="aa-testimonial-content">
                            <!-- testimonial slider -->
                            <ul class="aa-testimonial-slider">
                                <li>
                                    <div class="aa-testimonial-single">

                                        <div class="aa-testimonial-info">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate
                                                consequuntur ducimus cumque iure modi nesciunt recusandae eligendi vitae
                                                voluptatibus, voluptatum tempore, ipsum nisi perspiciatis. Rerum
                                                nesciunt fuga ab natus, dolorem?</p>
                                        </div>
                                        <div class="aa-testimonial-bio">
                                            <p>David Muller</p>
                                            <span>Web Designer</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="aa-testimonial-single">

                                        <div class="aa-testimonial-info">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate
                                                consequuntur ducimus cumque iure modi nesciunt recusandae eligendi vitae
                                                voluptatibus, voluptatum tempore, ipsum nisi perspiciatis. Rerum
                                                nesciunt fuga ab natus, dolorem?</p>
                                        </div>
                                        <div class="aa-testimonial-bio">
                                            <p>David Muller</p>
                                            <span>Web Designer</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="aa-testimonial-single">

                                        <div class="aa-testimonial-info">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate
                                                consequuntur ducimus cumque iure modi nesciunt recusandae eligendi vitae
                                                voluptatibus, voluptatum tempore, ipsum nisi perspiciatis. Rerum
                                                nesciunt fuga ab natus, dolorem?</p>
                                        </div>
                                        <div class="aa-testimonial-bio">
                                            <p>David Muller</p>
                                            <span>Web Designer</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Client Testimonial -->

    <!-- Client brand -->
    <section id="aa-client-brand">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-client-brand-area">
                        <ul class="aa-client-brand-slider">
                            <li>
                                <div class="aa-client-single-brand">
                                    <img src="{{asset('welcome/images/logo.jpg')}}" width="150" height="60" alt="brand image">
                                </div>
                            </li>
                            <li>
                                <div class="aa-client-single-brand">
                                    <img src="{{asset('welcome/images/vidashshelter.jpg')}}" width="150" height="60" alt="brand image">
                                </div>
                            </li>
                            <li>
                                <div class="aa-client-single-brand">
                                    <img src="{{asset('welcome/images/vidashlogistics.jpg')}}" width="150" height="60" alt="brand image">
                                </div>
                            </li>
                            <li>
                                <div class="aa-client-single-brand">
                                    <img src="{{asset('welcome/images/vidashpaint.jpg')}}" width="150" height="60" alt="brand image">
                                </div>
                            </li>
                            <li>
                                <div class="aa-client-single-brand">
                                    <img src="{{asset('welcome/images/vidashlogistics.jpg')}}" width="150" height="60" alt="brand image">
                                </div>
                            </li>
                            <li>
                                <div class="aa-client-single-brand">
                                    <img src="{{asset('welcome/images/logo.jpg')}}" width="150" height="60" alt="brand image">
                                </div>
                            </li>
                            <li>
                                <div class="aa-client-single-brand">
                                    <img src="{{asset('welcome/images/vidashpaint.jpg')}}" width="150" height="60" alt="brand image">
                                </div>
                            </li>
                            <li>
                                <div class="aa-client-single-brand">
                                    <img src="{{asset('welcome/images/vidashshelter.jpg')}}" width="150" height="60" alt="brand image">
                                </div>
                            </li>


                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <section class="footer-area" id="aa-footer" style="color: white">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-3 col-xs-12 col-lg-4">
                        <div class="single-footer">
                            <h2>About us</h2>
                            <p>Our Property company plan, implement,
                                and control the movement and storage of your goods, services, or
                                information within a given supply chain and between the points of origin and
                                consumption with our advance technologcal tracking and reporting system.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-3 col-xs-12 col-lg-4">
                        <div class="single-footer">
                            <h2>More links</h2>
                            <ul class="list" style="color: white">
                                <li><a href="{{ route('index') }}"  style="color: white">Vidash Group</a></li>
                                <li><a href="{{ route('shelter') }}"  style="color: white">Vidash Shelter</a></li>
                                <li><a href="{{ route('logistics') }}"  style="color: white">Vidash Logistic</a></li>
                                <li><a href="{{ route('paint') }}"  style="color: white">Vidash Paint</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-3 col-xs-12 col-lg-4">
                        <div class="single-footer">
                            <h2>Contact us</h2>
                            <ul class="list" style="color: white">
                                <li><a href=""  style="color: white"><span class="fa fa-map-marker"  style="color: white"></span> Vidash Logistics Ltd</a></li>
                                <li><span class="fa fa-phone"></span><a href="tel:+2348137970207"  style="color: white"> 08137970207</a>,<a
                                        href="tel:+2347083399007"  style="color: white">07083399007</a></li>
                                <li><span class="fa fa-envelope"> </span><a href="mailto:vidashlogistic@gmail.com"  style="color: white">
                                    vidashlogistic@gmail.com</a></li>
    
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Footer -->
        <footer id="aa-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="aa-footer-area">
                            <div class="row">
                                <div>
                                    <div class="aa-footer-left">
                                        <p> &copy; Copyright <?php echo date('Y'); ?> Vidash Group of Company. All Rights
                                            Reserved.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- / Footer -->



        <!-- jQuery library -->
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
        <script src="{{ asset('propertyassets/js/jquery.min.js') }}"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('propertyassets/js/bootstrap.js') }}"></script>
        <!-- slick slider -->
        <script type="text/javascript" src="{{ asset('propertyassets/js/slick.js') }}"></script>
        <!-- Price picker slider -->
        <script type="text/javascript" src="{{ asset('propertyassets/js/nouislider.js') }}"></script>
        <!-- mixit slider -->
        <script type="text/javascript" src="{{ asset('propertyassets/js/jquery.mixitup.js') }}"></script>
        <!-- Add fancyBox -->
        <script type="text/javascript" src="{{ asset('propertyassets/js/jquery.fancybox.pack.js') }}"></script>
        <!-- Custom js -->
        <script src="{{ asset('propertyassets/js/custom.js') }}"></script>

</body>

</html>
