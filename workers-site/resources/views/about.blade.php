@extends('layouts.main')
@section('title', 'About')
@section('main-container')

    <!-- start page-title -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>About us</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>About us</li>
                    </ol>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end page-title -->


    <!-- start offer -->
    <section class="section-padding offer-section">
        <div class="container">
            <div class="row">
                <div class="col col-md-5">
                    <div class="section-title-s3">
                        <h2>Get full range of premium Industrial services for your business</h2>
                    </div>
                    <div class="offer-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisc ing elit, sed do eiusmod tempor inci didunt ut
                            labore et dolore magna.</p>
                        <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut
                            aliquid ex ea commodi consequatur</p>
                        <a href="#" class="theme-btn read-more">Read More</a>
                        <a href="#" class="theme-btn-s2 read-more">Company history</a>
                    </div>
                </div>
                <div class="col col-md-7">
                    <div class="offer-pic">
                        <img src="frontend/assets//images/offer-pic.jpg" alt>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end offer -->


    <!-- start cta -->
    <section class="cta section-padding parallax" data-bg-image="frontend/assets//images/cta-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>Our one and only priority is the <span>customer satisfaction</span></h2>
                    <a href="#" class="theme-btn-s5">Get a quote</a>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end cta -->


    <!-- start features -->
    <section class="features section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-3">
                    <div class="features-title">
                        <h2>Why we are best</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adi piscing elit, sed do eiusmod tempor.</p>
                    </div>
                </div>
                <div class="col col-md-3 col-sm-4">
                    <div class="feature-grid">
                        <div class="icon">
                            <i class="fi flaticon-people"></i>
                        </div>
                        <div class="details">
                            <h3>Expert Engineers</h3>
                            <p>Sed quia non numquam eius modi tempo ra incidunt ut labore et dolore magnam aliq uam quaera.
                            </p>
                            <a href="#" class="more">Details <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col col-md-3 col-sm-4">
                    <div class="feature-grid">
                        <div class="icon">
                            <i class="fi flaticon-support"></i>
                        </div>
                        <div class="details">
                            <h3>Customer Support</h3>
                            <p>Sed quia non numquam eius modi tempo ra incidunt ut labore et dolore magnam aliq uam quaera.
                            </p>
                            <a href="#" class="more">Details <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col col-md-3 col-sm-4">
                    <div class="feature-grid">
                        <div class="icon">
                            <i class="fi flaticon-time-passing"></i>
                        </div>
                        <div class="details">
                            <h3>Delivery On time</h3>
                            <p>Sed quia non numquam eius modi tempo ra incidunt ut labore et dolore magnam aliq uam quaera.
                            </p>
                            <a href="#" class="more">Details <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end features -->


    <!-- start our-team -->
    <section class="our-team our-team-bg section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-8 col-md-offset-2">
                    <div class="section-title-s5">
                        <h2>Our team</h2>
                        <p>Meet the dedicated professionals, committed to delivering exceptional home services with expertise, reliability, and a smile</p>
                    </div>
                </div>
            </div> <!-- end row -->

            <div class="row">
                <div class="col col-lg-10 col-lg-offset-1">
                    <div class="team-slider team-grids">
                        <div class="team-grid">
                            <div class="member-pic-social square-hover-effect-parent">
                                <div class="square-hover-effect">
                                    <span class="hover-1"></span>
                                    <span class="hover-2"></span>
                                    <span class="hover-3"></span>
                                    <span class="hover-4"></span>
                                </div>
                                <div class="member-pic">
                                    <img src="frontend/assets//images/team/img-1.jpg" alt>
                                </div>
                                <div class="social">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="member-info">
                                <h3>Abdullah Rafiq</h3>
                                <p>Owner</p>
                            </div>
                        </div>
                        <div class="team-grid">
                            <div class="member-pic-social square-hover-effect-parent">
                                <div class="square-hover-effect">
                                    <span class="hover-1"></span>
                                    <span class="hover-2"></span>
                                    <span class="hover-3"></span>
                                    <span class="hover-4"></span>
                                </div>
                                <div class="member-pic">
                                    <img src="frontend/assets//images/team/img-2.jpeg" alt>
                                </div>
                                <div class="social">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="member-info">
                                <h3>Muhammad Jamil</h3>
                                <p>Director</p>
                            </div>
                        </div>
                        <div class="team-grid">
                            <div class="member-pic-social square-hover-effect-parent">
                                <div class="square-hover-effect">
                                    <span class="hover-1"></span>
                                    <span class="hover-2"></span>
                                    <span class="hover-3"></span>
                                    <span class="hover-4"></span>
                                </div>
                                <div class="member-pic">
                                    <img src="frontend/assets//images/team/img-3.jpg" alt>
                                </div>
                                <div class="social">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="member-info">
                                <h3>Ch Ahsan</h3>
                                <p>Manager</p>
                            </div>
                        </div>
                        <div class="team-grid">
                            <div class="member-pic-social square-hover-effect-parent">
                                <div class="square-hover-effect">
                                    <span class="hover-1"></span>
                                    <span class="hover-2"></span>
                                    <span class="hover-3"></span>
                                    <span class="hover-4"></span>
                                </div>
                                <div class="member-pic">
                                    <img src="frontend/assets//images/team/img-1.jpg" alt>
                                </div>
                                <div class="social">
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="member-info">
                                <h3>Malcolm Marshall</h3>
                                <p>Director of the board</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- end container -->
    </section>
    <!-- end our-team -->


    <!-- start fun-fact -->
    <section class="fun-fact">
        <div class="container">
            <div class="row start-count">
                <div class="col col-sm-4">
                    <div class="grid">
                        <h3><span class="counter" data-count="1200">00</span><span>+</span></h3>
                        <span class="fact-title">Projects</span>
                        <p>With over [X+] projects completed, we bring unmatched expertise and dedication to every task, big or small.</p>
                    </div>
                </div>
                <div class="col col-sm-4">
                    <div class="grid">
                        <h3><span class="counter" data-count="800">00</span><span>+</span></h3>
                        <span class="fact-title">Clients</span>
                        <p>Our clients are the foundation of our success, and we take pride in building lasting relationships based on trust and excellence</p>
                    </div>
                </div>
                <div class="col col-sm-4">
                    <div class="grid">
                        <h3><span class="counter" data-count="99.5">00</span><span>%</span></h3>
                        <span class="fact-title">satisfaction</span>
                        <p>Your satisfaction is our top priority, and we go above and beyond to ensure every experience with us exceeds your expectations.</p>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end fun-fact -->


    <!-- start partners -->
    <section class="section-padding partners partners-bg">
        <h2 class="hidden">Partners</h2>
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="partners-slider">
                        <div class="grid">
                            <img src="frontend/assets//images/partners/img-1.png" alt>
                        </div>
                        <div class="grid">
                            <img src="frontend/assets//images/partners/img-2.png" alt>
                        </div>
                        <div class="grid">
                            <img src="frontend/assets//images/partners/img-3.png" alt>
                        </div>
                        <div class="grid">
                            <img src="frontend/assets//images/partners/img-4.png" alt>
                        </div>
                        <div class="grid">
                            <img src="frontend/assets//images/partners/img-2.png" alt>
                        </div>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end partners -->


@endsection
