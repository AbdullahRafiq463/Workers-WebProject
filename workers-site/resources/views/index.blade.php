@extends('layouts.main')
@section('title', 'Home')
@section('main-container')

    <!-- start of hero -->
    <section class="hero hero-slider-wrapper hero-slider-style-2">
        <div class="hero-slider">
            <div class="slide">
                <img src="{{ url('frontend/assets/images/slider/slide-3.jpg')}}" alt class="slider-bg">
                <div class="container">
                    <div class="row">
                        <div class="col col-md-8 col-md-offset-2 slide-caption">
                            <h2>We provide the best <span>Home</span> Services</h2>
                            <p>"Your Trusted Help, Just a Click Away"</p>
                            <div class="btns">
                                <a href="#" class="theme-btn">About us</a>
                                <a href="#" class="theme-btn-s2">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slide">
                <img src="{{ url('frontend/assets/images/slider/slide-1.jpg')}}" alt class="slider-bg">
                <div class="container">
                    <div class="row">
                        <div class="col col-md-8 col-md-offset-2 slide-caption">
                            <h2>We provide the best <span>Home</span> Services</h2>
                            <p>"Skilled Professionals at Your Doorstep"</p>
                            <div class="btns">
                                <a href="#" class="theme-btn">About us</a>
                                <a href="#" class="theme-btn-s2">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slide">
                <img src="{{ url('frontend/assets/images/slider/slide-3.jpg')}}" alt class="slider-bg">
                <div class="container">
                    <div class="row">
                        <div class="col col-md-8 col-md-offset-2 slide-caption">
                            <h2>We provide the best <span>Home</span> Services</h2>
                            <p>"Connecting You with Trusted Local Experts"</p>
                            <div class="btns">
                                <a href="#" class="theme-btn">About us</a>
                                <a href="#" class="theme-btn-s2">Explore</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of hero slider -->


    <!-- start offer -->
    <section class="section-padding offer-section">
        <div class="container">
            <div class="row">
                <div class="col col-md-5">
                    <div class="section-title-s3">
                        <h2>Get full range of premium services for your Home</h2>
                    </div>
                    <div class="offer-text">
                        <p>At WORKERS.com, we connect you with skilled professionals across a wide range of
                            essential home services, making it easy to find trusted help when you need it most. From
                            plumbing and electrical work to cleaning, carpentry, and personal care, our platform is
                            built to offer quick access to qualified experts committed to quality and reliability.
                        </p>
                        <a href="#" class="theme-btn read-more">Read More</a>
                        <a href="#" class="theme-btn-s2 read-more">Company history</a>
                    </div>
                </div>
                <div class="col col-md-7">
                    <div class="offer-pic">
                        <img src="{{ url('frontend/assets/images/offer-pic.jpg')}}" alt>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end offer -->


    <!-- start cta -->
    <section class="cta section-padding parallax" data-bg-image="frontend/assets/images/cta-bg.jpg">
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
                        <p>With a commitment to quality, reliability, and customer satisfaction, we set the standard
                            for exceptional home services. Our skilled professionals, transparent process, and focus
                            on timely delivery make us the top choice for all your home needs.</p>
                    </div>
                </div>
                <div class="col col-md-3 col-sm-4">
                    <div class="feature-grid">
                        <div class="icon">
                            <i class="fi flaticon-people"></i>
                        </div>
                        <div class="details">
                            <h3>Expert Engineers</h3>
                            <p>Our team of certified engineers brings specialized knowledge and experience to each
                                project, ensuring top-quality results. From complex installations to routine
                                repairs, we provide expertise you can rely on.</p>
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
                            <p>Dedicated to your satisfaction, our customer support team is here to assist you every
                                step of the way. Quick responses and personalized care make your experience smooth
                                and stress-free.</p>
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
                            <p>Timeliness is our priority, and we’re committed to delivering services on schedule,
                                every time. With reliable timelines and efficient service, we help you keep life
                                running smoothly.</p>
                            <a href="#" class="more">Details <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end features -->
    <section class="services-s3 section-padding">
    <style>
        .services-grids {
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* 3 cards per row */
            gap: 30px; /* Uniform spacing between cards (both horizontally and vertically) */
        }

        .services-grids .grid {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Optional: Add slight shadow for better visuals */
            border-radius: 8px; /* Optional: Rounded corners for cards */
            overflow: hidden; /* Ensure content stays within card boundaries */
        }

        /* Ensure responsiveness for smaller devices */
        @media (max-width: 992px) {
            .services-grids {
                grid-template-columns: repeat(2, 1fr); /* 2 cards per row on medium screens */
            }
        }

        @media (max-width: 768px) {
            .services-grids {
                grid-template-columns: 1fr; /* 1 card per row on small screens */
            }
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col col-md-8 col-md-offset-2">
                <div class="section-title-s6">
                    <h2>Services we provide</h2>
                </div>
            </div>
        </div> <!-- end row -->

        <div class="services-grids">
            <!-- Card 1 -->
            <div class="grid">
                <div class="inner mk-bg-img">
                    <div class="details">
                        <div class="info">
                            <img src="{{ url('frontend/assets/images/services/img1.jfif') }}" alt class="bg-image">
                            <a href="service-single.html">
                                <h3><i class="fi flaticon-construction"></i>Plumbing Services</h3>
                            </a>
                            <p>Plumbers can assist with pipe repairs, leak fixes, installation of faucets, and general plumbing maintenance.</p>
                            <a href="service-single.html" class="more">Get Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="grid">
                <div class="inner mk-bg-img">
                    <div class="details">
                        <div class="info">
                            <img src="{{ url('frontend/assets/images/services/img2.jfif') }}" alt class="bg-image">
                            <a href="service-single.html">
                                <h3><i class="fi flaticon-construction"></i>Cleaning Services</h3>
                            </a>
                            <p>House cleaners for deep cleaning, regular housekeeping, move-in/move-out cleaning, and specialized services like carpet or window cleaning.</p>
                            <a href="service-single.html" class="more">Get Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="grid">
                <div class="inner mk-bg-img">
                    <div class="details">
                        <div class="info">
                            <img src="{{ url('frontend/assets/images/services/img3.jfif') }}" alt class="bg-image">
                            <a href="service-single.html">
                                <h3><i class="fi flaticon-construction"></i>Carpentry Services</h3>
                            </a>
                            <p>Carpenters for furniture repair, custom furniture making, cabinet repairs, and other woodworking tasks around the home.</p>
                            <a href="service-single.html" class="more">Get Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="grid">
                <div class="inner mk-bg-img">
                    <div class="details">
                        <div class="info">
                            <img src="{{ url('frontend/assets/images/services/img4.jfif') }}" alt class="bg-image">
                            <a href="service-single.html">
                                <h3><i class="fi flaticon-construction"></i>Electrical Services</h3>
                            </a>
                            <p>Electricians can handle tasks like fixing wiring issues, installing light fixtures, and setting up appliances.</p>
                            <a href="service-single.html" class="more">Get Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="grid">
                <div class="inner mk-bg-img">
                    <div class="details">
                        <div class="info">
                            <img src="{{ url('frontend/assets/images/services/img5.jfif') }}" alt class="bg-image">
                            <a href="service-single.html">
                                <h3><i class="fi flaticon-construction"></i>Painting Services</h3>
                            </a>
                            <p>Professional painters for interior and exterior painting, wallpaper installation, and minor wall repairs.</p>
                            <a href="service-single.html" class="more">Get Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="grid">
                <div class="inner mk-bg-img">
                    <div class="details">
                        <div class="info">
                            <img src="{{ url('frontend/assets/images/services/img6.jfif') }}" alt class="bg-image">
                            <a href="service-single.html">
                                <h3><i class="fi flaticon-construction"></i>Driver Services</h3>
                            </a>
                            <p>Professional drivers available for hire, catering to those who need personal drivers for errands or trips.</p>
                            <a href="service-single.html" class="more">Get Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 7 -->
            <div class="grid">
                <div class="inner mk-bg-img">
                    <div class="details">
                        <div class="info">
                            <img src="{{ url('frontend/assets/images/services/img7.jfif') }}" alt class="bg-image">
                            <a href="service-single.html">
                                <h3><i class="fi flaticon-construction"></i>Cooking Services</h3>
                            </a>
                            <p>Cooks and caterers for in-home meal preparation, event catering, and meal prep services.</p>
                            <a href="service-single.html" class="more">Get Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 8 -->
            <div class="grid">
                <div class="inner mk-bg-img">
                    <div class="details">
                        <div class="info">
                            <img src="{{ url('frontend/assets/images/services/img8.jfif') }}" alt class="bg-image">
                            <a href="service-single.html">
                                <h3><i class="fi flaticon-construction"></i>Handyman Services</h3>
                            </a>
                            <p>General handymen for minor repairs, installations, and general maintenance tasks around the home.</p>
                            <a href="service-single.html" class="more">Get Details</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 9 -->
            <div class="grid">
                <div class="inner mk-bg-img">
                    <div class="details">
                        <div class="info">
                            <img src="{{ url('frontend/assets/images/services/img9.jfif') }}" alt class="bg-image">
                            <a href="service-single.html">
                                <h3><i class="fi flaticon-construction"></i>Appliance Services</h3>
                            </a>
                            <p>Technicians for repairing and maintaining household appliances like refrigerators, washing machines, and more.</p>
                            <a href="service-single.html" class="more">Get Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end services-grids -->
    </div> <!-- end container -->
</section>

<p class="mb-0 d-flex flex-wrap gap-1"><h2> Hire Worker?</h2> <a href="#" data-bs-toggle="modal" data-bs-target="#logInModal"><h3 >Click Here To login</h3></a></p>

    <!-- start pricing -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-8 col-md-offset-2">
                    <div class="section-title-s7">
                        <h2>Our Pricing</h2>
                        <p>Our transparent, competitive pricing ensures you get the best value for top-quality
                            services—no hidden costs, just honest rates you can trust!</p>
                    </div>
                </div>
            </div> <!-- end row -->
            <div class="row">
                <div class="col col-xs-12">
                    <div class="pricing">
                        <ul class="pricing-tab">
                            <li class="active">
                                <a href="#tab-1" data-toggle="tab">One time</a>
                            </li>
                            <li>
                                <a href="#tab-2" data-toggle="tab">Annual</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content pricing-grids">
                            <div class="tab-pane in active" id="tab-1">
                                <div class="pricing-grid">
                                    <div class="pricing-header">
                                        <h3>Basic</h3>
                                        <div class="price"><span>$</span>78</div>
                                        <a href="#" class="sing-up">Sing up</a>
                                    </div>
                                    <div class="pricing-details">
                                        <div class="pricing-body">
                                            <ul>
                                                <li><i class="fa fa-angle-right"></i> Access to skilled workers for essential services.
                                                </li>
                                                <li><i class="fa fa-angle-right"></i> Standard response time (within 24 hours)</li>
                                                <li><i class="fa fa-angle-right"></i> Up to 5 service requests/month</li>
                                                <li><i class="fa fa-angle-right"></i> Basic support during business hours</li>
                                                <li><i class="fa fa-angle-right"></i> Ideal for occasional users</li>
                                            </ul>
                                        </div>
                                        <div class="pricing-footer">
                                            <a href="#">Go Annual and Save <span>$28</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pricing-grid">
                                    <div class="pricing-header">
                                        <h3>Premium</h3>
                                        <div class="price"><span>$</span>104</div>
                                        <a href="#" class="sing-up">Sing up</a>
                                    </div>
                                    <div class="pricing-details">
                                        <div class="pricing-body">
                                            <ul>
                                                <li><i class="fa fa-angle-right"></i> Priority access to top-rated professionals.
                                                </li>
                                                <li><i class="fa fa-angle-right"></i> Faster response time.</li>
                                                <li><i class="fa fa-angle-right"></i> Up to 10 service requests/month.</li>
                                                <li><i class="fa fa-angle-right"></i> Extended customer support hours.</li>
                                                <li><i class="fa fa-angle-right"></i> Great for frequent users seeking convenience.</li>
                                            </ul>
                                        </div>
                                        <div class="pricing-footer">
                                            <a href="#">Go Annual and Save <span>$28</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pricing-grid">
                                    <div class="pricing-header">
                                        <span class="off">20% off</span>
                                        <h3>Enterprise</h3>
                                        <div class="price"><span>$</span>165</div>
                                        <a href="#" class="sing-up">Sing up</a>
                                    </div>
                                    <div class="pricing-details">
                                        <div class="pricing-body">
                                            <ul>
                                                <li><i class="fa fa-angle-right"></i> Unlimited service requests.
                                                </li>
                                                <li><i class="fa fa-angle-right"></i> Instant access to top experts.</li>
                                                <li><i class="fa fa-angle-right"></i> 24/7 premium support.</li>
                                                <li><i class="fa fa-angle-right"></i> Covers advanced services like landscaping.</li>
                                                <li><i class="fa fa-angle-right"></i> Perfect for businesses or large households.</li>
                                            </ul>
                                        </div>
                                        <div class="pricing-footer">
                                            <a href="#">Go Annual and Save <span>$28</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-2">
                                <div class="pricing-grid">
                                    <div class="pricing-header">
                                        <h3>Basic</h3>
                                        <div class="price"><span>$</span>78</div>
                                        <a href="#" class="sing-up">Sing up</a>
                                    </div>
                                    <div class="pricing-details">
                                        <div class="pricing-body">
                                            <ul>
                                                <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet
                                                </li>
                                                <li><i class="fa fa-angle-right"></i> conse ctetuer adipiscing
                                                    elit.</li>
                                                <li><i class="fa fa-angle-right"></i> sed diam non ummy</li>
                                                <li><i class="fa fa-angle-right"></i> nibh euism</li>
                                                <li><i class="fa fa-angle-right"></i> od tincidunt ut</li>
                                                <li><i class="fa fa-angle-right"></i> dolore ma gna aliquam</li>
                                            </ul>
                                        </div>
                                        <div class="pricing-footer">
                                            <a href="#">Go Annual and Save <span>$28</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pricing-grid">
                                    <div class="pricing-header">
                                        <h3>Premium</h3>
                                        <div class="price"><span>$</span>104</div>
                                        <a href="#" class="sing-up">Sing up</a>
                                    </div>
                                    <div class="pricing-details">
                                        <div class="pricing-body">
                                            <ul>
                                                <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet
                                                </li>
                                                <li><i class="fa fa-angle-right"></i> conse ctetuer adipiscing
                                                    elit.</li>
                                                <li><i class="fa fa-angle-right"></i> sed diam non ummy</li>
                                                <li><i class="fa fa-angle-right"></i> nibh euism</li>
                                                <li><i class="fa fa-angle-right"></i> od tincidunt ut</li>
                                                <li><i class="fa fa-angle-right"></i> dolore ma gna aliquam</li>
                                            </ul>
                                        </div>
                                        <div class="pricing-footer">
                                            <a href="#">Go Annual and Save <span>$28</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pricing-grid">
                                    <div class="pricing-header">
                                        <span class="off">20% off</span>
                                        <h3>Enterprise</h3>
                                        <div class="price"><span>$</span>165</div>
                                        <a href="#" class="sing-up">Sing up</a>
                                    </div>
                                    <div class="pricing-details">
                                        <div class="pricing-body">
                                            <ul>
                                                <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit amet
                                                </li>
                                                <li><i class="fa fa-angle-right"></i> conse ctetuer adipiscing
                                                    elit.</li>
                                                <li><i class="fa fa-angle-right"></i> sed diam non ummy</li>
                                                <li><i class="fa fa-angle-right"></i> nibh euism</li>
                                                <li><i class="fa fa-angle-right"></i> od tincidunt ut</li>
                                                <li><i class="fa fa-angle-right"></i> dolore ma gna aliquam</li>
                                            </ul>
                                        </div>
                                        <div class="pricing-footer">
                                            <a href="#">Go Annual and Save <span>$28</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end pricing -->


    <!-- start contact-section -->
    <section class="contact-section section-padding parallax"
        data-bg-image="frontend/assets/images/contact-section-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col col-md-4 col-md-offset-1 col-md-5">
                    <div class="contact-section-contact-box">
                        <div class="section-title-white">
                            <h2>Contact</h2>
                        </div>
                        <div class="details">
                            <p>For any kind of query, contact us with the details below.</p>
                            <ul>
                                <li><i class="fa fa-phone"></i> +92 322-5912989</li>
                                <li><i class="fa fa-envelope"></i> info@workers.com</li>
                                <li><i class="fa fa-home"></i>Faislabad Road, Okara</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col col-lg-6 col-lg-offset-1 col-md-7">
                    <div class="section-title-white">
                        <h2>Request a Worker</h2>
                    </div>
                    <p>Easily request a skilled professional anytime—simply choose the service you need, and we’ll
                        connect you with the right expert!</p>

                    <div class="contact-form-s1 form">
                        <form method="post" id="contact-form" class="wpcf7-form contact-validation-active">
                            <div>
                                <label for="name">Full Name</label>
                                <input type="text" id="name" name="name">
                            </div>
                            <div>
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email">
                            </div>
                            <div>
                                <label for="phone">Phone Number</label>
                                <input type="text" id="phone" name="phone">
                            </div>
                            <div>
                                <label>Business Type</label>
                                <select name="select">
                                    <option selected disabled> -- Select One -- </option>
                                    <option value="Select One">Select One</option>
                                    <option value="Select Two">Select Two</option>
                                    <option value="Select Three">Select Three</option>
                                </select>
                            </div>
                            <div class="submit-btn-wrap">
                                <input value="Submit" class="theme-btn wpcf7-submit" type="submit">
                                <div id="loader">
                                    <i class="fa fa-refresh fa-spin fa-3x fa-fw"></i>
                                </div>
                            </div>
                            <div class="error-handling-messages">
                                <div id="success">Thank you</div>
                                <div id="error"> Error occurred while sending email. Please try again later.
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
        <div class="contact-women wow fadeInLeft">
            <img src="frontend/assets/images/contact-women.png" alt>
        </div>
    </section>
    <!-- end contact-section -->


    <!-- news-section -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-3 col-md-4">
                    <div class="section-title">
                        <h2>Recent news</h2>
                    </div>
                </div>
                <div class="col col-lg-6 col-md-5">
                    <p>"New services added to make your home care even easier—explore now and hire with
                        confidence!".</p>
                </div>
                <div class="col col-lg-3 col-md-3">
                    <div class="all-news-link">
                        <a href="#" class="theme-btn">More News</a>
                    </div>
                </div>
            </div> <!-- end row -->

            <div class="row">
                <div class="col col-xs-12">
                    <div class="news-grids">
                        <div class="grid">
                            <div class="entry-media">
                                <img src="frontend/assets/images/blog/img-1.jpg" alt>
                            </div>
                            <div class="entry-details">
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i>Nov 25</li>
                                        <li><i class="fa fa-comments"></i><a href="#">2 Comments</a></li>
                                    </ul>
                                </div>
                                <div class="entry-body">
                                    <h3><a href="#">Plumbing Services Success Story</a></h3>
                                    <p>Resolved 500+ emergency plumbing issues with an average response time of 30
                                        minutes, earning homeowner trust citywide.</p>
                                </div>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="entry-media">
                                <img src="frontend/assets/images/blog/img-2.jpg" alt>
                            </div>
                            <div class="entry-details">
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i>Nov 25</li>
                                        <li><i class="fa fa-comments"></i><a href="#">2 Comments</a></li>
                                    </ul>
                                </div>
                                <div class="entry-body">
                                    <h3><a href="#">Expanding into Landscaping</a></h3>
                                    <p>Transformed 200+ lawns in two weeks, delivering professional gardening and
                                        landscaping to elevate outdoor spaces.</p>
                                </div>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="entry-media">
                                <img src="frontend/assets/images/blog/img-3.jpg" alt>
                            </div>
                            <div class="entry-details">
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="fa fa-clock-o"></i>Nov 25</li>
                                        <li><i class="fa fa-comments"></i><a href="#">2 Comments</a></li>
                                    </ul>
                                </div>
                                <div class="entry-body">
                                    <h3><a href="#">Customer Milestone in Appliance Repairs</a></h3>
                                    <p>Serviced 1,000+ appliances with a 4.9/5 rating for efficiently restoring
                                        daily routines seamlessly.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end news-section -->

<!-- Register Worker Modal -->
<div class="modal fade" id="registerWorkerModal" tabindex="-1" role="dialog" aria-labelledby="registerWorkerModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerWorkerModalLabel">Register Worker</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="registerWorkerForm" method="POST" action="{{ route('register.worker') }}">
                    @csrf
                    <div class="form-group">
                        <label for="workerName">Name</label>
                        <input type="text" class="form-control" id="workerName" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="workerEmail">Email</label>
                        <input type="email" class="form-control" id="workerEmail" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="workerPhone">Phone</label>
                        <input type="text" class="form-control" id="workerPhone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="workerSkill">Skill</label>
                        <input type="text" class="form-control" id="workerSkill" name="skill" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection    