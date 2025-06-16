@extends('layouts.main')
@section('title', 'About')
@section('main-container')
    <!-- start page-title -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>Project single</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ url('/')}}">Home</a></li>
                        <li>Project single</li>
                    </ol>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end page-title -->


    <!-- start project-single-section -->
    <section class="project-single-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-7">
                    <div class="project-single-img">
                        <img src="{{ url('assets/images/project-single-img.jpg')}}" alt>
                    </div>
                </div>
                <div class="col col-md-5">
                    <div class="project-single-details">
                        <h3>Santiago Bernabeu</h3>
                        <p>Dut perspiciatis unde omnis iste natus error sit voluptatems accusantium doloremqu laudantiums
                            ut, totams se aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae
                            duis autems vell eums iriure dolors in hendrerit saep.</p>
                        <p>Eveniet in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis
                            at seds eros sed et accumsan et iusto odio dignissim. Temporibus autem quibusdam et aut
                            officiis.</p>
                        <ul class="project-info">
                            <li><i class="fa fa-tag"></i> <span>Category:</span> Construction</li>
                            <li><i class="fa fa-user"></i> <span>Client:</span> Real Madrid C.F</li>
                            <li><i class="fa fa-calendar"></i> <span>Date:</span> 24/11/2017</li>
                            <li><i class="fa fa-external-link"></i> <span>Website::</span> www.madridista.esp</li>
                        </ul>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end project-single-section -->

@endsection
