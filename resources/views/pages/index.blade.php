<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GOODLIFE - Property</title>

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

</head>

<body>

    <!-- preloader area start -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- preloader area end -->

    <!-- search popup start-->
    <div class="body-overlay" id="body-overlay"></div>
    <div class="td-search-popup" id="td-search-popup">
        <form action="index.html" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- search popup end-->

    <!-- navbar start -->
    <div class="navbar-area navbar-area-1">
        <!-- navbar top start -->
        <div class="navbar-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 text-lg-left text-center">
                        <ul>
                            <li>
                                <p><img src="assets/img/icon/location.png" alt="img"> Dar es Salam 133/PSSF
                                    Commercial
                                    Complex</p>
                            </li>
                            <li>
                                <p><img src="assets/img/icon/phone.png" alt="img"> +(255)763 949 719</p>
                            </li>
                            <li>
                                <p><img src="assets/img/icon/envelope.png" alt="img"> info.goodlifeproperty.co.tz
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <ul class="topbar-right text-lg-right text-center">

                            <li class="social-area">
                                <a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                                <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                                <a href="#"><i class="fab fa-skype" aria-hidden="true"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg">
            <div class="container nav-container">
                <div class="responsive-mobile-menu">
                    <button class="menu toggle-btn d-block d-lg-none" data-target="#dkt_main_menu" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="icon-left"></span>
                        <span class="icon-right"></span>
                    </button>
                </div>
                <div class="logo">
                    <a href="index.html">
                        GOODLIFE
                        <!-- <img src="assets/img/logo.png" alt="img"> -->
                    </a>
                </div>
                <div class="nav-right-part nav-right-part-mobile">
                    <ul>

                        <li><a class="btn btn-base" href="add-property.html"><span class="btn-icon"><i
                                        class="fa fa-plus"></i></span> <span class="btn-text">COUNT US</span></a>
                        </li>
                    </ul>
                </div>
                <div class="collapse navbar-collapse" id="dkt_main_menu">
                    <ul class="navbar-nav menu-open text-center">
                        <li>
                            <a class="{{ request()->is('/*') ? 'active' : '' }}"
                                href="{{ route('home.index') }}">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('home.property') }}">Property</a>

                        </li>
                        <li>
                            <a href="{{ route('home.about') }}">About</a>

                        </li>
                        <li>
                            <a href="{{ route('home.blog') }}">Blog</a>

                        </li>
                        <li><a href="{{ route('home.contact') }}">Contact</a></li>
                    </ul>
                </div>
                <div class="nav-right-part nav-right-part-desktop">
                    <ul>

                        <li><a class="btn btn-base" href="{{ route('home.contact') }}"><span class="btn-icon"><i
                                        class="fa fa-plus"></i></span> <span class="btn-text">CONTACT US</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- navbar end -->

    <!-- banner start -->
    <div class="banner-area banner-area-1 banner-area-bg" style="background: url(assets/img/banner/slide2.jpg);">
        <div class="container">
            <div class="banner-area-inner">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="banner-inner text-center">
                            <p>The Best Way To Find Your Perfect Property,</p>
                            <div class="line"></div>
                            <h2>A VISION FOR YOUR LIFE</h2>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- banner end -->

    <!-- service start -->
    <div class="service-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-10">
                    <div class="single-service-wrap">
                        <div class="thumb">
                            <img src="assets/img/service/1.png" alt="icon">
                        </div>
                        <div class="single-service-details">
                            <h4><a href="property-details.html">Our Main Business</a></h4>
                            <p>
                                Land Development (Develop & Sale),
                                Build and Lease,
                                Build and Sale,
                                Property Consultants
                                .</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-10">
                    <div class="single-service-wrap">
                        <div class="thumb">
                            <img src="assets/img/service/2.png" alt="icon">
                        </div>
                        <div class="single-service-details">
                            <h4><a href="property-details.html">Our Mission</a></h4>
                            <p>
                                To improve cost effectiveness in the real estate industry, while maintaining high
                                service levels.To continue exploring technological innovations.To improve efficiency of
                                the real estate industry.To use digital transformation and innovation to gain
                                competitive advantage in the real estate industry.To provide the best customer care
                                services that
                                transcends towards environmenent sustainability and societal wellbeing.




                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-10">
                    <div class="single-service-wrap mb-0">
                        <div class="thumb">
                            <img src="assets/img/service/3.png" alt="icon">
                        </div>
                        <div class="single-service-details">
                            <h4><a href="property-details.html">Our Vision</a></h4>
                            <p>To be the best real estate service provider in Tanzania through quality services and
                                community involvement.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service end -->

    <!-- product area start -->
    <div class="product-area pd-top-118 pd-bottom-90">
        <div class="container">
            <div class="section-title text-center">
                <h6>We are offring the best properties</h6>
                <h2>Best Property For You</h2>
            </div>
            <div class="row justify-content-center">
                <x-layout.home-best />
                <x-layout.home-best />
                <x-layout.home-best />
            </div>
        </div>
    </div>
    <!-- product area end -->

    <div class="testimonial-area pd-top-118 pd-bottom-120 bg-overlay" style="background: url(assets/img/bg/2.png);">
        <div class="bg-overlay-wrap">
            <div class="section-title style-white text-center">
                <h6>Our Testomonial </h6>
                <h2>What Client Say</h2>
                <p>Lorem ipsum dolor amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, </p>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="testimonial-slider-1 owl-carousel">
                            <div class="item">
                                <div class="single-testimonial-inner style-two text-center">
                                    <div class="thumb main-thumb">
                                        <img src="assets/img/testimonial/1.png" alt="img">
                                    </div>
                                    <div class="details">
                                        <h6 class="name">Sarif Jaya Miprut</h6>
                                        <p>“consecte Lorem ipsum dolor sit amet, Lorem ipsum dolor amet, consecte Lorem
                                            ipsum dolor sit adipisicing amet, consectetur sed do eiusmod tempor
                                            incididunt dolore magna consecrem adipisicing ipsum dolor sit amet,
                                            consectetur elit,’’ </p>
                                        <div class="rating-inner">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-testimonial-inner style-two text-center">
                                    <div class="thumb main-thumb">
                                        <img src="assets/img/testimonial/4.png" alt="img">
                                    </div>
                                    <div class="details">
                                        <h6 class="name">Sarif Jaya Miprut</h6>
                                        <p>“consecte Lorem ipsum dolor sit amet, Lorem ipsum dolor amet, consecte Lorem
                                            ipsum dolor sit adipisicing amet, consectetur sed do eiusmod tempor
                                            incididunt dolore magna consecrem adipisicing ipsum dolor sit amet,
                                            consectetur elit,’’ </p>
                                        <div class="rating-inner">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial area end -->

    <!-- Propartes area start -->
    <div class="propartes-area pd-top-118 pd-bottom-90">
        <div class="container">
            <div class="section-title text-center">
                <h6>Our Properties</h6>
                <h2>Our Properties </h2>
            </div>
            <div class="mgd-tab-inner text-center">
                <ul class="nav nav-tabs" id="myTab" role="tablist">

                    <li class="nav-item">
                        <a class="nav-link active" id="sell1-tab" data-toggle="tab" href="#sell1" role="tab"
                            aria-controls="sell1" aria-selected="false">Sell</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="rent1" role="tabpanel" aria-labelledby="rent1-tab">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="single-product-wrap style-bottom">
                                <div class="thumb">
                                    <img src="assets/img/other/port1.jpg" alt="img">
                                    <div class="product-wrap-details">
                                        <div class="media">
                                            <div class="author">
                                                <img src="assets/img/author/1.png" alt="img">
                                            </div>
                                            <div class="media-body">
                                                <h6><a href="#">Owner Name</a></h6>
                                                <p><img src="assets/img/icon/location-alt.png"
                                                        alt="img">Kigamboni
                                                    estate </p>
                                            </div>
                                            <a class="fav-btn float-right" href="#"><i
                                                    class="far fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details-inner">
                                    <h4><a href="#">Industrial Property</a></h4>
                                    <ul class="meta-inner">
                                        <li><img src="assets/img/icon/location2.png" alt="img">Kigamboni</li>
                                        <li><a href="#">For Sell</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor consectetur iicing elit, sed do eius Lorem ipsum dolo amet,
                                        costur adipisicing eiusmod.</p>
                                </div>
                                <div class="product-meta-bottom">
                                    <span class="price">TSH: 80,650.00</span>
                                    <span>1026 sq ft</span>
                                    <span>For sale</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-product-wrap style-bottom">
                                <div class="thumb">
                                    <img src="assets/img/project/2.png" alt="img">
                                    <div class="product-wrap-details">
                                        <div class="media">
                                            <div class="author">
                                                <img src="assets/img/author/2.png" alt="img">
                                            </div>
                                            <div class="media-body">
                                                <h6><a href="#">Owner Name</a></h6>
                                                <p><img src="assets/img/icon/location-alt.png" alt="img">Mbezi
                                                </p>
                                            </div>
                                            <a class="fav-btn float-right" href="#"><i
                                                    class="far fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details-inner">
                                    <h4><a href="#">Residential Property</a></h4>
                                    <ul class="meta-inner">
                                        <li><img src="assets/img/icon/location2.png" alt="img">Mbezi</li>
                                        <li><a href="#">For Sell</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor consectetur iicing elit, sed do eius Lorem ipsum dolo amet,
                                        costur adipisicing eiusmod.</p>
                                </div>
                                <div class="product-meta-bottom">
                                    <span class="price">TSH:80,650.00</span>
                                    <span>1026 sq ft</span>
                                    <span>For Sale</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-product-wrap style-bottom">
                                <div class="thumb">
                                    <img src="assets/img/project/3.png" alt="img">
                                    <div class="product-wrap-details">
                                        <div class="media">
                                            <div class="author">
                                                <img src="assets/img/author/3.png" alt="img">
                                            </div>
                                            <div class="media-body">
                                                <h6><a href="#">Owner Name</a></h6>
                                                <p><img src="assets/img/icon/location-alt.png"
                                                        alt="img">Kigamboni
                                                </p>
                                            </div>
                                            <a class="fav-btn float-right" href="#"><i
                                                    class="far fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details-inner">
                                    <h4><a href="#">Commercial</a></h4>
                                    <ul class="meta-inner">
                                        <li><img src="assets/img/icon/location2.png" alt="img">Tabata</li>
                                        <li><a href="#">For Sell</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor consectetur iicing elit, sed do eius Lorem ipsum dolo amet,
                                        costur adipisicing eiusmod.</p>
                                </div>
                                <div class="product-meta-bottom">
                                    <span class="price">TSH: 80,650.00</span>
                                    <span>1026 sq ft</span>
                                    <span>For Sale</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-product-wrap style-bottom">
                                <div class="thumb">
                                    <img src="assets/img/project/4.png" alt="img">
                                    <div class="product-wrap-details">
                                        <div class="media">
                                            <div class="author">
                                                <img src="assets/img/author/4.png" alt="img">
                                            </div>
                                            <div class="media-body">
                                                <h6><a href="#">Owner Name</a></h6>
                                                <p><img src="assets/img/icon/location-alt.png" alt="img">Kimara
                                                    Mwisho
                                                </p>
                                            </div>
                                            <a class="fav-btn float-right" href="#"><i
                                                    class="far fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details-inner">
                                    <h4><a href="#">Argicultural</a></h4>
                                    <ul class="meta-inner">
                                        <li><img src="assets/img/icon/location2.png" alt="img">Kimara Mwisho</li>
                                        <li><a href="#">For Sell</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor consectetur iicing elit, sed do eius Lorem ipsum dolo amet,
                                        costur adipisicing eiusmod.</p>
                                </div>
                                <div class="product-meta-bottom">
                                    <span class="price">TSH: 80,650.00</span>
                                    <span>1026 sq ft</span>
                                    <span>For Sale</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-product-wrap style-bottom">
                                <div class="thumb">
                                    <img src="assets/img/project/5.png" alt="img">
                                    <div class="product-wrap-details">
                                        <div class="media">
                                            <div class="author">
                                                <img src="assets/img/author/5.png" alt="img">
                                            </div>
                                            <div class="media-body">
                                                <h6><a href="#">Owner Name</a></h6>
                                                <p><img src="assets/img/icon/location-alt.png" alt="img">Mbezi
                                                </p>
                                            </div>
                                            <a class="fav-btn float-right" href="#"><i
                                                    class="far fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details-inner">
                                    <h4><a href="#">Beach Side Property</a></h4>
                                    <ul class="meta-inner">
                                        <li><img src="assets/img/icon/location2.png" alt="img">New York</li>
                                        <li><a href="#">For Sell</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor consectetur iicing elit, sed do eius Lorem ipsum dolo amet,
                                        costur adipisicing eiusmod.</p>
                                </div>
                                <div class="product-meta-bottom">
                                    <span class="price">$ 80,650.00</span>
                                    <span>1026 sq ft</span>
                                    <span>For Sale</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-product-wrap style-bottom">
                                <div class="thumb">
                                    <img src="assets/img/project/6.png" alt="img">
                                    <div class="product-wrap-details">
                                        <div class="media">
                                            <div class="author">
                                                <img src="assets/img/author/6.png" alt="img">
                                            </div>
                                            <div class="media-body">
                                                <h6><a href="#">Owner Name</a></h6>
                                                <p><img src="assets/img/icon/location-alt.png" alt="img">Mbezi
                                                </p>
                                            </div>
                                            <a class="fav-btn float-right" href="#"><i
                                                    class="far fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details-inner">
                                    <h4><a href="#">Special Purpose Property</a></h4>
                                    <ul class="meta-inner">
                                        <li><img src="assets/img/icon/location2.png" alt="img">Mbezi</li>
                                        <li><a href="#">For Sell</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor consectetur iicing elit, sed do eius Lorem ipsum dolo amet,
                                        costur adipisicing eiusmod.</p>
                                </div>
                                <div class="product-meta-bottom">
                                    <span class="price">TSH 80,650.00</span>
                                    <span>1026 sq ft</span>
                                    <span>For Sale</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="sell1" role="tabpanel" aria-labelledby="sell1-tab">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="single-product-wrap style-bottom">
                                <div class="thumb">
                                    <img src="assets/img/project/4.png" alt="img">
                                    <div class="product-wrap-details">
                                        <div class="media">
                                            <div class="author">
                                                <img src="assets/img/author/4.png" alt="img">
                                            </div>
                                            <div class="media-body">
                                                <h6><a href="#">Owner Name</a></h6>
                                                <p><img src="assets/img/icon/location-alt.png" alt="img">New York
                                                    real
                                                    estate </p>
                                            </div>
                                            <a class="fav-btn float-right" href="#"><i
                                                    class="far fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details-inner">
                                    <h4><a href="property-details.html">Farm House</a></h4>
                                    <ul class="meta-inner">
                                        <li><img src="assets/img/icon/location2.png" alt="img">New York</li>
                                        <li><a href="#">For Sell</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor consectetur iicing elit, sed do eius Lorem ipsum dolo amet,
                                        costur adipisicing eiusmod.</p>
                                </div>
                                <div class="product-meta-bottom">
                                    <span class="price">$ 80,650.00</span>
                                    <span>For sale</span>
                                    <span>1 year ago</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-product-wrap style-bottom">
                                <div class="thumb">
                                    <img src="assets/img/project/5.png" alt="img">
                                    <div class="product-wrap-details">
                                        <div class="media">
                                            <div class="author">
                                                <img src="assets/img/author/5.png" alt="img">
                                            </div>
                                            <div class="media-body">
                                                <h6><a href="#">Owner Name</a></h6>
                                                <p><img src="assets/img/icon/location-alt.png" alt="img">New York
                                                    real
                                                    estate </p>
                                            </div>
                                            <a class="fav-btn float-right" href="#"><i
                                                    class="far fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details-inner">
                                    <h4><a href="property-details.html">Beach Side House</a></h4>
                                    <ul class="meta-inner">
                                        <li><img src="assets/img/icon/location2.png" alt="img">New York</li>
                                        <li><a href="#">For Sell</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor consectetur iicing elit, sed do eius Lorem ipsum dolo amet,
                                        costur adipisicing eiusmod.</p>
                                </div>
                                <div class="product-meta-bottom">
                                    <span class="price">$ 80,650.00</span>
                                    <span>For sale</span>
                                    <span>1 year ago</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-product-wrap style-bottom">
                                <div class="thumb">
                                    <img src="assets/img/project/6.png" alt="img">
                                    <div class="product-wrap-details">
                                        <div class="media">
                                            <div class="author">
                                                <img src="assets/img/author/6.png" alt="img">
                                            </div>
                                            <div class="media-body">
                                                <h6><a href="#">Owner Name</a></h6>
                                                <p><img src="assets/img/icon/location-alt.png" alt="img">New York
                                                    real
                                                    estate </p>
                                            </div>
                                            <a class="fav-btn float-right" href="#"><i
                                                    class="far fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details-inner">
                                    <h4><a href="property-details.html">Gorgeous Hotel</a></h4>
                                    <ul class="meta-inner">
                                        <li><img src="assets/img/icon/location2.png" alt="img">New York</li>
                                        <li><a href="#">For Sell</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor consectetur iicing elit, sed do eius Lorem ipsum dolo amet,
                                        costur adipisicing eiusmod.</p>
                                </div>
                                <div class="product-meta-bottom">
                                    <span class="price">$ 80,650.00</span>
                                    <span>For sale</span>
                                    <span>1 year ago</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-product-wrap style-bottom">
                                <div class="thumb">
                                    <img src="assets/img/project/1.png" alt="img">
                                    <div class="product-wrap-details">
                                        <div class="media">
                                            <div class="author">
                                                <img src="assets/img/author/1.png" alt="img">
                                            </div>
                                            <div class="media-body">
                                                <h6><a href="#">Owner Name</a></h6>
                                                <p><img src="assets/img/icon/location-alt.png" alt="img">New York
                                                    real
                                                    estate </p>
                                            </div>
                                            <a class="fav-btn float-right" href="#"><i
                                                    class="far fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details-inner">
                                    <h4><a href="property-details.html">Daily Apartment</a></h4>
                                    <ul class="meta-inner">
                                        <li><img src="assets/img/icon/location2.png" alt="img">New York</li>
                                        <li><a href="#">For Sell</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor consectetur iicing elit, sed do eius Lorem ipsum dolo amet,
                                        costur adipisicing eiusmod.</p>
                                </div>
                                <div class="product-meta-bottom">
                                    <span class="price">$ 80,650.00</span>
                                    <span>For sale</span>
                                    <span>1 year ago</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-product-wrap style-bottom">
                                <div class="thumb">
                                    <img src="assets/img/project/2.png" alt="img">
                                    <div class="product-wrap-details">
                                        <div class="media">
                                            <div class="author">
                                                <img src="assets/img/author/2.png" alt="img">
                                            </div>
                                            <div class="media-body">
                                                <h6><a href="#">Owner Name</a></h6>
                                                <p><img src="assets/img/icon/location-alt.png" alt="img">New York
                                                    real
                                                    estate </p>
                                            </div>
                                            <a class="fav-btn float-right" href="#"><i
                                                    class="far fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details-inner">
                                    <h4><a href="property-details.html">Gorgeous Villa</a></h4>
                                    <ul class="meta-inner">
                                        <li><img src="assets/img/icon/location2.png" alt="img">New York</li>
                                        <li><a href="#">For Sell</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor consectetur iicing elit, sed do eius Lorem ipsum dolo amet,
                                        costur adipisicing eiusmod.</p>
                                </div>
                                <div class="product-meta-bottom">
                                    <span class="price">$ 80,650.00</span>
                                    <span>For sale</span>
                                    <span>1 year ago</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-product-wrap style-bottom">
                                <div class="thumb">
                                    <img src="assets/img/project/3.png" alt="img">
                                    <div class="product-wrap-details">
                                        <div class="media">
                                            <div class="author">
                                                <img src="assets/img/author/3.png" alt="img">
                                            </div>
                                            <div class="media-body">
                                                <h6><a href="#">Owner Name</a></h6>
                                                <p><img src="assets/img/icon/location-alt.png" alt="img">New York
                                                    real
                                                    estate </p>
                                            </div>
                                            <a class="fav-btn float-right" href="#"><i
                                                    class="far fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details-inner">
                                    <h4><a href="property-details.html">Daily Property</a></h4>
                                    <ul class="meta-inner">
                                        <li><img src="assets/img/icon/location2.png" alt="img">New York</li>
                                        <li><a href="#">For Sell</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor consectetur iicing elit, sed do eius Lorem ipsum dolo amet,
                                        costur adipisicing eiusmod.</p>
                                </div>
                                <div class="product-meta-bottom">
                                    <span class="price">$ 80,650.00</span>
                                    <span>For sale</span>
                                    <span>1 year ago</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Propartes area end -->







    <!-- blog area start -->

    <!-- Blog area end -->

    <!-- footer area start -->
    <x-layout.home-footer />
