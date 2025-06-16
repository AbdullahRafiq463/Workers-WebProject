<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="themexriver">
    <title>@yield('title') | {{ config('app.name') }}</title>
    <link href="{{ url('frontend/assets/images/favicon/favicon.png') }}" rel="shortcut icon" type="image/png">
    <link href="{{ url('frontend/assets/images/favicon/apple-touch-icon-57x57.png') }}" rel="apple-touch-icon"
        sizes="57x57">
    <link href="{{ url('frontend/assets/images/favicon/apple-touch-icon-72x72.png') }}" rel="apple-touch-icon"
        sizes="72x72">
    <link href="{{ url('frontend/assets/images/favicon/apple-touch-icon-114x114.png') }}" rel="apple-touch-icon" sizes="114x114">
    <link href="{{ url('frontend/assets/images/favicon/apple-touch-icon-144x144.png') }}" rel="apple-touch-icon" sizes="144x144">
    <link href="{{ url('frontend/assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/assets/css/flaticon.css') }} " rel="stylesheet">
    <link href="{{ url('frontend/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/assets/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/assets/css/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/assets/css/slick.css') }}" rel="stylesheet">
    <link href="{{ url('frontend/assets/css/slick-theme.css') }} " rel="stylesheet">
    <link href="{{ url('frontend/assets/css/owl.transitions.css') }} " rel="stylesheet">
    <link href="{{ url('frontend/assets/css/jquery.fancybox.css') }} " rel="stylesheet">
    <link href="{{ url('frontend/assets/css/jquery.mCustomScrollbar.min.css') }} " rel="stylesheet">
    <link href="{{ url('frontend/assets/css/style.css') }} " rel="stylesheet">
</head>

<body>

    <div class="page-wrapper">
        <div class="preloader">
            <div class="preloader-inner">
                <img src="{{ url('frontend/assets/images/preloader.gif')}}" alt>
            </div>
        </div>
        <header id="header" class="site-header header-style-5">
            <div class="topbar topbar-style-2">
                <div class="container">
                    <div class="row">
                        <div class="col col-sm-7">
                            <div class="topbar-contact-info-wrapper">
                                <div class="topbar-contact-info">
                                    <div>
                                        <i class="fa fa-location-arrow"></i>
                                        <div class="details">
                                            <p>Faislabad Road, Okara</p>
                                        </div>
                                    </div>
                                    <div>
                                        <i class="fa fa-phone"></i>
                                        <div class="details">
                                            <p>+93 322-5912989</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-sm-5">
                            <div class="social">
                                <span>Follow: </span>
                                <ul class="social-links">
                                    <li><a href="{{ url('/') }}"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="{{ url('/') }}"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="{{ url('/') }}"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="{{ url('/') }}"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="{{ url('/') }}"><i class="fa fa-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> <!-- end container -->
            </div> <!-- end topbar -->

            <div class="lower-topbar">
                <div class="container">
                    <div class="row">
                        <div class="col col-sm-3">
                            <div class="site-logo">
                                <a href="{{ url('/') }}"><img src="{{ url('frontend/assets/images/logo.jpg')}}" alt></a>
                            </div>
                        </div>
                        <div class="col col-sm-9">
                            <div class="awards">
                                <div>
                                    <div class="icon"><i class="fi flaticon-title"></i></div>
                                    <div class="award-info">
                                        <h4>Global Certified</h4>
                                        <p>Pak Service Providers</p>
                                    </div>
                                </div>
                                <div>
                                    <div class="icon"><i class="fi flaticon-medal"></i></div>
                                    <div class="award-info">
                                        <h4>Winner</h4>
                                        <p>Service Providers award 2022</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end lower-topbar -->

            <nav class="navigation navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="open-btn">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse navigation-holder">
                        <button class="close-navbar"><i class="fa fa-close"></i></button>
                        <ul class="nav navbar-nav">
                            <li class="menu-item-has-children">
                                <a href="{{ url('/') }}">Home</a>
                            <li><a href="{{ url('/') }}"></a></li>

                            </li>
                            <li><a href="{{ url('/about') }}">About</a></li>
                            <li><a href="{{ url('/services') }}">Services</a></li>
                            <li><a href="{{ url('/projects') }}">Projects</a></li>

                            <li class="menu-item-has-children">
                                <a href="{{ url('/blog')}}">Blog</a>

                            </li>
                            <li><a href="{{ url('/contact')}}">Contact</a></li>
                        </ul>
                    </div><!-- end of nav-collapse -->



                    <a href="{{ url('/')}}" class="theme-btn-s2 request-quote">Register Worker</a>
                </div><!-- end of container -->
            </nav> <!-- end navigation -->
        </header>
        <!-- end of header -->
