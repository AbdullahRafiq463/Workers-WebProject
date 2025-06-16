@extends('layouts.main')
@section('title', 'About')
@section('main-container')
    <!-- start page-title -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <h2>Projects</h2>
                    <ol class="breadcrumb">
                        <li><a href="{{ url('/')}}">Home</a></li>
                        <li>Projects</li>
                    </ol>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end page-title -->


    <!-- recent-project -->
    <section class="section-padding projects-grid-view-section">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12">
                    <div class="projects-grid-view">
                        <div class="grid">
                            <div class="project-img">
                                <img src="{{ url('assets/images/projects/img-1.jpg')}}" alt>
                            </div>
                            <div class="project-info">
                                <div class="inner-info">
                                    <a href="{{ url('/') }}">
                                        <h3>Chemical Refinery</h3>
                                    </a>
                                    <div class="tags">Michigan, US</div>
                                </div>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="project-img">
                                <img src="{{ url('assets/images/projects/img-2.jpg')}}" alt>
                            </div>
                            <div class="project-info">
                                <div class="inner-info">
                                    <a href="{{ url('/') }}">
                                        <h3>Chemical Refinery</h3>
                                    </a>
                                    <div class="tags">Michigan, US</div>
                                </div>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="project-img">
                                <img src="{{ url('assets/images/projects/img-3.jpg')}}" alt>
                            </div>
                            <div class="project-info">
                                <div class="inner-info">
                                    <a href="{{ url('/') }}">
                                        <h3>Chemical Refinery</h3>
                                    </a>
                                    <div class="tags">Michigan, US</div>
                                </div>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="project-img">
                                <img src="{{ url('assets/images/projects/img-4.jpg')}}" alt>
                            </div>
                            <div class="project-info">
                                <div class="inner-info">
                                    <a href="{{ url('/') }}">
                                        <h3>Chemical Refinery</h3>
                                    </a>
                                    <div class="tags">Michigan, US</div>
                                </div>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="project-img">
                                <img src="{{ url('assets/images/projects/img-5.jpg')}}" alt>
                            </div>
                            <div class="project-info">
                                <div class="inner-info">
                                    <a href="{{ url('/') }}">
                                        <h3>Chemical Refinery</h3>
                                    </a>
                                    <div class="tags">Michigan, US</div>
                                </div>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="project-img">
                                <img src="{{ url('assets/images/projects/img-2.jpg')}}" alt>
                            </div>
                            <div class="project-info">
                                <div class="inner-info">
                                    <a href="{{ url('/') }}">
                                        <h3>Chemical Refinery</h3>
                                    </a>
                                    <div class="tags">Michigan, US</div>
                                </div>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="project-img">
                                <img src="{{ url('assets/images/projects/img-3.jpg')}}" alt>
                            </div>
                            <div class="project-info">
                                <div class="inner-info">
                                    <a href="{{ url('/') }}">
                                        <h3>Chemical Refinery</h3>
                                    </a>
                                    <div class="tags">Michigan, US</div>
                                </div>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="project-img">
                                <img src="{{ url('assets/images/projects/img-4.jpg')}}" alt>
                            </div>
                            <div class="project-info">
                                <div class="inner-info">
                                    <a href="{{ url('/') }}">
                                        <h3>Chemical Refinery</h3>
                                    </a>
                                    <div class="tags">Michigan, US</div>
                                </div>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="project-img">
                                <img src="{{ url('assets/images/projects/img-5.jpg')}}" alt>
                            </div>
                            <div class="project-info">
                                <div class="inner-info">
                                    <a href="{{ url('/') }}">
                                        <h3>Chemical Refinery</h3>
                                    </a>
                                    <div class="tags">Michigan, US</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row more-projects">
                <a href="{{ url('/') }}" class="theme-btn">More projects</a>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end recent-project -->

@endsection
