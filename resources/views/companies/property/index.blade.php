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

    <link rel="stylesheet" href="{{ asset('buildshelter/css/custom.css?v=5') }}" />
    @laravelPWA

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
                        <li class=""><a href="#aa-about-us">About Us</a></li>
                        <li class=""><a href="#aa-latest-property">Properties</a></li>

                        <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Our
                                Companies <b class="caret"></b></a>
                            <ul class="dropdown-menu">

                                <li><a href="{{ route('index') }}">Vidash Group</a></li>
                                <li><a href="{{ route('shelter') }}">Vidash Shelter</a></li>
                                <li><a href="{{ route('paint') }}">Vidash Paint</a></li>
                                <li><a href="{{ route('logistics') }}">Vidash Logistics</a></li>
                            </ul>
                        </li>
                        <li><a href="#aa-service">Service</a></li>

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
                        <p class="aa-top-slider-location"><i class="fa fa-map-marker"></i>Topaz ,Off Gbaupe Road, Behind Aco Phase II, Airport Road , Abuja (NG)</p>
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
                        <p class="aa-top-slider-location"><i class="fa fa-map-marker"></i>Sapphire :Aco Behind Vidash City Shelters (Emerald), Airport Road, Abuja, Nigeria</p>
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
                        <p class="aa-top-slider-location"><i class="fa fa-map-marker"></i>Emerald: Lugbe, By Aco Estate, Behind Mantrac, Just After Arab Contractor, Airport Road, Abuja, Nigeria.</p>
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
                        <p class="aa-top-slider-location"><i class="fa fa-map-marker"></i>Gold: Lugbe 1 Extension, Off Idu Train Station Road, Behind Nigerian Army Housing Estate, Idu Axis, Abuja, Nigeria</p>
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
                                    <p>We are a property development company focused on premiering the integration of creatively innovative technology and professionalism into property development using sustainable methods.,</p>
                                    <p> VIDASH consist of highly regarded built environment professionals geared towards providing our clients with satisfaction </p>
                                    <p>We offer property in following location </p>

                                    <ul>
                                        <li> Vidash City Shelters (TOPAZ):
                                              Off Gbaupe Road, Behind Aco Phase II, Airport Road, Abuja, Nigeria
                                        </li>
                                        <li>Vidash City Shelters (Sapphire):
                                             Aco Behind Vidash City Shelters (Emerald), Airport Road, Abuja, Nigeria</li>
                                        <li>Vidash City Shelters (Emerald):
                                             Lugbe, By Aco Estate, Behind Mantrac, Just After Arab Contractor, Airport Road, Abuja, Nigeria.</li>
                                        <li>Vidash City Shelters (Gold):
                                            Lugbe 1 Extension, Off Idu Train Station Road, Behind Nigerian Army Housing Estate, Idu Axis, Abuja, Nigeria.
                                        </li>
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
                    <p> Check out some of our managed properties.</p>
                </div>
                <div class="aa-latest-properties-content">
                    <div class="row">
                        @foreach ( $properties as $property )
                        <div class="col-md-4">
                            <article class="aa-properties-item">
                                <a href="#" class="aa-properties-item-img">
                                    <img weight="370px" height="220px" src="{{ asset($property->image) }}" alt="img">
                                </a>
                                <div class="aa-tag for-sale">
                                    For Sale
                                </div>
                                <div class="aa-properties-item-content">
                                    <div class="aa-properties-info">
                                        <span>{{$property->description}}</span>
                                    </div>
                                    <div class="aa-properties-about">
                                        <h3><a href="#">{{$property->name}}</a></h3>

                                    </div>
                                    <div class="aa-properties-detial">
                                        <span class="aa-price">
                                            ₦{{$property->price}}
                                        </span>
                                        <a href="{{ route('propDetail',$property->id) }} " class="aa-secondary-btn">View Details</a>
                                    </div>
                                </div>
                            </article>
                        </div>
                        @endforeach

                        {{-- <div class="col-md-4">
                            <article class="aa-properties-item">
                                <a href="#" class="aa-properties-item-img">
                                    <img weight="370px" height="220px" src="{{ asset('works/SDD 1.jpg') }}" alt="img">
                                </a>
                                <div class="aa-tag for-rent">
                                    For Sale
                                </div>
                                <div class="aa-properties-item-content">
                                    <div class="aa-properties-info">
                                        <span>1 Living Room</span>
                                        <span>2 Beds</span>
                                        <span>800 SQ FT</span>
                                    </div>
                                    <div class="aa-properties-about">
                                        <h3><a href="#">Semi Detachable Duplex</a></h3>

                                    </div>
                                    <div class="aa-properties-detial">
                                        <span class="aa-price">
                                            ₦11000
                                        </span>
                                        <a href="#" class="aa-secondary-btn">View Details</a>
                                    </div>
                                </div>
                            </article>
                        </div> --}}

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
                            <p>We offer the best service in property management business. This include but not limited to:</p>
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
                                            <p>We help in sale property all over nigeria at affordable price with great payment plan.</p>
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
                                            <p>We offer property foe rent at affordable price.</p>
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
                                            <p>With our shelter company, we develop property and delievr on time.</p>
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
                                            <p>We give the best market strategic for our properties.</p>
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
                        <p>Check out someof our property on sale</p>
                        <a href="#" class="aa-view-btn">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Promo Banner Section -->

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
                                            <p>Best service ever,  Nice home </p>
                                        </div>
                                        <div class="aa-testimonial-bio">
                                            <p>Wale Oluoba </p>
                                            <span>Developer</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="aa-testimonial-single">

                                        <div class="aa-testimonial-info">
                                            <p>Got a nice world class, with their easy payment feature, so conveinent</p>
                                        </div>
                                        <div class="aa-testimonial-bio">
                                            <p>David Muller</p>
                                            <span>Businessman</span>
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
                            <p>We are a property development company focused on premiering the integration
                                 of creatively innovative technology and professionalism into property development using sustainable methods
                            .</p>
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
                                <li><a href=""  style="color: white"><span class="fa fa-map-marker"  style="color: white"></span> Vidash property Ltd</a></li>
                                <li><span class="fa fa-phone"></span><a href="tel:+2348137970207"  style="color: white"> 08137970207</a>,<a
                                        href="tel:+2347083399007"  style="color: white">07083399007</a></li>
                                <li><span class="fa fa-envelope"> </span><a href="mailto:vidashproperty@gmail.com"  style="color: white">
                                    vidashproperty@gmail.com</a></li>

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
