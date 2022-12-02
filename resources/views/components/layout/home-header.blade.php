<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GOODLIFE -{{ $title }}</title>

    <!-- Stylesheet -->
    <link rel="stylesheet" href="assets/css/vendor.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

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
    <!-- navbar start -->
    <div class="navbar-area navbar-area-3">
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

                </div>
                <div class="collapse navbar-collapse" id="dkt_main_menu">
                    <ul class="navbar-nav menu-open text-center">
                        <li>
                            <a href="{{ route('home.index') }}">Home</a>

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
                        <li><a class="btn btn-base" href="{{ route('home.contact') }}">CONTACT US <i
                                    class="fa fa-plus"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- navbar end -->
