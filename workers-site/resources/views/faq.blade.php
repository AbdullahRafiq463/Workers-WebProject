@extends('layouts.main')
@section('title', 'About')
@section('main-container')

    <!-- start page-title -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>Testimonials</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Testimonials</li>
                    </ol>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end page-title -->


    <!-- start faq-section -->
    <section class="faq-pg-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-8">
                    <div class="section-title-s4">
                        <h2>Find informative answers to all your questions about Industrial products below.</h2>
                        <p>Do you have an inquiry that's not addressed here? Please contact us via email or <span>phone at
                                (123)456-7890.</span></p>
                    </div>
                </div>
            </div>

            <div class="faq-section">
                <div class="panel-group faq-accordion theme-accordion-s1" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                aria-expanded="true">Ipsam voluptatem quia voluptas sit</a>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                                    magna. Quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
                                    commodo consequat.</p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Ted
                                quia non numquam eius modi</a>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                                    magna. Quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
                                    commodo consequat.</p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                href="#collapseThree">Tempora incidunt ut labore</a>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                                    magna. Quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
                                    commodo consequat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end faq-section -->
        </div> <!-- end container -->
    </section>
    <!-- end faq-section -->
@endsection
